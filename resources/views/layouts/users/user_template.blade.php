@extends('layouts.app')


<head>
    @section("app-title")
        @yield('user-title')
    @endsection

    @include('layouts.users.css')

    @include('layouts.users.js')
</head>

@section("app-content")
    <body>
        @include('layouts.users.user_main_navbar')

        <div class="page-content">
            @include('layouts.users.user_main_sidebar')
            @include('layouts.users.user_secondary_sidebar')
            <div class="content-wrapper">
                <div class="content-inner">
                    @yield("user-content")
                </div>
                @include('layouts.users.user_footer')
            </div>
            @include('layouts.users.user_right_sidebar')
        </div>

        @include('layouts.users.user_notification')
    </body>
@endsection

