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
        <p class="create">[<a href='/posts/create'>create</a>]</p>
        <div class='posts'>
            @foreach ($posts as $post)
            <div class='post'>
                    <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</h2></a>
                    <p class="body">{{ $post->body }}</p>
                    
                       
                
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
        
        
        <div class="row justify-content-center">
                        <div class="col-md-3">
                            <form action="">
                                <input type="submit" value="&#xf164;いいね" class="fas btn btn-success">
                            </form>
                        </div>
                        <div class="col-md-3">
                            <form action="">
                                <input type="submit" value="&#xf164;いいね取り消す" class="fas btn btn-danger">
                            </form>
                        </div>
                    </div>
                    
        @if($post->users()->where('user_id', Auth::id())->exists())
            <div class="col-md-3">
              <form action="{{ route('unfavorites', $post) }}" method="POST">
                 @csrf
                 <input type="submit" value="&#xf164;いいね取り消す" class="fas btn btn-danger">
              </form>
             </div>
        @else
            <div class="col-md-3">
              <form action="{{ route('favorites', $post) }}" method="POST">
                @csrf
                <input type="submit" value="&#xf164;いいね" class="fas btn btn-success">
              </form>
             </div>
         @endif
         
        <div class="row justify-content-center">
            <p>いいね数：{{ $post->users()->count() }}</p>
        </div>
                    
    </body>
</html>
