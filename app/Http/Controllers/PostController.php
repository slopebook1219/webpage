<?php
//注意コントローラーで使う変数とかはモデルで定義されているのが普通
namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
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
    public function edit()
    {
        return view('posts.edit');
    }

}
