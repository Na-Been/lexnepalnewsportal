@extends('frontend.layouts.app')
@section('title',getSetting('site_title').' - '.$news->title)
@section('metaTitle')
    <?php
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
    else
        $url = "http://";
    // Append the host(domain name, ip) to the URL.
    $url .= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL
    $url .= $_SERVER['REQUEST_URI'];
    ?>
    <meta property="og:title" content="{!!$news->title!!}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="{{$url}}">
    <meta property="og:image" content="{{$news->feature_image??getDefaultImage()}}">
    <meta property="og:image:width" content="1920"/>
    <meta property="og:image:height" content="1080"/>
    <meta property="og:site_name" content="{{getSetting('site_title')}}"/>
    <meta property="fb:app_id" content="872739953203863"/>
    @php
        $taglessBody = strip_tags($news->description);
        $description = Str::limit($taglessBody,200);
    @endphp
    <meta property="og:description" content="{{$description}}"/>
    <style>
        .at4-jumboshare .at4-count-container {
            min-width: 67px !important;
            padding-right: 0px !important;
        }

        .at4-jumboshare .at4-count {
            line-height: 0px !important;
        }

        iframe[src*="ads-iframe"] {
            display: none;
        }

        /*#disqus_thread iframe:first{*/
        /*    display:none !important;*/
        /*}*/

        .disqus-footer {
            display: none !important;
        }

        /* #disqus_thread:first-child{*/
        /*    display:none !important;*/
        /*}*/

    </style>
@endsection
@section('content')
    {{--    {{Bsdate::eng_to_nep(2016,12,31)}}--}}
    <section class="news-detail pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="news-block">
                        @foreach($ads as $ad)
                            @if($ad->rank == 1)
                                <section class="ads py-3"><a href="{{$ad->url}}" title="{{$ad->title}}">
                                        <img width="100%" src="{{$ad->image}}" alt=""/></a>
                                </section>
                            @endif
                        @endforeach
                        <h3 style="color:#888"><b>{!! $news->highlight_text??'' !!}</b></h3>
                        <h1 class="news-detail-title">
                            {!! $news->title??''!!}
                        </h1>
                        <div class="details pt-1">
                            <div class="news-date"><b>{!!$news->posted_by??'LexNepal '!!} &nbsp;|</b>
                                <br>{!!$news->nepali_created_at()??'' !!}</div>
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="news_share ms-auto" style="border-right: 1px solid;
    padding-right: 11px;
    margin-right: 10px;">
                                @php
                                    $share=($news->share*2);
                                    if ($share >= 1000) {
                                        $final= round($share/1000, 1) . "k";
                                    } else {
                                        $final= $share;
                                    }
                                @endphp
                                <span style="font-size:20px">{{$final}}</span> <span>Shares</span>
                            </div>
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="addthis_inline_share_toolbox" data-url="{{Request::url()}}"
                                 data-title="{{$news->title}}" data-description="{{$news->title}}"
                                 data-media="{{$news->feature_image??getDefaultImage()}}">
                            </div>
                            <!--<script type="text/javascript"-->
                            <!--        src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-607290fe0d538418"></script>-->
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <script type="text/javascript"
                                    src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60814e434003525e"></script>
                        </div>


                        <div class="news-image">
                            <img src="{{$news->feature_image??getDefaultImage()}}"
                                 alt=""/>
                        </div>

                        <div class="news-body pt-4">
                            <div class="news-description-detail">
                                {!! $news->description??''!!}
                            </div>
                            <div class="author" style="color: #ba2c2c"> {!!$news->posted_by??'LexNepal '!!}</div>
                        </div>

                        <div class="news-comments">
                            <hr>
                            <div id="disqus_thread"></div>
                            <script>
                                /**
                                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

                                var disqus_config = function () {
                                    this.page.url = window.location.href;  // Replace PAGE_URL with your page's canonical URL variable
                                    this.page.identifier = window.location.href; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };

                                (function () { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://lexnepal-com-1.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <!--<noscript><a
                                    href="https://disqus.com/?ref_noscript"></a>
                            </noscript>-->
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="position:relative">
                    <div class="block" style="position:sticky;top:50px">
                        <div class="block-header">
                            <h3><b>भर्खरै</b></h3>
                        </div>
                        <div class="block-body">
                            @forelse(getAllNews() as $key=>$value)
                                @if($key >=0 && $key <= 4)
                                    <div class="news-block">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="news-image news-image-fixed">
                                                    <img
                                                        src="{{$value->feature_image??getDefaultImage()}}"
                                                        alt=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <a href="{{route('news-detail',$value->slug)}}">
                                                    <h4 class="news-title-1 m-0">
                                                        {!! $value->title!!}
                                                    </h4>
                                                </a>
                                                <div class="news-date pt-1"><b>{{$value->posted_by}} &nbsp;|</b>
                                                    {!! $value->nepali_created_at()??'' !!}
                                                </div>
                                            </div>
                                        </div>
                                        @if($key >=0 && $key < 4)
                                            <hr/>
                                        @endif
                                    </div>
                                @endif
                            @empty
                                <p>No latest News Found !!</p>
                            @endforelse
                        </div>
                    </div>
                    @foreach($ads as $ad)
                        @if($ad->rank == 2)
                            <section class="ads py-3"><a href="{{$ad->url}}" title="{{$ad->title}}">
                                    <img width="100%" src="{{$ad->image}}" alt=""/></a>
                            </section>
                        @endif
                    @endforeach
                    @foreach($ads as $ad)
                        @if($ad->rank == 3)
                            <div class="ads">
                                <a href="{{$ad->url}}" title="{{$ad->title}}">
                                    <img width="100%" src="{{$ad->image}}" alt=""/></a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            @foreach($ads as $ad)
                @if($ad->rank == 4)
                    <section class="ads py-3"><a href="{{$ad->url}}" title="{{$ad->title}}">
                            <img width="100%" src="{{$ad->image}}" alt=""/></a>
                    </section>
                @endif
            @endforeach
            <div class="row ">
                <div class="col-md-12 k-c">
                    <div class="block">
                        <div class="block-header">
                            <h3><b> थप समाचार </b></h3>
                        </div>
                        <div class="block-body">
                            <div class="row">

                                @forelse(getAllNews()->slice(5,10) as $key=>$value)
                                    <div class="col-md-4">
                                        <div class="news-block">
                                            <div class="news-image" style="height:240px">
                                                <img

                                                    style="height:100%;width:100%;object-fit:contain"
                                                    src="{{$value->feature_image??getDefaultImage()}}"
                                                    alt=""/>
                                            </div>
                                            <div class="news-body">
                                                <a href="{{route('news-detail',$value->slug)}}">
                                                    <h4 class="news-title-1">
                                                        {!! $value->title??''!!}
                                                    </h4>
                                                </a>
                                                <div class="news-date"><b>{!!$value->posted_by!!} | </b>
                                                    {!! $value->nepali_created_at()??'' !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p>No more latest News Found !!</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
