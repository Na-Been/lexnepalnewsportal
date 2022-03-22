<!-- navbar -->
<header>
    <div class="header_top p-3 text-center">
        <div class="logo mx-auto">
            <a href="{{url('/')}}">
                @if(getSetting('logo'))
                    <img src="{{getSetting('logo')}}" alt="Site Logo"/>
                @else
                    <img src="{{asset('css/dist/news_logo.png')}}" alt=""/>
                @endif
            </a>
        </div>
        <div class="header-date text-center" id="clock">
            <i class="far fa-calendar-alt" style="color: #1a427a"></i>
            @php
                $bsdate = new App\Http\Controllers\Backend\BsdateController();
                $date = \Carbon\Carbon::now()->format('Y-m-d');
                $a = get_nepali_date($date);
                $year = \Carbon\Carbon::parse($a)->format('Y');
                $month = \Carbon\Carbon::parse($a)->format('m');
                $date = \Carbon\Carbon::parse($a)->format('d');
                $day = \Carbon\Carbon::now()->addDay()->dayOfWeek;
                $nepMonth = $bsdate->_get_nepali_month($month);
                $nepDate = $bsdate->convert_to_nepali_number($date);
                $nepYear = $bsdate->convert_to_nepali_number($year);
                $nepDay = $bsdate->_get_day_of_week($day);
            @endphp
            {!! $nepYear.' - '.$nepMonth.' - '.$nepDate !!} | {!! $nepDay !!}

        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->

            <div class="mx-lg-auto" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto  mb-lg-0 d-flex" style="align-items:center">
                    <div class="left">
                        <li class="nav-item" id="menu-bar">
                            <a class="nav-link active" role="button" aria-current="page"><i class="fas fa-bars"></i></a>
                        </li>
                    </div>
                    <div class="right d-flex" style="align-items:center">
                        <li class="nav-item" id="">
                            <a class="nav-link" href="{{url('/')}}" aria-current="page">गृहपृष्ठ</a>
                        </li>
                        @foreach($newsCats as $newsCategory)
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{route('category-slug',$newsCategory->slug)}}"
                                   id="navbarDropdown" role="button"
                                   aria-expanded="false">{{$newsCategory->title}}</a>
                                @if(count($newsCategory->subCategories) > 0)
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach($newsCategory->subCategories as $subCategory)
                                            <li>
                                                <a class="dropdown-item"
                                                   href="{{route('sub.category-slug',$subCategory->slug)}}">
                                                    {{$subCategory->sub_category_name}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
 <li class="nav-item" id="">
                            <a class="nav-link" href="{{url('/all/videos')}}" aria-current="page">भिडियो ग्यालरी</a>
                        </li>
                    <li class="nav-item dropdown ms-2">
                        <a href="{{getSetting('facebook_link')}}" title="facebook link"> <i
                                class="fab fa-facebook"
                                style="color: #ffffffff;"></i>&nbsp;</a>
                    </li>
                    <li class="nav-item dropdown ms-2">
                        <a href="{{getSetting('youtube_link')}}" title="youtube link"> <i
                                class="fab fa-youtube"
                                style="color: #ffffffff;"></i></a>
                    </li>
                    <li class="nav-item dropdown ms-2">
                        <a href="{{getSetting('twitter_link')}}" title="twitter link"> <i
                                class="fab fa-twitter"
                                style="color: #ffffffff;"></i></a>
                    </li>
                    <li class="nav-item dropdown ms-2">
                        <a href="{{getSetting('instagram_link')}}" title="instagram link"> <i
                                class="fab fa-instagram"
                                style="color: #ffffffff;"></i></a>
                    </li>

                </div>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--<script type="text/javascript">
    var clockElement = document.getElementById('clock');
    function clock() {
        clockElement.textContent = new Date().toString();
    }
    setInterval(clock, 1000);




</script>-->
<script>


    window.onscroll = function () {
        myFunction()
    };

    var header = document.getElementById("navbar");
    var sticky = header.offsetTop + 80;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
