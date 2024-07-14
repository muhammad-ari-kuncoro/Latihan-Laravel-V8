

@extends('layouts.main')
@section('container')

<article>
    <h2>{{ $post['title'] }}</h2>
    <h5>{{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
    <a href="{{ url('/posts') }}" class="btn btn-danger">Back </a>
</article>
@endsection
