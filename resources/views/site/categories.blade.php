@extends('layouts.app')

@section('title', 'Главная')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    @include('layouts.content_categories')
@endsection

@section('discount')
    @include('layouts.discount')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection