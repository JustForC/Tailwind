@extends('user.app')

@section("title", "Home")

@section("content")
    @include("component.leftSidebar")
    @include("user.home.content")
    @include("component.rightSidebar")
@endsection

@section('javascript')
    @include("user.home.javascript")
@endsection