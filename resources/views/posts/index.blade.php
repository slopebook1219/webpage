<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>一覧ページです</h1>
    <a href="{{ route('posts.create') }}">投稿画面へ</a>  

    @foreach($posts as $post)
    <div>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.show', ['post' => $post->id])}}">
            <button>詳細画面へ</button>
        </a>
    </div>
    @endforeach
</body>
</html>