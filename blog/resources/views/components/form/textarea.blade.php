<div class="form-group">
  <div class="row">
    <label>{{ $label }}</label>
    <textarea class="form-control" name="{{ $name }}">{{ old($name, $value ?? '') }}</textarea>


    @if ($errors->has($name))
        <small class="text-danger">
            {{ $errors->first($name) }}
        </small>
    @endif
    </div>
</div>
