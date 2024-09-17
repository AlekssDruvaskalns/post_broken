<x-app-layout>
    <h1>All posts</h1>
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>Title: {{ $post->title }}</h2>
                <p>Content: {{ $post->content }}</p>
                <div>
                    <a href="{{ route('posts.show', $post->id) }}">Show</a>
                    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>