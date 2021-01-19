<div class="col-12">
  @foreach( $product -> imageproduct as $image )
    <img style="height: 250px; object-fit: cover" src="{{ asset('img/upload/product/'.$image->name) }}" class="product-image" alt="Product Image">
    @break
  @endforeach
</div>
<div class="col-12 product-image-thumbs">
  @foreach( $product -> imageproduct as $image )
    <div class="product-image-thumb"><img src="{{ asset('img/upload/product/'.$image->name) }}" alt="Product Image"></div>
  @endforeach
</div>
<div class="container my-5">
  <div class="row">
    <div class="col-12">
      <ul class="list-group">
        @foreach( $product -> imageproduct as $image )
          <li class="list-group-item">
            <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-image-{{ $image -> id }}-form').submit();">
              <i class="fas fa-times"></i>
            </a>

            <form id="delete-image-{{ $image -> id }}-form" action="{{ route('product.image.delete', $image -> id) }}" method="post" style="display: none">
              @csrf
              @method('delete')
            </form>

            <span class="ml-1">
              {{ $image->name }}
            </span>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

<div class="form-group">
  <label for="exampleInputFile">Tambah Gambar (Maksimal 5 Gambar)</label>
  <form class="" action="{{ route('product.image.store', $product -> slug) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="input-group">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="exampleInputFile" onchange="previewImage();" name="image">
        <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
      </div>
      <div class="input-group-append">
        <span class="input-group-text">
          Unggah
        </span>
      </div>
    </div>
    <div class="input-group mt-1">
      @if ( $product -> imageproduct -> count() > 4 )
        <button class="btn btn-primary swalDefaultError">
          Unggah
        </button>
      @else
        <button type="submit" class="btn btn-primary">
          Unggah Gambar
        </button>
      @endif
    </div>
  </form>
  <img id="image-preview" alt="image preview" class="img-fluid" style="display:none"/>
</div>
