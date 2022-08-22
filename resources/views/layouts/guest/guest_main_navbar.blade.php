<div class="navbar navbar-expand-lg navbar-dark navbar-static">
    <div class="navbar-brand ml-2 ml-lg-0">
        <a href="{{route("user.homepage")}}" class="d-inline-block">
            <img src="{{asset('template/limitless/global_assets/images/logo_light.png')}}" alt="">
        </a>
    </div>

    <div class="d-flex justify-content-end align-items-center ml-auto">
        <ul class="navbar-nav flex-row">
            @include('layouts.common.languages')
            <li class="nav-item">
                <a href="#" class="navbar-nav-link">
                    <i class="icon-lifebuoy"></i>
                    <span class="d-none d-lg-inline-block ml-2">Support</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="navbar-nav-link">
                    <i class="icon-user-plus"></i>
                    <span class="d-none d-lg-inline-block ml-2">Register</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('auth.user.login')}}" class="navbar-nav-link">
                    <i class="icon-user-lock"></i>
                    <span class="d-none d-lg-inline-block ml-2">Login</span>
                </a>
            </li>
        </ul>
    </div>
</div>
