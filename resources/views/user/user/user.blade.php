@extends("user.app")

@section("title", $user->name)

@section("content")
    @include("component.leftSidebar")
    @include("user.user.content")
    @include("component.rightSidebar")
@endsection

@section("javascript")
    @include("user.user.javascript")
@endsection