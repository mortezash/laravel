<!DOCTYPE html>
<html>
<head>
    <title>وبلاگ من</title>
</head>
<body>
<h1>لیست پست‌ها</h1>
<ul>
    @foreach ($posts as $post)
        <li>{{ $post->title }}</li>
    @endforeach
</ul>
</body>
</html>
