<section class="video-gallery py-5">
    <div class="container">
        <div class="block-header">
            <h3 class="text-white"><a href="{{route('display.all.videos')}}" class="text-white">
                    <b>भिडियो ग्यालरी</b></a></h3>
            <h6 class="see-all"><a href="{{route('display.all.videos')}}" class="text-white"> सबै हेर्नुहोस् <i
                        class="fas fa-chevron-right"></i></a>
            </h6>
        </div>
        <div class=" row ">
            @forelse(getVideoSection() as $video)
                <div class="col-md-3">
                    <div class="news-block overlay">
                        <a href="{{$video->url}}" target="_blank">
                            <div class="news-image">
                                {!! $video->video_html !!}

                            </div>

                            <div class="news-body ">

                                <h4 class="news-title-1 mt-3">
                                    {{$video->title}}
                                </h4>

                            </div>
                        </a>
                    </div>
                </div>
            @empty

            @endforelse
            <div>
            </div>
        </div>
    </div>
</section>
