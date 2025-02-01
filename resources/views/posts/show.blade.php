<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>詳細ページ</title>
</head>
<body>
    <h1>詳細ページ</h1>
    <div>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.edit', ['post' => $post->id])}}">
            <button>編集画面へ</button>
        </a>

        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
            @csrf
            @method('DELETE')
            <button type="submit" style="color: red;">削除</button>
        </form>

        <a href="{{ route('posts.index') }}">
        <button>一覧に戻る</button>
        </a>
    </div>
</body>
</html>