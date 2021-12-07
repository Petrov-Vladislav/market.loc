@extends('layouts.app')

@section('title', 'Смартфоны')

@section('header')
    @include('layouts.header')
@endsection


@section('content')
    @include('layouts.content_products')
@endsection

@section('discount')
    @include('layouts.discount')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
