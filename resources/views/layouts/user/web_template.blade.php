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
        @include('layouts.user.web_main_navbar')

        <div class="page-content">
            <div class="content-wrapper">
                <div class="content-inner">
                    @yield("user-content")
                </div>
                @include('layouts.user.web_footer')
            </div>
        </div>

        @include('layouts.user.web_notification')
    </body>
@endsection

