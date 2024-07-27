@extends('layouts.main')


@section('container')
@foreach ($posts as $post )
<article class="mb-3 mt-3">

    <h1>
        <a href="/post/{{ $post->id }}">{{ $post->title }}</a></h1>
    <h2>By: {{ $post->author }}</h2>
    <p>{{ $post->body }}</p>
</article>
@endforeach
@endsection
