<div class="form-group">
  <div class="row">
    <label>{{ $label }}</label>
    <textarea class="form-control" name="{{ $name }}">{{ $value ?? old($name) }}</textarea>


    @if ($errors->has($name))
        <small class="text-danger">
            {{ $errors->first($name) }}
        </small>
    @endif
    </div>
</div>
