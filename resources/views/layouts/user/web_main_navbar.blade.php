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
                    <form action="{{ route('auth.user.logout') }}" class="m-0" method="POST" onsubmit="return confirm('您确定要退出吗？');">
                        @csrf
                        <button class="btn-link" type="submit" name="button"><i class="icon-switch2"></i> Logout</button>
                    </form>
                </a>
            </li>
        </ul>
    </div>
    <x-multi-auth-switcher></x-multi-auth-switcher>
</div>
