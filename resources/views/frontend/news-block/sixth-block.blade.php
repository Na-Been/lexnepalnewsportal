<section class="ainfaisala">
    <div class="container">
        <div class="block">
            <div class="block-header">
                <h3><a href="{{route('category-slug',getTenthCategoryData()->first()->category->slug)}}"
                       style="color: #000000FF">
                        <b>{{getTenthCategoryData()->first()->category->title??'Tenth Category'}}</b></a>
                </h3>
                <h6 class="see-all">
                    <a href="{{route('category-slug',getTenthCategoryData()->first()->category->slug)}}">
                        सबै हेर्नुहोस् <i class="fas fa-chevron-right"></i> </a>
                </h6>
            </div>
            <div class="block-body">
                <div class="row">

                    @forelse(getTenthCategoryData()->slice(0, 4) as $key=>$value)
                        <div class="col-md-3">
                            <div class="news-block">
                                <a href="{{route('news-detail',$value->news->slug)}}">
                                    <div class="news-image news-image-fixed3">
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
                                </a>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
