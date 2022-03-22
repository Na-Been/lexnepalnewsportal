<section class="pustak-samikshya">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="block">
                    <div class="block-header">
                        <h3><a href="{{route('category-slug',getEleventhCategory()->first()->category->slug)}}"
                               style="color: #000000FF">
                                <b>{{getEleventhCategory()->first()->category->title??'Eleventh Category'}}</b></a>
                        </h3>
                        <h6 class="see-all">
                            <a href="{{route('category-slug',getEleventhCategory()->first()->category->slug)}}">
                                सबै हेर्नुहोस् <i class="fas fa-chevron-right"></i>
                            </a>
                        </h6>
                    </div>


                    <div class="block-body">
                        <div class="row">
                            @forelse(getEleventhCategory()->slice(1, 2) as $key=>$value)
                                @if($value->news->id!=$value->category->highlight_news_id)
                                    <div class="col-md-3">
                                        <div class="news-block ">
                                            <a href="{{route('news-detail',$value->news->slug)}}">
                                                <div class="news-image news-image-fixed4">
                                                    <img src="{{$value->news->feature_image??getDefaultImage()}}"
                                                         alt=""/>
                                                </div>
                                                <div class="news-body">
                                                    <p class="news-title-1">
                                                        {!!($value->news->title)!!}
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @empty
                            @endforelse

                            @forelse(getEleventhCategory()->slice(3, 6) as $key=>$value)
                                @if($value->news->id!=$value->category->highlight_news_id)
                                    <div class="col-md-3">
                                        <div class="news-block ">
                                            <a href="{{route('news-detail',$value->news->slug)}}">
                                                <div class="news-image news-image-fixed4">
                                                    <img src="{{$value->news->feature_image??getDefaultImage()}}"
                                                         alt=""/>
                                                </div>
                                                <div class="news-body">
                                                    <p class="news-title-1">
                                                        {!!($value->news->title)!!}
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @empty
                            @endforelse


                        </div>
                    </div>
                </div>
            </div>
            @if(getTwelfthCategory()->count()>0)
                <div class="col-md-3">
                    <div class="block">
                        <div class="block-header">
                            <h3><a href="{{route('category-slug',getTwelfthCategory()->first()->category->slug)}}"
                                   style="color: #000000FF">
                                    <b>{{getTwelfthCategory()->first()->category->title??'Twelfth  Category'}}</b></a>
                            </h3>
                            <h6 class="see-all">
                                <a href="{{route('category-slug',getTwelfthCategory()->first()->category->slug)}}">
                                    सबै हेर्नुहोस् <i class="fas fa-chevron-right"></i>
                                </a>
                            </h6>
                        </div>
                        <div class="block-body">
                            <div class="news-block">
                                <a href="{{route('news-detail',getTwelfthCategory()->first()->news->slug)}}">
                                    <div class="news-image">
                                        <img
                                            src="{{getTwelfthCategory()->first()->news->feature_image??getDefaultImage()}}"/>

                                    </div>
                                    <div class="news-body">

                                        <h1 class="news-title-1">
                                            {!! getTwelfthCategory()->first()->news->title??''!!}

                                        </h1>
                                        <div class="news-date">
                                            <b>       {!! getTwelfthCategory()->first()->news->posted_by??'' !!}</b>
                                            {!! getTwelfthCategory()->first()->news->nepali_created_at()??'' !!}
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @forelse(getTwelfthCategory()->slice(1, 4) as $key=>$value)
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
                                                <div class="news-date pt-1"><b>  {!! $value->news->posted_by??'' !!}
                                                        |</b>
                                                    {!! $value->news->nepali_created_at()??'' !!}

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
            @else
            @endif
        </div>
    </div>
</section>
