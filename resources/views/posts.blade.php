<html>
    <head>Posts</head>
    <body>
       
        @foreach ($posts as $post)
        <div>
            <a href="{{route('singlePost', ['id' => $post->id])}}">{{$post->title}}</a>
            
        </div>           
        @endforeach
    </body>
</html>