<!-- resources/views/posts/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>投稿作成</title>
</head>
<body>
    <h1>投稿作成</h1>

    <!-- バリデーションエラー表示 -->
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>タイトル:</label><br>
        <input type="text" name="title" value="{{ old('title') }}"><br>

        <label>本文:</label><br>
        <textarea name="content">{{ old('content') }}</textarea><br>

        <button type="submit">投稿</button>
    </form>
</body>
</html>