<!DOCTYPE html>
<html lang="ja">
<<<<<<< HEAD

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel課題1</title>
</head>

<body>

   <table>
       <tr>
           <th>ID</th>
           <th>title</th>
           <th>content</th>
           <th>created_at</th>
           <th>updated_at</th>
       </tr>
       @foreach($posts as $product)
           <tr>
               <td>{{ $product->id }}</td>
               <td>{{ $product->title }}</td>
               <td>{{ $product->content }}</td>
               <td>{{ $product->created_at }}</td>
               <td>{{ $product->updated_at }}</td>
           </tr>            
       @endforeach       
   </table>

</body>

=======
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿一覧</title>
</head>
<body>
    <h1>投稿一覧</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>タイトル</th>
                <th>本文</th>
                <th>作成日時</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
</body>
>>>>>>> 8126129 (データの作成機能とバリデーションを実装しようの提出)
</html>