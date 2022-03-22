<!-- footer -->

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    @if(getSetting('logo'))
                        <div class="logo">
                            <img src="{{getSetting('logo')}}" alt="">
                        </div>
                    @else
                        <div class="logo">
                            <img src="{{asset('css/dist/news_logo.png')}}" alt="">
                        </div>
                    @endif
                    <ul class="ms-md-4 lex-info-list">
                        <li>Email: {{getSetting('email')}}</li>
                        <li>Phone: {{getSetting('phone_number')}}</li>
                        <li>Mobile: {{getSetting('mobile_number')}}</li>
                        <li>Address: {{getSetting('address')}}</li>
                    </ul>

                </div>
                <div class="col-md-3  mt-5">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class=" ">
                        <li><a href="{{url('/')}}">Home</a></li>
                    </ul>
                </div>
                <div class="col-md-3  mt-5">
                    <h3 class="footer-title">Our Team</h3>
                    @forelse($teams as $team)
                        <ul class="team " style="columns: 2;">
                            <li><span>{!! $team->designation !!}</span>
                                <h6>
                                    <b> {{$team->name}}</b>
                                </h6>
                            </li>
                        </ul>
                    @empty
                        <h1></h1>
                    @endforelse
                </div>
                <div class="col-md-2  mt-5">
                    <h3 class="footer-title">Social Links</h3>

                    <ul>
                        <li>
                            <a href="{{getSetting('facebook_link')}}" title="facebook link"> <i
                                    class="fab fa-facebook-square"
                                    style="color: #1a427a;"></i>&nbsp;Facebook</a>
                        </li>
                        <li>
                            <a href="{{getSetting('youtube_link')}}" title="youtube link"> <i
                                    class="fab fa-youtube-square"
                                    style="color: #e31d21;"></i>&nbsp;Youtube</a>
                        </li>
                        <li>
                            <a href="{{getSetting('twitter_link')}}" title="twitter link"> <i
                                    class="fab fa-twitter-square"
                                    style="color: #1DA1F2;"></i>&nbsp;Twitter</a>
                        </li>
                        <li>
                            <a href="{{getSetting('instagram_link')}}" title="instagram link"> <i
                                    class="fab fa-instagram-square "
                                    style="color: #ba2c2c;">&nbsp;Instagram</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom" style="background: #1a427a">
        <div class="container">
            <p class="text-center text-white py-3 m-0">
                © {{now()->year}} {{getSetting('site-title')??'LexNepal '}}.com. All Rights Reserved || Developed by:
                Namuna
                Computer
            </p>
        </div>
    </div>
</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{asset('css/dist/slick-1.8.1/slick/slick.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0 "
        crossorigin="anonymous "></script>
<script>
    $("#menu-bar").click(function () {
        $('#sidebar').toggleClass('open-sidebar')
    });

</script>
<script>
    $(document).ready(function () {
        $('.close-sidebar').on('click', function () {
            $('#sidebar').removeClass('open-sidebar')
        });
    });


</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RMKW3M40Y1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RMKW3M40Y1');
</script>


