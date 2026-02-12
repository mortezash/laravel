@extends('layouts.app')

@section('content')

    <h2>{{ $blog->title }}</h2>
    <p>{{ $blog->content }}</p>

    <a href="{{ route('blog.index') }}" class="btn btn-secondary">بازگشت</a>

@endsection
