@foreach ($post as $post)
    <div class="post">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <!-- Display other post information as needed -->
    </div>
@endforeach
