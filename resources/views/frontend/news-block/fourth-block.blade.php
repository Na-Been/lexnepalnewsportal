<section class="wyaktibises">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="block">
                    <div class="block-header">
                        <h3><a href="{{route('category-slug',getSixthCategoryData()->first()->category->slug) }}"
                               style="color: #000000FF">
                                <b>{{getSixthCategoryData()->first()->category->title??'Third Fifth Category'}}</b></a>
                        </h3>
                        <h6 class="see-all">
                            <a href="{{route('category-slug',getSixthCategoryData()->first()->category->slug)}}">
                                सबै हेर्नुहोस् <i class="fas fa-chevron-right"></i> </a>
                        </h6>
                    </div>
                    <div class="block-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="news-block">
                                    <a href="{{route('news-detail',getSixthCategoryData()->first()->news->slug)}}">
                                        <div class="news-image">
                                            <img
                                                src="{{getSixthCategoryData()->first()->news->feature_image??getDefaultImage()}}"/>

                                        </div>
                                        <div class="news-body">
                                            <h4 class="news-title">
                                                {{getSixthCategoryData()->first()->news->title??''}}

                                            </h4>
                                            <div class="news-date">
                                                <b>{!! getSixthCategoryData()->first()->news->posted_by??'lexnepal' !!}</b>
                                                {!! getSixthCategoryData()->first()->news->nepali_created_at()??'' !!}

                                            </div>
                                            <div class="news-description">
                                                {!! (\Illuminate\Support\Str::words(getSixthCategoryData()->first()->news->description, 70 , '...')) !!}

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @forelse(getSixthCategoryData()->slice(1, 4) as $key=>$value)
                                    <div class="news-block">
                                        <a href="{{route('news-detail',$value->news->slug)}}">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="news-image">
                                                        <img
                                                            src="{{$value->news->feature_image??getDefaultImage()}}"
                                                            alt=""/>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <h4 class="news-title-1 m-0">
                                                        {!!($value->news->title)!!}

                                                    </h4>
                                                    <div
                                                        class="news-date pt-1">
                                                        <b>{!!($value->news->posted_by)??'LexNepal '!!}
                                                            | </b> {!! $value->news->nepali_created_at()??'' !!}

                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @empty

                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(getSeventhCategoryData()->count()>0)
                <div class="col-md-3">
                    <div class="block">
                        <div class="block-header">
                            <h3><a href="{{route('category-slug',getSeventhCategoryData()->first()->category->slug) }}"
                                   style="color: #000000FF">
                                    <b>{{getSeventhCategoryData()->first()->category->title??'Seventh Category'}}</b></a>
                            </h3>
                            <h6 class="see-all">
                                <a href="{{route('category-slug',getSeventhCategoryData()->first()->category->slug)}}">
                                    सबै हेर्नुहोस् <i class="fas fa-chevron-right"></i> </a>
                            </h6>
                        </div>
                        <div class="block-body">
                            <div class="news-block ">
                                <a href="{{route('news-detail',getSeventhCategoryData()->first()->news->slug)}}">
                                    <div class="news-image">
                                        <img
                                            src="{{getSeventhCategoryData()->first()->news->feature_image??getDefaultImage()}}"/>
                                    </div>
                                </a>
                                <div class="news-body mb-3">

                                    <h1 class="news-title-1 m-0 mt-2">
                                        {{getSeventhCategoryData()->first()->news->title??''}}

                                    </h1>
                                    <div class="news-date">
                                        <b>  {!! getSeventhCategoryData()->first()->news->posted_by??'' !!} | </b>
                                        {!! getSeventhCategoryData()->first()->news->nepali_created_at()??'' !!}
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        @forelse(getSeventhCategoryData() as $key=>$value)
                            @if($key >= 0 && $key <= 1)
                                <div class="news-block">
                                    <a href="{{route('news-detail',$value->news->slug)}}">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="news-image">
                                                    <img src="{{$value->news->feature_image??getDefaultImage()}}"
                                                         alt=""/></div>
                                            </div>
                                            <div class="col-md-8">
                                                <h4 class="news-title-1 m-0">
                                                    {!!($value->news->title)!!}

                                                </h4>
                                                <div class="news-date pt-1">
                                                    <b>{{ $value->news->posted_by??'LexNepal ' }} | </b>
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
            @endif
        </div>
    </div>
</section>
