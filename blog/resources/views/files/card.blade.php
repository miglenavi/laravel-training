<div class="col-sm-6 mb-2">
    <div class="card h-100">
      <div class="card-body d-flex flex-column">
            <h2 class="card-title"><a href="{{ route('files.show', $file->id) }}">{{ $file->filename }}</a></h2>

            <p class="card-text">{{ $file->size }} GB</p>

            <div class="card-footer bg-transparent"><small class="text-muted">{{ $file->created_at }}</small>
            </div>

          @if ($file->trashed())
              <div class="card-footer bg-transparent">
                  <small class="text-danger">Deleted: {{ $file->deleted_at }}</small>
              </div>
              <form action="{{ route('files.restore') }}" method="post">
                  @csrf

                  <input type="hidden" name="id" value="{{ $file->id }}">

                  <button class="btn btn-primary" type="submit" value="">Recreate</button>
              </form>
          @endif
        </div>
    </div>
</div>
