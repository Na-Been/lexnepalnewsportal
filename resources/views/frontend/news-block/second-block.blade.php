<section class="nayalaya-update">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="block">
                    <div class="block-header">
                        <h3><a href="{{route('category-slug',$secondBlockNews->first()->category->slug) }}"
                               style="color: #000000FF">
                                <b>{{$secondBlockNews->first()->category->title??''}}</b></a></h3>
                        <h6 class="see-all">
                            <a href="{{route('category-slug',$secondBlockNews->first()->category->slug)}}">
                                सबै हेर्नुहोस् <i class="fas fa-chevron-right"></i> </a>
                        </h6>
                    </div>
                    <div class="block-body">
                        <div class="row">
                            @foreach($secondBlockNews as $news)
                                @if($loop->iteration < 3)
                                    <div class="col-md-6">
                                        <div class="news-block overlay-1">
                                            <a href="{{route('news-detail',$news->news->slug)}}">
                                                <div class="news-image news-image-fixed5">
                                                    <img
                                                        src="{{$news->news->feature_image??getDefaultImage()}}"/>
                                                </div>
                                                <div class="news-body">
                                                    <h1 class="news-title text-white">
                                                        {!! $news->news->title?? ' ' !!}
                                                    </h1>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @elseif($loop->iteration >2  &&  $loop->iteration <5)
                                    <div class="col-md-6">
                                        <div class="news-block">
                                            <a href="{{route('news-detail',$news->news->slug)}}">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="news-image">
                                                            <img
                                                                src="{{$news->news->feature_image??getDefaultImage()}}"
                                                                alt=""/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h4 class="news-title-1 m-0">
                                                            {!!($news->news->title)!!}
                                                        </h4>
                                                        <div
                                                            class="news-date pt-1">
                                                            <b>{!! $news->news->posted_by??'' !!} |</b>
                                                            {!! $news->news->nepali_created_at()??'' !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr/>
                                    </div>
                                @elseif($loop->iteration >5  &&  $loop->iteration <8)
                                    <div class="col-md-6">
                                        <div class="news-block">
                                            <a href="{{route('news-detail',$news->news->slug)}}">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="news-image">
                                                            <img
                                                                src="{{$news->news->feature_image??getDefaultImage()}}"
                                                                alt=""/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h4 class="news-title-1 m-0">
                                                            {!!($news->news->title)!!}
                                                        </h4>
                                                        <div
                                                            class="news-date pt-1">
                                                            <b>{!! $news->news->posted_by??'' !!} |</b>
                                                            {!! $news->news->nepali_created_at()??'' !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr/>
                                    </div>
                                @elseif($loop->iteration >8  &&  $loop->iteration <11)
                                    <div class="col-md-6">
                                        <div class="news-block">
                                            <a href="{{route('news-detail',$news->news->slug)}}">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="news-image">
                                                            <img
                                                                src="{{$news->news->feature_image??getDefaultImage()}}"
                                                                alt=""/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h4 class="news-title-1 m-0">
                                                            {!!($news->news->title)!!}
                                                        </h4>
                                                        <div
                                                            class="news-date pt-1">
                                                            <b>{!! $news->news->posted_by??'' !!} |</b>
                                                            {!! $news->news->nepali_created_at()??'' !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr/>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @if(getThirdCategoryData()->count()>0)
                <div class="col-md-3">
                    <div class="block">
                        <div class="block-header">
                            <h3><a href="{{route('category-slug',getThirdCategoryData()->first()->category->slug) }}"
                                   style="color: #000000FF">
                                    <b>{{getThirdCategoryData()->first()->category->title??'Third Order Category'}}</b></a>
                            </h3>
                            <h6 class="see-all">
                                <a href="{{route('category-slug',getThirdCategoryData()->first()->category->slug)}}">
                                    सबै हेर्नुहोस् <i class="fas fa-chevron-right"></i></a>
                            </h6>
                        </div>
                        <div class="block-body">
                            <a href="{{route('news-detail',getThirdCategoryData()->first()->news->slug)}}">

                                <div class="news-block">
                                    <div class="news-image">
                                        <img
                                            src="{{getThirdCategoryData()->first()->news->feature_image??getDefaultImage()}}"/>
                                    </div>
                                    <h4 class="news-title-1">
                                        {!! getThirdCategoryData()->first()->news->title??''!!}
                                    </h4>
                                    <div class="news-date">
                                        <b> {!! getThirdCategoryData()->first()->news->posted_by??'' !!} |</b>
                                        {!! getThirdCategoryData()->first()->news->nepali_created_at()??'' !!}
                                    </div>
                                </div>
                            </a>
                            @forelse(getThirdCategoryData()->slice(1, 3) as $key=>$value)

                                <div class="news-block">
                                    <a href="{{route('news-detail',$value->news->slug)}}">
                                        <div class="row">
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
                                                <div class="news-date pt-1"><b>{!! $value->news->posted_by??'' !!} |</b>
                                                    {!! $value->news->nepali_created_at()??'' !!}
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </a>
                                </div>
                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
