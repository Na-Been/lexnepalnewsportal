<?php

namespace Modules\News\Http\Controllers;

use App\Repo\NewsCategoryRepo;
use App\Repo\NewsRepo;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\News\Entities\News;
use Modules\News\Entities\NewsCategory;
use Modules\News\Entities\NewsSubCategory;
use Modules\News\Http\Requests\NewsRequest;

class NewsController extends Controller
{
    /**
     * @var NewsRepo
     */
    private $newsRepo;
    /**
     * @var News
     */
    private $news;
    /**
     * @var NewsCategoryRepo
     */
    private $newsCategoryRepo;

    /**
     * NewsController constructor.
     * @param NewsRepo $newsRepo
     * @param News $news
     * @param NewsCategoryRepo $newsCategoryRepo
     */
    public function __construct(NewsRepo $newsRepo, News $news, NewsCategoryRepo $newsCategoryRepo)
    {
        $this->newsRepo = $newsRepo;
        $this->news = $news;
        $this->newsCategoryRepo = $newsCategoryRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $news = News::latest()->get();
//        dd($this->news->first()->news_category);
//        dd(  explode(',',$news->first()->category_id));
        return view('news::news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $cats = $this->newsCategoryRepo->getAll();
        return view('news::news.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(NewsRequest $request)
    {
        $data = $request->all();
        $slug = str_replace('-', ' ', $request->title);
        $data['slug'] = Str::slug($slug, '-');
        try {
            DB::beginTransaction();
            if ($request->file('feature_image')) {
                $data['feature_image'] = $this->newsRepo->storeOrUpdateImage($request);
            }
            if ($request->file('author_image')) {
                $data['author_image'] = $this->newsRepo->storeOrUpdateImage($request);
            }
            $data['feature_image'] = $data['feature_image'] ?? $request->filepath;
            $data['user_id'] = Auth::id();
            if ($request->flash_news) {
                $data['flash_news'] = 1;
            }
            $news = $this->news->create($data);
            $this->newsRepo->storePivotAttributes($request, $news->id);
            DB::commit();
            session()->flash('success', 'News Successfully Created!');
            return back();
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error($exception->getMessage() . $exception->getTraceAsString());
            session()->flash('error', 'News could not be Create!');
            return back();
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Application|Factory|View|RedirectResponse
     */
    public function show(int $id)
    {
        try {
            $news = $this->newsRepo->findById($id);
            if ($news) {
                return view('news::news.show', compact('news'));
            } else {
                session()->flash('error', 'News could not be Found!');
                return back();
            }
        } catch (Exception $e) {
            $exception = $e->getMessage();
            session()->flash('error', 'EXCEPTION:' . $exception);
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Application|Factory|View|RedirectResponse
     */
    public function edit(int $id)
    {
        try {
            $news = $this->newsRepo->findById($id);
            if ($news) {
                $cats = $this->newsCategoryRepo->getAll();
                return view('news::news.edit', compact('news', 'cats'));
            } else {
                session()->flash('error', 'News could not be update!');
                return back();
            }
        } catch (Exception $e) {
            $exception = $e->getMessage();
            session()->flash('error', 'EXCEPTION:' . $exception);
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Application|Renderable|RedirectResponse|Redirector
     */
    public function update(Request $request, $id)
    {
        $id = (int)$id;
        try {
            DB::beginTransaction();
            $data = $request->all();
            $news = $this->newsRepo->findById($id);
            if ($news) {
                if ($request->file('feature_image')) {
                    $data['feature_image'] = $this->newsRepo->storeOrUpdateImage($request);
                }
                if ($request->file('author_image')) {
                    $data['author_image'] = $this->newsRepo->storeOrUpdateImage($request);
                }
                if ($request->flash_news == 'on') {
                    $data['flash_news'] = 1;
                } else {
                    $data['flash_news'] = 0;
                }
                $news->fill($data)->save();
                NewsCategory::where('news_id', $id)->delete();
                $this->newsRepo->storePivotAttributes($request, $news->id);
                DB::commit();
                session()->flash('success', 'News Successfully updated!');
                return redirect(route('news.index'));
            }
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('error', 'News Cannot Be Updated');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        try {
            $news = $this->newsRepo->findById($id);
            DB::beginTransaction();
            $deletenews=NewsCategory::where('news_id',$news->id)->get();
            foreach ($deletenews as $newsCategory) {
                $newsCategory->delete();
            }
            $news->delete();
            DB::commit();
            session()->flash('success', 'News successfully deleted!');
            return back();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage() . $e->getTraceAsString());
            session()->flash('error', 'News could not be delete!');
            return back();
        }
    }

    public function getNewsSubCategory($id)
    {
        $subCategories = NewsSubCategory::where('category_id', $id)->get();
        return response($subCategories);
    }

    public function changeStatus($id)
    {
        $id = (int)$id;
        $value = $this->news->findOrFail($id);
        $this->news
            ->where('id', '=', $id)
            ->update(['status' => ($value->status == '1') ? '0' : '1']);

    }
}
