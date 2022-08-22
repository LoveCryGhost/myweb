
@extends('layouts.guest.guest_template')

@section("user-title", "User Login")

@section('user-content')
    <div class="page-content">
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Content area -->
                <div class="content d-flex justify-content-center align-items-center">

                    <!-- Login form -->
                    <form class="login-form" action="{{route('auth.user.login')}}" method="post">
                        @method('post')
                        @csrf
                        <div class="card mb-0">
                            <div class="card-body">
                                @include("layouts.common.show_error_massages")
                                <div class="text-center mb-3">
                                    <i class="icon-reading icon-2x text-secondary border-secondary border-3 rounded-pill p-3 mb-3 mt-1"></i>
                                    <h5 class="mb-0">User Account</h5>
                                    <span class="d-block text-muted">Enter your credentials below</span>
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="text" class="form-control" placeholder="User Email" name="email" value="{{old('email')}}">
                                    <div class="form-control-feedback">
                                        <i class="icon-user text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="password" class="form-control" placeholder="Password" name="password" value="{{old('password')}}">
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">登入</button>
                                </div>

                                <div class="form-group d-flex align-items-center">
                                    <span class="text-left">
                                        <a href="login_password_recover.html">忘記密碼?</a>
                                    </span>

                                    <a href="{{route("auth.user.register")}}" class="ml-auto">註冊</a>
                                </div>

                            </div>
                        </div>
                    </form>
                    <!-- /login form -->

                </div>
                <!-- /content area -->
            </div>
            <!-- /inner content -->

        </div>
    </div>
@endsection

