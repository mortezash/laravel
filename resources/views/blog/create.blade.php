@extends('layouts.app')

@section('content')

    <h2>ایجاد پست</h2>

    <form method="POST" action="{{ route('blog.store') }}">
        @csrf

        <div class="mb-3">
            <label>عنوان</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>متن</label>
            <textarea name="content" class="form-control"></textarea>
        </div>

        <button class="btn btn-success">ثبت</button>
    </form>

@endsection
