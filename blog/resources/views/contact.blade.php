<h2>Kas as</h2>
<ul>
  <li>{{ $name }}</li>
  <li>{{ $email }}</li>
  <li>{{ $phone }}</li>
</ul>


<h2>Ka as megstu</h2>

<ul>
  @forelse ($interests as $interest)
  <li>{{ $interest }}</li>

  @empty
  <p>Neturiu pomegiu</p>
  @endforelse
</ul>
