<ul>
  @foreach( \App\Categories::all() as $listCat )
    <li>
      <a href="#">{{ $listCat -> name }}</a>
    </li>
  @endforeach
</ul>
