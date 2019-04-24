@forelse ($comments as $comment )

    <div class="card text-black bg-light mb-3">
        <div class="card-header">
            <h5>{{ $comment->author }}</h5>
            <span class="text-muted">{{ $comment->email }}</span>
        </div>
        <div class="card-body">
            <p class="mb-0">{{ $comment->content }}</p>
            @delete(['action' => route('comments.destroy', $comment->id) ])
        </div>
    </div>

@empty

    No comments

@endforelse
