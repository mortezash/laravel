@extends('layouts.app')

@section('content')

    <h2>ویرایش پست</h2>

    <form method="POST" action="{{ route('blog.update', $post) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>عنوان</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>متن</label>
            <textarea name="content" class="form-control">{{ $post->content }}</textarea>
        </div>

        <button class="btn btn-success">بروزرسانی</button>
    </form>

@endsection
