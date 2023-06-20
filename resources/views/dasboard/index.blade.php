@extends('dasboard.layouts.main')

@section('container')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style type="text/css">
        h1 {
            font-family: 'Poppins'
        }
    </style>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
    </div>
@endsection
