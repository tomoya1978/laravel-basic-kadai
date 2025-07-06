<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use App\Models\posts;
=======

use Illuminate\Support\Facades\DB;
use App\Models\Posts;
>>>>>>> 8126129 (データの作成機能とバリデーションを実装しようの提出)

class PostController extends Controller
{
    public function index() {
<<<<<<< HEAD
            // productsテーブルからすべてのデータを取得し、変数$postsに代入する
        $posts = DB::table('posts')->get();

        // 変数$postsをproducts/index.blade.phpファイルに渡す
        return view('posts.index', compact('posts'));
    }

       public function show($id) {
        $post = posts::find($id);
        return view('posts.show', compact('post'));
    }
=======
        // postsテーブルからすべてのデータを取得
        $posts = DB::table('posts')->get();

        // posts/index.blade.phpにデータを渡す
        return view('posts.index', compact('posts'));
    }

    public function show($id) {
        $post = posts::find($id);
        return view('posts.show', compact('post'));
    }

    // 投稿作成ページを表示
    public function create() {
        return view('posts.create');
    }

    // 投稿データを保存
    public function store(Request $request) {
        // バリデーション
        $validated = $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:200',
        ]);

        // データの挿入
        $post = new posts();
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->save();

        // 投稿一覧ページにリダイレクト
        return redirect('/posts');
    }
>>>>>>> 8126129 (データの作成機能とバリデーションを実装しようの提出)
}
