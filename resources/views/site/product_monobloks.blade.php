@extends('layouts.app')

@section('title', 'Моноблоки')

@section('header')
    @include('layouts.header')
@endsection


@section('content')
    @include('layouts.content_products_monobloks')
@endsection

@section('discount')
    @include('layouts.discount')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection