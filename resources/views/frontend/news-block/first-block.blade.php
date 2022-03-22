<section class="ads py-3">
    <div class="container">
        <img width="100%" src="https://jagaranpost.com/wp-content/uploads/2020/12/ads.gif" alt="">
    </div>

</section>

<section>
    <div class="container">
        <div class="block-header">
            <h3><a href="{{route('category-slug',getFirstCategoryData()->first()->category->slug) }}"
                   style="color: #000000FF">
                    <b>{{getFirstCategoryData()->first()->category->title??''}}</b>
                </a></h3>
            <h6 class="see-all">
                <a href="{{route('category-slug',getFirstCategoryData()->first()->category->slug)}}">
                    सबै हेर्नुहोस् <i class="fas fa-chevron-right"></i>
                </a>
            </h6>
        </div>
        <div class="fash-news-bottom">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="news-block">
                                <a href="{{route('news-detail',getFirstCategoryData()->first()->news->slug)}}">
                                    <div class="news-image ">
                                        <img
                                            src="{{getFirstCategoryData()->first()->news->feature_image??getDefaultImage()}}"
                                            alt=""/>
                                    </div>
                                    <div class="news-body">
                                        <h4 class="news-title">
                                            {!! getFirstCategoryData()->first()->news->title??''!!}

                                        </h4>
                                        <div class="news-date">
                                            <b> {!! getFirstCategoryData()->first()->news->posted_by??'' !!} |</b>
                                            {!! getFirstCategoryData()->first()->news->nepali_created_at()??'' !!}

                                        </div>
                                        <div class="news-description">
                                            {!!  (\Illuminate\Support\Str::words(getFirstCategoryData()->first()->news->description, 45 , '...')) !!}

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">

                            @forelse(getFirstCategoryData()->slice(1, 2) as $key=>$value)
                                <a href="{{route('news-detail',$value->news->slug)}}">

                                    <div class="news-block">
                                        <div class="news-image">
                                            <img
                                                src="{{$value->news->feature_image??getDefaultImage()}}"
                                                alt=""/>
                                        </div>
                                        <div class="news-body">

                                            <h1 class="news-title-1 mt-3">
                                                {!!($value->news->title)!!}

                                            </h1>
                                            <div class="news-date"><b>{!! $value->news->posted_by??'' !!} |</b>
                                                {!! $value->news->nepali_created_at()??'' !!}

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>

                <!--taja-news-->
                <div class="col-md-4">
                    @forelse(getAllNews() as $key=>$value)
                        @if($key >= 3 && $key <= 7)
                            <div class="news-block">
                                <a href="{{route('news-detail',$value->slug)}}">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="news-image">
                                                <img
                                                    src="{{$value->feature_image??getDefaultImage()}}"
                                                    alt=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h4 class="news-title-1 m-0">
                                                {!!($value->title)!!}

                                            </h4>
                                            <div class="news-date pt-1"><b>  {!! $value->posted_by??'' !!} |</b>
                                                {!! $value->nepali_created_at()??'' !!}

                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @if($key >= 3 && $key < 7)
                                    <hr/>
                                @endif
                            </div>
                        @endif
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
