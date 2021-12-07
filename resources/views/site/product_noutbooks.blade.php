@extends('layouts.app')

@section('title', 'Ноутбуки')

@section('header')
    @include('layouts.header')
@endsection


@section('content')
    @include('layouts.content_products_noutbooks')
@endsection

@section('discount')
    @include('layouts.discount')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection