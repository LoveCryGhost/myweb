@extends(!Auth::user() ? 'layouts.guest.guest_template' : 'layouts.user.web_template')



@section("user-title", "user-title")

@section('user-content')
{{__("auth.password")}}
@endsection
