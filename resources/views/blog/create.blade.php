<h1>ایجاد پست جدید</h1>
<form method="POST" action="{{ route('blog.store') }}">
    @csrf
    <input type="text" name="title" placeholder="عنوان">
    @error('title') <div>{{ $message }}</div> @enderror

    <textarea name="content" placeholder="متن"></textarea>
    @error('content') <div>{{ $message }}</div> @enderror

    <button type="submit">ثبت</button>
</form>
