@extends('layouts.app')


<head>
    @section("app-title")
        @yield('user-title')
    @endsection

    @include('layouts.admin.css')

    @include('layouts.admin.js')
</head>

@section("app-content")
    <body>
        @include('layouts.admin.admin_main_navbar')

        <div class="page-content">
            @include('layouts.admin.admin_main_sidebar')
            @include('layouts.admin.admin_secondary_sidebar')
            <div class="content-wrapper">
                <div class="content-inner">
                    @yield("user-content")
                </div>
                @include('layouts.admin.admin_footer')
            </div>
            @include('layouts.admin.admin_right_sidebar')
        </div>

        @include('layouts.admin.admin_notification')
    </body>
@endsection

