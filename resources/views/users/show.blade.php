@extends('layout')

@section('content')
<h1>hello {{ $user->username }} </h1>
<h2>Email: {{$user->email }} </h2>
<p>
    <a href="/users/{{ $user->id }}/edit">
        Edit
    </a>
</p>
@endsection