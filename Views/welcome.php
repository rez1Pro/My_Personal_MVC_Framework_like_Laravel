@extends("layouts/app")

@section("title")
Welcome to home page
@endsection

@section("content")

Welcome To my Website
I'm from controller <?= $Fullname['name']; ?>

@endsection
