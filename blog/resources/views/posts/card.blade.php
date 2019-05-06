<div class="col-sm-6 mb-2">
    <div class="card h-100">
      <div class="card-body d-flex flex-column">
            <h2 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->name }}</a></h2>
          <div>
              Categories:
              @foreach ($post->categories as $category)
                  {{ $category->name }},
              @endforeach
          </div>

          <div class="text-left">
              Komentarai: {{ $post->comments_count }}
          </div>

          <div>
              Author: {{ $post->user ? $post->user->name : 'no name' }}
          </div>
          <hr>
            <p class="card-text">
                {{ $post->content }}
            </p>
            <div class="card-footer bg-transparent"><small class="text-muted">{{ $post->created_at }}</small></div>

            @if ($post->trashed())
              <div class="card-footer bg-transparent">
                  <small class="text-danger">Deleted: {{ $post->deleted_at }}</small>
              </div>
              <form action="{{ route('posts.restore') }}" method="post">
                  @csrf

                  <input type="hidden" name="id" value="{{ $post->id }}">

                  <button class="btn btn-primary" type="submit" value="">Recreate</button>
              </form>
            @endif



        </div>
    </div>
</div>

