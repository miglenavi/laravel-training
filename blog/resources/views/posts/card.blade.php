
<div class="col">
    <div class="card">
        <div class="card-body">
            <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->name }}</a></h2>

            <small>{{ $post->created_at }}</small>

            <div>
                {{ $post->content }}
            </div>

        </div>
    </div>
</div>
