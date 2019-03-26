<ul style="list-style-type:none;">
  <li>{{ $that }}</li>
  <li>{{ $is }}</li>
  <li>{{ $just }}</li>
  <li>{{ $great }}</li>
</ul>
<iframe src="https://giphy.com/embed/6lK3ocoEWLFOo" width="350" height="240" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>


<ul>
  @forelse ($allgood as $moku)
  <li>{{ $moku }}</li>

  @empty
  <p>Gal ir nemoku</p>
  @endforelse
</ul>
