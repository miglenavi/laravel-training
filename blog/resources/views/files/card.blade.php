<div class="col">
    <div class="card">
        <div class="card-body">
            <h2><a href="{{ route('files.show', $file->id) }}">{{ $file->filename }}</a></h2>

            <h4>{{ $file->size }} GB</h4>

            <div>
                {{ $file->created_at }}
            </div>

        </div>
    </div>
</div>
