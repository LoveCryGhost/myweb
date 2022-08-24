@extends('layouts.app')


<head>
    @section("app-title")
        @yield('user-title')
    @endsection

    @include('layouts.user.css')

    @include('layouts.user.js')
</head>

@section("app-content")
    <body>
        @include('layouts.user.user_main_navbar')

        <div class="page-content">
            @include('layouts.user.user_main_sidebar')
            @include('layouts.user.user_secondary_sidebar')
            <div class="content-wrapper">
                <div class="content-inner">
                    @yield("user-content")
                </div>
                @include('layouts.user.user_footer')
            </div>
            @include('layouts.user.user_right_sidebar')
        </div>

        @include('layouts.user.user_notification')
    </body>
@endsection

