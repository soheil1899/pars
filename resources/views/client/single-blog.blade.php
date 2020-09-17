@extends('layouts.client.master')


@section('content')

    <main class="d-block">
        <div class="container">
            <blog-single :articleid="{{$article['id']}}"></blog-single>
        </div>
    </main>

@stop
