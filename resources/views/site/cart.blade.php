
@extends('layouts.app')

@section('title', 'Корзина')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    @include('layouts.content_cart')
@endsection

@section('discount')
    @include('layouts.discount')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection