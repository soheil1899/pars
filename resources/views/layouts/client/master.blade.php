<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@isset($page_description){{$page_description}}@elseتوضیحات مربوط به پارس مرکبات@endisset">
    <title>@isset($page_title){{$page_title}}@elseپارس مرکبات@endisset</title>
    <link rel="stylesheet" href="/css/clientApp.css">
</head>
<body>

<div id="clientApp">
    @if(\Route::currentRouteName() == 'index')
        @include('layouts.client.header_index')
    @else
        @include('layouts.client.header')
    @endif
        @yield('content')

        @include('layouts.client.footer')
</div>

</body>


<script src="/js/clientApp.js"></script>
</html>
