@extends('layouts.base')

@section('content')

    <form method="POST" action="{{ route('login') }}" class="flex flex-col w-[30%] m-auto">
        @csrf
        Nickname: <input type="text" name="login">
        Password: <input type="password" name="password">
        <input type="submit">
    </form>

@endsection
