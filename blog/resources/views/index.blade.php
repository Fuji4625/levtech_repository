<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" >
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($posts as $post)
            <div class='post'>
                    <h2 class="title">{{ $post->title }}</h2>
                    <p class="body">{{ $post->body }}</p>
                <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    <h2 class="title">Title2</h2>
                    <p class="body">Second body.</p>
                
                    <h2 class="title">Title3</h2>
                    <p class="body">Third body.</p>
                
                    <h2 class="title">Title4</h2>
                    <p class="body">4th body.</p>
                
                    <h2 class="title">Title5</h2>
                    <p class="body">5th body.</p>
                    
                    <h2 class="title">Title6</h2>
                    <p class="body">6th body.</p>
                
                    <h2 class="title">Title7</h2>
                    <p class="body">7th body.</p>
                
                    <h2 class="title">Title8</h2>
                    <p class="body">8th body.</p>
                    
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
