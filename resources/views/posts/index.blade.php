<div>
    <h2>All Posts</h2>
    @foreach($posts as $post)
        <div>
            <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
            <p>by {{ $post->author->name }}</p>
        </div>
    @endforeach
</div>
