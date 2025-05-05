<!-- resources/views/posts/show.blade.php -->
<h2>{{ $post->title }}</h2>
<p>By {{ $post->author->name }}</p>
<p>{{ $post->content }}</p>

<hr>

<h3>Comments</h3>
@foreach($post->comments as $comment)
    <div>
        <strong>{{ $comment->commenter_name }}:</strong> {{ $comment->comment }}
    </div>
@endforeach

<hr>

<form method="POST" action="/posts/{{ $post->id }}/comments">
    @csrf
    <input type="text" name="commenter_name" placeholder="Your Name" required>
    <br>
    <textarea name="comment" placeholder="Your Comment" required></textarea>
    <br>
    <button type="submit">Post Comment</button>
</form>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

@if($errors->any())
    <ul style="color: red">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
