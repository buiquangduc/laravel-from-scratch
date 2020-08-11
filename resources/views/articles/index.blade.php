@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <ul class="style1">
                    @foreach($articles as $article)
                        <li>
                            <h3><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h3>
                            <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                            <p>{{ $article->excerpt }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
