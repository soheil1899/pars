@extends('layouts.client.master')


@section('content')

    <main class="d-block">
        <div class="container">
            <product-single :productid="{{$product['id']}}"></product-single>
        </div>
    </main>

@stop
