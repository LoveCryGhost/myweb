<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('app-title', "Laravel")</title>
    </head>
    @yield('app-content')
</html>

<x-notification></x-notification>
<x-multi-auth-switcher></x-multi-auth-switcher>
