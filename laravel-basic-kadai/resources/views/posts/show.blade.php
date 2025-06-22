<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel課題1</title>
</head>

<body>

<P><b>ID</b> {{ $post->id }}</P>
<P><b>タイトル</b> {{ $post->title }}</P>
<p><b>本文</b> {{ $post->content }}</p>
<p><b>作成日時</b> {{ $post->created_at }}</p>
<p><b>更新日時</b> {{ $post->updated_at }}</p>

</body>

</html>