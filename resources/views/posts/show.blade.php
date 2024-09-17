<x-app-layout>
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>

    <h1>Comment list:</h1>
    <ul>
        @foreach($post->comments as $comment)
            <p>{{ $comment->content }}</p>
        @endforeach
    </ul>

    <h1>Create comment</h1>
    <form action="{{ route('posts.addcomment', $post) }}" method="post">
        @csrf
        
        <label for="content">Content</label>
        <textarea name="content" id="content"></textarea>

        <input type="submit" value="Create">
    </form>
</x-app-layout>