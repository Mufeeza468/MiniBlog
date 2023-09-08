
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1> <b>Posts</b></h1>
        </br>
        @forelse($post as $key=>$post)
        <h2> <b> ID </b></h2>
        <p> {{$post->id}}  </p>
        <h2> <b> Title  </b></h2>
        <p>  {{$post->title}}  </p>
        <h2><b> Body </b> </h2>
        <p>  {{$post->body}}  </p>
        <h2><b> Actions </b> </h2>
         <p>
            <form action="{{ route('comment.store') }}" method="GET">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <input name="comment" rows="3" placeholder="Write a comment "/>
    <button type="submit">Submit </button>
</form>
         </p> 
        </br>
        @empty
        @endforelse
        
    </div>
</body>
</html>
