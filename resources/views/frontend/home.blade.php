@extends('frontend.layouts.app')
@section('title',getSetting('site_title').' | '.'Home')
@section('content')
    @forelse($ads as $ad)
        @if($ad->rank == 1)
            <section class="ads py-3"><a href="{{$ad->url}}" title="{{$ad->title}}">
                    <div class="container">
                        <img width="100%" src="{{$ad->image}}" alt=""/>
                    </div>
                </a>
            </section>
        @endif
    @empty
        <h1></h1>
    @endforelse
    <!-- flash-news -->
    <section>
        <div>
            <section class="flash-news py-5">
                <div class="container">
                    @forelse(getFlashNews() as $flashNews)
                        <div class="flash-news-top">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{route('news-detail',$flashNews->slug)}}">
                                        <h6 class="post-title text-center mb-4">
                                <span style=""><b>{{$flashNews->highlight_text}} </b>
                                </span></h6>

                                        <div class="news-block">
                                            <h1 class="news-title text-center" style="font-size: 48px">
                                                <b>{{$flashNews->title}}</b>
                                            </h1>
                                            <div class="news-author text-center py-4">
                                                <div class="flash-author-img">
                                                    <img src="{{$flashNews->author_image}}"
                                                         alt="">
                                                </div>
                                                <span><b>{{$flashNews->posted_by}}</b></span>
                                            </div>
                                            <div class="block_image">
                                                <img width="100%"
                                                     src="{{$flashNews->feature_image}}"
                                                     alt=""/>
                                                <div class="news-description mt-3 text-center">
                                                    @php  $description = preg_replace("/<img[^>]+\>/i", "(फोटो) ", $flashNews->description);@endphp
                                                    {!! (\Illuminate\Support\Str::words($description, 45 , '...')) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @empty
                                <h1>No Flash News Available</h1>
                            @endforelse
                            <hr>
                        </div>
                </div>
            </section>

            @if(getFirstCategoryData()->count()>0)
                @include('frontend.news-block.first-block')
            @else
                <section class="ads py-3">
                    <div class="container">
                        <p>
                            No Record Found in First Row
                        </p>
                    </div>
                </section>
            @endif

            @forelse($ads as $ad)
                @if($ad->rank == 2)
                    <section class="ads py-3"><a href="{{$ad->url}}" title="{{$ad->title}}">
                            <div class="container">
                                <img width="100%" src="{{$ad->image}}"
                                     alt=""/>
                            </div>
                        </a>
                    </section>
                @endif
            @empty
                <h1></h1>
            @endforelse
        <!-- nayalaya-update -->

            @if($secondBlockNews->count()>0)
                @include('frontend.news-block.second-block')
            @else
                <section class="ads py-3">
                    <div class="container">
                        <p>
                            No Record Found in Second Row

                        </p>
                    </div>
                </section>
            @endif


            @forelse($ads as $ad)
                @if($ad->rank == 3)
                    <section class="ads py-3"><a href="{{$ad->url}}" title="{{$ad->title}}">
                            <div class="container">
                                <img width="100%" src="{{$ad->image}}"
                                     alt=""/>
                            </div>
                        </a>
                    </section>
                @endif
            @empty
                <h1></h1>
            @endforelse
            @if(getFourthCategoryData()->count()>0)
                @include('frontend.news-block.third-block')
            @else
                <section class="ads py-3">
                    <div class="container">
                        <b>
                            No Record Found in Third Row
                        </b>
                    </div>
                </section>
            @endif

        <!-- kaanun-sambad/bichar -->
            @forelse($ads as $ad)
                @if($ad->rank == 4)
                    <section class="ads py-3"><a href="{{$ad->url}}" title="{{$ad->title}}">
                            <div class="container">
                                <img width="100%" src="{{$ad->image}}"
                                     alt=""/>
                            </div>
                        </a>
                    </section>
                @endif
            @empty
                <h1></h1>
            @endforelse
        <!-- wyaktibises/sasmaran -->
            @if(getSixthCategoryData()->count()>0)
                @include('frontend.news-block.fourth-block')
            @else
                <section class="ads py-3">
                    <div class="container">
                        <b>
                            No Record Found in Fourth Row
                        </b>
                    </div>
                </section>
            @endif
        <!-- kaanun-college/lawfirm -->
            @if(getEighthCategoryData()->count()>0)
                @include('frontend.news-block.fifth-block')
            @else
                <section class="ads py-3">
                    <div class="container">
                        <b>
                            No Record Found in Fifth Row
                        </b>
                    </div>
                </section>
            @endif

            @forelse($ads as $ad)
                @if($ad->rank == 5)
                    <section class="ads py-3"><a href="{{$ad->url}}" title="{{$ad->title}}">
                            <div class="container">
                                <img width="100%" src="{{$ad->image}}"
                                     alt=""/>
                            </div>
                        </a>
                    </section>
                @endif
            @empty
                <h1></h1>
            @endforelse
        <!-- vide0-gallery -->
            @if(getVideoSection()->count()>0)
                @include('frontend.news-block.video-block')
            @else
                <section class="ads py-3">
                    <div class="container">
                        <b>
                            No Video record found
                        </b>
                    </div>
                </section>
            @endif

            @forelse($ads as $ad)
                @if($ad->rank == 6)
                    <section class="ads py-3"><a href="{{$ad->url}}" title="{{$ad->title}}">
                            <div class="container">
                                <img width="100%" src="{{$ad->image}}"
                                     alt=""/>
                            </div>
                        </a>
                    </section>
                @endif
            @empty
                <h1></h1>
        @endforelse


        <!-- Ainfaisala -->
        @if(getTenthCategoryData()->count()>0)
            @include('frontend.news-block.sixth-block')
        @else
        @endif

        <!-- pustak-samiksya/antarastrya -->

    @if(getEleventhCategory()->count()>0)
        @include('frontend.news-block.seventh-block')
    @else
    @endif
@endsection
