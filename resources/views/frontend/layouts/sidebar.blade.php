<!-- sidebar -->
<div class="sidebar" id="sidebar">
    <div class=" text-end">
        <i class="fas fa-times close-sidebar"style="color:#fff;padding: 15px 15px; cursor:pointer"></i>
    </div>
    <div class="sidebar-logo" style="width: 245px;">
        <a href="{{url('/')}}">
            @if(getSetting('logo'))
                <img width="100%" src="{{getSetting('logo')}}" alt="Site Logo"/>
            @else
                <img width="100%" src="{{asset('css/dist/news_logo.png')}}" alt=""/>
            @endif
        </a>    </div>

    <div class="sidebar-body">
        <ul>
            @forelse($newsCategory as $newsCategory)
                <li>
                    <a href="{{route('category-slug',$newsCategory->slug)}}">{{$newsCategory-> title}}</a>
                </li>
            @empty
            @endforelse

                <li>

                    <a href="{{getSetting('facebook_link')}}" title="facebook link"> <i
                            class="fab fa-facebook"
                            style="color: #ffffffff;"></i>&nbsp;</a>
                    <a href="{{getSetting('youtube_link')}}" title="youtube link"> <i
                            class="fab fa-youtube"
                            style="color: #ffffffff;"></i></a>
                    <a href="{{getSetting('twitter_link')}}" title="twitter link"> <i
                            class="fab fa-twitter"
                            style="color: #ffffffff;"></i></a>
                    <a href="{{getSetting('instagram_link')}}" title="instagram link"> <i
                            class="fab fa-instagram"
                            style="color: #ffffffff;"></i></a>
                </li>
        </ul>
    </div>
</div>


