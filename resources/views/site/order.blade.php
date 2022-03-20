
@extends('layouts.app')

@section('title', 'Оформление заказа')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    @include('layouts.content_order')
@endsection

@section('discount')
    @include('layouts.discount')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection