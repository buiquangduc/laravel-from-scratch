@extends('layouts.app')

@section('content')
    <form method="POST" action="/contact">
        @csrf
        <button type="submit">Send notification</button>
    </form>
@endsection
