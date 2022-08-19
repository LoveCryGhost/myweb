<li class="nav-item nav-item-dropdown-lg dropdown">
    @foreach(config('template.languages') as $locale => $country)
        @if(Session::get('locale')==$locale)
        <a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="{{asset('template/limitless/global_assets/images/lang/'.$locale.'.png')}}" class="img-flag" alt="">
            <span class="d-none d-lg-inline-block ml-2">{{$country}}</span>
        </a>
        @endif
    @endforeach

    <div class="dropdown-menu dropdown-menu-right">
        @foreach(config('template.languages') as $locale => $country)
        <a href="{{route('languages', ["locale"=>$locale])}}" class="dropdown-item {{$country}} {{Session::get('locale')==$locale? "active":""}} ">
            <img src="{{asset('template/limitless/global_assets/images/lang/'.$locale.'.png')}}" class="img-flag" alt="">
            {{$country}}
        </a>
        @endforeach

    </div>
</li>
