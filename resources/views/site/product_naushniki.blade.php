@extends('layouts.app')

@section('title', 'Наушники')

@section('header')
    @include('layouts.header')
@endsection


@section('content')
    @include('layouts.content_products_naushniki')
@endsection

@section('discount')
    @include('layouts.discount')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection