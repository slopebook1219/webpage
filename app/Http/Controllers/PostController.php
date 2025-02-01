<?php
//注意コントローラーで使う変数とかはモデルで定義されているのが普通
namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{

    //投稿一覧機能
    public function index()
    {
        $posts=Post::all();
        return view('posts.index', compact('posts'));
    }
    //投稿作成機能
    public function create()
    {
        return view('posts.create');
    }
    //投稿保存機能
    public function store(Request $request)
    {
        //投稿のバリデーション
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        //投稿のレコードを作成するためのメソッド。いわば保存機能に等しい。
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('posts.index');
    }
    //投稿編集機能
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }
    
    //投稿詳細への遷移機能
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    //編集の更新をかける機能
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $post->update($request->all());

        return redirect()->route('posts.show',  compact('post'));
    }
    //投稿の削除機能
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
