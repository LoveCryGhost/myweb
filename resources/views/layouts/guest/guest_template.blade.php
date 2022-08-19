@extends('layouts.app')


<head>
    @section("app-title")
        @yield('user-title')
    @endsection

    @include('layouts.guest.css')

    @include('layouts.guest.js')
</head>

@section("app-content")
    <body>
        @include('layouts.guest.guest_main_navbar')
        <div class="page-content">
            <div class="content-wrapper">
                <div class="content-inner">
                    @yield("user-content")
                </div>
                @include('layouts.guest.guest_footer')
            </div>
        </div>
    </body>
@endsection

