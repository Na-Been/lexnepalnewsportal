<?php

use App\Http\Controllers\Backend\BsdateController;
use App\Models\Video;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Modules\News\Entities\Category;
use Modules\News\Entities\News;
use Modules\News\Entities\NewsCategory;
use Modules\Setting\Entities\Setting;

function getSetting($name)
{
    $setting = Setting::pluck('value', 'name');
    return $setting[$name] ?? null;
}

function isAdmin()
{
    return auth()->user()->role;
}

function checkNewsCategory($news_id, $category_id)
{
    $check = NewsCategory::where('news_id', $news_id)->where('category_id', $category_id)->first();
    if ($check) {
        return 1;
    } else
        return 0;
}

function checkNewsSubCategory($news_id, $subCategory_id)
{
    $check = NewsCategory::where('news_id', $news_id)->where('sub_category_id', $subCategory_id)->first();
    if ($check) {
        return 1;
    } else
        return 0;
}

function getCategoryByNews($news_id): array
{
    $newsCategory = NewsCategory::where('news_id', $news_id)->with('category')->orderBy('id', 'DESC')->get();
    $title = [];
    foreach ($newsCategory as $key => $cat) {
        if ($cat->category)
            $title[$key] = $cat->category->title ?? '';
    }
    return $title ?? [];
}

function getNewsByCategory($category_id)
{
    return NewsCategory::where('category_id', $category_id)->with(['news', 'category'])->get()->sortByDesc('news.created_at');
}

function getDefaultImage(): string
{
    return 'https://ekagaj.com/media/albums/Rain_Banner_Photo_lY5woWwO6Q.jpg.300x195_q100.jpg';
}


function getVideoSection()
{
    return Video::where('status', 1)->latest()->take(8)->get();
}

function getFlashNews()
{
    return News::where('flash_news', 1)->latest()->get();
}

function getFirstCategoryData(): Collection
{
    $thirdCategory = Category::where('order', 1)->first();
    return $thirdCategory ? getNewsByCategory($thirdCategory->id) : collect();
}

function getSecondCategoryData(): Collection
{
    $thirdCategory = Category::where('order', 2)->first();
    return $thirdCategory ? getNewsByCategory($thirdCategory->id) : collect();
}

function getThirdCategoryData(): Collection
{
    $thirdCategory = Category::where('order', 3)->first();
    return $thirdCategory ? getNewsByCategory($thirdCategory->id) : collect();
}

function getFourthCategoryData(): Collection
{
    $fourthCategory = Category::where('order', 4)->first();
    return $fourthCategory ? getNewsByCategory($fourthCategory->id) : collect();
}

function getFifthCategoryData(): Collection
{
    $fifthCategory = Category::where('order', 5)->first();
    return $fifthCategory ? getNewsByCategory($fifthCategory->id) : collect();
}

function getSixthCategoryData(): Collection
{
    $sixth = Category::where('order', 6)->first();
    return $sixth ? getNewsByCategory($sixth->id) : collect();
}

function getSeventhCategoryData(): Collection
{
    $seventh = Category::where('order', 7)->first();
    return $seventh ? getNewsByCategory($seventh->id) : collect();
}

function getEighthCategoryData(): Collection
{
    $eighth = Category::where('order', 8)->first();
    return $eighth ? getNewsByCategory($eighth->id) : collect();
}

function getNinenthCategoryData(): Collection
{
    $ninth = Category::where('order', 9)->first();
    return $ninth ? getNewsByCategory($ninth->id) : collect();
}

function getTenthCategoryData(): Collection
{
    $ninth = Category::where('order', 10)->first();
    return $ninth ? getNewsByCategory($ninth->id) : collect();
}

function getEleventhCategory(): Collection
{
    $ninth = Category::where('order', 11)->first();
    return $ninth ? getNewsByCategory($ninth->id) : collect();
}

function getTwelfthCategory(): Collection
{
    $ninth = Category::where('order', 12)->first();
    return $ninth ? getNewsByCategory($ninth->id) : collect();
}

function getLatestFiveNews()
{
    return News::take(5)->latest()->get();
}

function getAllNews(): Collection
{
    return News::latest()->get() ?? collect();
}

function getCategoryTitle($model): ?string
{
    $title = isset($model) ? $model->category->title : '';
    return getSetting('site_title') . ' - ' . $title;
}

function getSubCategoryTitle($model): ?string
{
    $title = isset($model) ? $model->sub_category_name : '';
    return getSetting('site_title') . ' - ' . $title;
}

if (!function_exists('get_nepali_date')) {
    function get_nepali_date($date)
    {
        $bsdate = new BsdateController();
        return $bsdate->eng_to_nep($date);
    }
}

if (!function_exists('nepali_created_at')) {
    function nepali_created_at($created_at)
    {
        $date = $created_at;
        $bsdate = new BsdateController();
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
        $a = get_nepali_date($date);
        $year = Carbon::parse($a)->format('Y');
        $month = Carbon::parse($a)->format('m');
        $date = Carbon::parse($a)->format('d');
        $nepMonth = $bsdate->_get_nepali_month($month);
        $nepDate = $bsdate->convert_to_nepali_number($date);
        $nepYear = $bsdate->convert_to_nepali_number($year);
        return $nepMonth . ' ' . $nepDate . ', ' . $nepYear;

    }
}



