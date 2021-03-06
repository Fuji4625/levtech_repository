<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='title'>
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]' placeholder="タイトル" value="{{ $post->title }}"/>
                </div>
                <div class='body'>
                    <h2>本文</h2>
                    <textarea type='text' name='post[body]' placeholder="今日も1日お疲れ様でした。">{{ $post->body }}</textarea>
                </div>
                <input type="submit" value="保存">
            </form>
        </div class="back">[<a href="/posts/{{ $post->id }}">back</a>]</div>
    </body>
</html>