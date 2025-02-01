<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>投稿ページです</h1>
    <a href="{{ route('posts.edit') }}">編集画面へ</a>  
<div>
    <h1>新規投稿</h1>
    <div>
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <label for="title" class=>タイトル</label>
            <input type="text" id="title" name="title">
    </div>
    <div>
            <label for="content" class=>内容</label>
            <textarea  name="content" rows="5" required></textarea>
    </div>
            <button type="submit">投稿する</button>
        </form>
</div>

</body>
</html>