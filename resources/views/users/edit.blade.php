@extends('layout')


@section('content')
    <h1 class="title">Edit User: {{ $user->username }}</h1>
    <form method="POST" action="/users/{{ $user->id }}" >
        {{-- {{ method_field('PATCH') }}
        {{ csrf_field() }} --}}
        @method('PATCH')
        @csrf
        <div class="field">
            <label class="label" for="email">Email</label>

            <div class="control">
                <input type="text" class="input" name="email" placeholder="Email" value="{{ $user->email }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="password">Password</label>

            <div class="control">
                <input type="password" class="input" name="password" placeholder="Password">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update User</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/users/{{ $user->id }}">
        {{-- {{ method_field('DELETE') }}
        {{ csrf_field() }} --}}
        @method('DELETE')
        @csrf
        <div class="field">
            <div class="control">
                <button type="delete" class="button is-link">Delete User</button>
            </div>
        </div>
    </form>
@endsection