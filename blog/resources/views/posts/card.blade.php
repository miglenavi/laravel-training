<div class="col-sm-6 mb-2">
    <div class="card h-100">
      <div class="card-body d-flex flex-column">
            <h2 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->name }}</a></h2>
            <p class="card-text">
                {{ $post->content }}
            </p>
            <div class="card-footer bg-transparent"><small class="text-muted">{{ $post->created_at }}</small></div>
        </div>
    </div>
</div>
