<form action="{{ $action }}" method="post">
  @csrf
  @method('DELETE')
<button type="submit" class="btn btn-danger">DELETE</button>
</form>
