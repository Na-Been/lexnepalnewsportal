<section class="kaanun-college">
    <div class="container">
        <div class="row ">
            <div class="col-md-9 k-c">
                <div class="block">
                    <div class="block-header">
                        <h3><a href="{{route('category-slug',getEighthCategoryData()->first()->category->slug) }}"
                               style="color: #000000FF">
                                <b>{{getEighthCategoryData()->first()->category->title??'Eighth Category'}}</b></a></h3>
                        <h6 class="see-all">
                            <a href="{{route('category-slug',getEighthCategoryData()->first()->category->slug)}}">
                                सबै हेर्नुहोस् <i class="fas fa-chevron-right"></i>
                            </a>
                        </h6>
                    </div>
                    <div class="block-body">
                        <div class="row">
                            @forelse(getEighthCategoryData() as $key=>$value)
                                @if($key>=0 && $key <= 5)
                                    <div class="col-md-4">
                                        <a href="{{route('news-detail',$value->news->slug)}}">
                                            <div class="news-block" style="height:100%">
                                                <div class="news-image news-image-fixed3 ">
                                                    <img
                                                        src="{{$value->news->feature_image??getDefaultImage()}}"
                                                        alt=""/>
                                                </div>
                                                <div class="news-body">
                                                    <h4 class="news-title-1">
                                                        {!!($value->news->title)!!}
                                                    </h4>
                                                    <div class="news-date"><b>{!! $value->news->posted_by??'' !!} |</b>
                                                        {!! $value->news->nepali_created_at()??'' !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <!-- law-firm -->
            <div class="col-md-3">
                <div class="block">
                    @if(getNinenthCategoryData()->count() > 0)
                        <div class="block-header">
                            <h3><a href="{{route('category-slug',getNinenthCategoryData()->first()->category->slug) }}"
                                   style="color: #000000FF">
                                    <b>{{getNinenthCategoryData()->first()->category->title??'Ninetieth Category'}}</b></a>
                            </h3>
                            <h6 class="see-all">
                                <a href="{{route('category-slug',getNinenthCategoryData()->first()->category->slug)}}">
                                    सबै हेर्नुहोस् <i class="fas fa-chevron-right"></i></a>
                            </h6>
                        </div>
                    @endif
                    <div class="block-body">
                        @if(getNinenthCategoryData()->count() > 0)
                            <div class="news-block">
                                <a href="{{route('news-detail',getNinenthCategoryData()->first()->news->slug)}}">

                                    <div class="news-image">
                                        <img
                                            src="{{getNinenthCategoryData()->first()->news->feature_image??getDefaultImage()}}"/>

                                    </div>
                                    <h4 class="news-title-1">
                                        {{getNinenthCategoryData()->first()->news->title??''}}

                                    </h4>
                                </a>
                                <div class="news-date">
                                    <b>{!! getNinenthCategoryData()->first()->news->posted_by ??'' !!}
                                        |</b>
                                    {!! getNinenthCategoryData()->first()->news->nepali_created_at()??'' !!}
                                </div>
                            </div>
                        @endif
                        @forelse(getNinenthCategoryData()->slice(1, 2) as $key=>$value)
                            <div class="news-block">
                                <div class="row">
                                    <a href="{{route('news-detail',$value->news->slug)}}">

                                        <div class="col-md-4">

                                            <div class="news-image">
                                                <img
                                                    src="{{$value->news->feature_image??getDefaultImage()}}"
                                                    alt=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h4 class="news-title-1 m-0">
                                                {!!($value->news->title)!!}

                                            </h4>
                                            <div class="news-date pt-1"><b>{!! $value->news->posted_by  !!} |</b>
                                                {!! $value->news->nepali_created_at()??'' !!}

                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <hr/>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
