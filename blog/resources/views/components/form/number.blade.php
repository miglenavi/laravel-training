<div class="form-group">
  <div class="row">
    <label>{{ $label }}</label>
    <input class="form-control" type="number" name="{{ $name }}" value="{{ old($name, $value ?? '') }}">
    @if ($errors->has($name))
    <small class="text-danger">
        {{ $errors->first($name) }}
    </small>
    @endif
 </div>
</div>
