    <a href="{{route('auth.admin.login')}}" class="navbar-nav-link navbar-nav-link-toggler pr-0">
        @if(Auth::guard("admin")->check())
            <span class="bg-success p-1 border-2 "> A </span>
        @else
            <span class="bg-danger p-1 border-2 "> A </span>
        @endif
    </a>

    <a href="{{route('auth.user.login')}}" class="navbar-nav-link navbar-nav-link-toggler  pr-0">
        @if(Auth::guard("web")->check())
            <span class="bg-success p-1 border-2 "> U </span>
        @else
            <span class="bg-danger p-1 border-2 "> U </span>
        @endif
    </a>
