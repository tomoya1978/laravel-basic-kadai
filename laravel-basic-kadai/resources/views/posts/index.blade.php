<!DOCTYPE html>
<html lang="ja">

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

</html>