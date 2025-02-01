<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>編集ページです</h1>
    <div>
        <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="post">
            @csrf
            @method('PUT')<!-- postメソッドがputメソッドとして処理される -->
            <label for="title" class=>タイトル</label>
            <input type="text" id="title" value="{{ old('title', $post->title)}}" name="title" required>
    </div>
    <div>
            <label for="content" class=>内容</label>
            <textarea  name="content" rows="5" required>{{ old('content', $post->content) }}</textarea>
    </div>
            <button type="submit">更新する</button>
        </form>
</div>
</body>
</html>