<head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

@extends('fish-encyclopedia.login.user')
@section('login')
<x-alert type="message" :session="session('login_success')"/>
@endsection