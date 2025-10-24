@extends('master')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome {{ $user->name }}</h1>
    <code>{{ $user->email }}</code>
    <hr>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis eaque unde quis nesciunt, voluptatum deserunt accusamus cumque magni sint fugit dicta itaque minus. Nisi, consequuntur atque adipisci porro eum repellat!</p>
@endsection
