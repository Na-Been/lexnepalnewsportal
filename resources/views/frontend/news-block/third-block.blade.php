<section class="kaanun-sambad">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="block">
                    <div class="block-header">
                        <h3><a href="{{route('category-slug',getFourthCategoryData()->first()->category->slug) }}"
                               style="color: #000000FF">
                                <b>{{getFourthCategoryData()->first()->category->title??'Third Order Category'}}</b></a>
                        </h3>
                        <h6 class="see-all">
                            <a href="{{route('category-slug',getFourthCategoryData()->first()->category->slug)}}">
                                सबै हेर्नुहोस् <i class="fas fa-chevron-right"></i></a>
                        </h6>
                    </div>
                    <div class="block-body">
                        <div class="row">
                            <div class="news-block  po">
                                <a href="{{route('news-detail',getFourthCategoryData()->first()->news->slug)}}">
                                    <div class="row  sambad " style="position: relative;                  ">
                                        <div class="col-md-8">
                                            <div class="news-image ">
                                                <img
                                                    src="{{getFourthCategoryData()->first()->news->feature_image??getDefaultImage()}}"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="news-body ">
                                                <h4 class="news-title text-white">
                                                    {!! getFourthCategoryData()->first()->news->title??''!!}

                                                </h4>
                                                <div class="news-description text-white pt-4">
                                                    {!!  (\Illuminate\Support\Str::words(getFourthCategoryData()->first()->news->description, 25 , '...')) !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row ">
                            @forelse(getFourthCategoryData()->slice(1, 2) as $key=>$value)
                                <div class="col-md-6">
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
            <!-- bichar -->
            @if(getFifthCategoryData()->count()>0)
                <div class="col-md-3">
                    <div class="block">
                        <div class="block-header">
                            <h3><a href="{{route('category-slug',getFifthCategoryData()->first()->category->slug) }}"
                                   style="color: #000000FF">
                                    <b>{{getFifthCategoryData()->first()->category->title??'Fifth Order Category'}}</b></a>
                            </h3>
                            <h6 class="see-all">
                                <a href="{{route('category-slug',getFifthCategoryData()->first()->category->slug)}}">
                                    सबै हेर्नुहोस् <i class="fas fa-chevron-right"></i></a>
                            </h6>
                        </div>
                        <div class="block-body">
                            @forelse(getFifthCategoryData()->slice(0, 4) as $key=>$value)
                                <div class="news-block p-3 m-0 " style="border: 1px solid #ccc">
                                    <a href="{{route('news-detail',$value->news->slug)}}">
                                        <div class="row">

                                            <h4 class="news-title-1 mb-4 text-start">
                                                {!!($value->news->title)!!}

                                            </h4>
                                            <div class="col-md-3">
                                                <div class="news-image news-image-rounded">
                                                    <img src="{{$value->news->author_image??getDefaultImage()}}"
                                                         alt=""/></div>
                                            </div>
                                            <div class="col-md-9 bichar-desc" style="">

                                                <h6 class="news-author ">{{$value->news->posted_by??'डा. विजय पौडेल'}}</h6>
                                            </div>
                                        </div>
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
