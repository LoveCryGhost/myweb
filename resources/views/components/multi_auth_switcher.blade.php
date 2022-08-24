@if(Auth::guard("admin")->check())
    <a href="{{route('admin.dashboard.index')}}">
        <span class="bg-success p-1 border-2 "> A </span>
    </a>
@else
    <a href="{{route('auth.admin.login')}}">
        <span class="bg-danger p-1 border-2 "> A </span>
    </a>
@endif

@if(Auth::guard("web")->check())
    <a href="{{route('user.dashboard.index')}}">
        <span class="bg-success p-1 border-2 "> U </span>
    </a>
@else
    <a href="{{route('auth.user.login')}}" >
        <span class="bg-danger p-1 border-2 "> U </span>
    </a>
@endif
