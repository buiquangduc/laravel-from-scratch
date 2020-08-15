@extends('layouts.app')

@section('content')
    <form method="POST" action="/contact">
        @csrf
        <p>Email address</p>
        <input type="text" name="email">
        <button type="submit">Send email</button>
        @error('email')
            {{ $message }}
        @enderror
        @if(session('message')) {{ session('message') }} @endif
    </form>
@endsection
