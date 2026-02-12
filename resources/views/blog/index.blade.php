@extends('layouts.app')

@section('content')

    <h1 class="mb-4">لیست پست‌ها</h1>

    <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3">پست جدید</a>

    <table class="table table-bordered">
        <tr>
            <th>عنوان</th>
            <th width="200">عملیات</th>
        </tr>

        @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="{{ route('blog.show', $post) }}" class="btn btn-info btn-sm">نمایش</a>
                    <a href="{{ route('blog.edit', $post) }}" class="btn btn-warning btn-sm">ویرایش</a>

                    <form action="{{ route('blog.destroy', $post) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

@endsection
