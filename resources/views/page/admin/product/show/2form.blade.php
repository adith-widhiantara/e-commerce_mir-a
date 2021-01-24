<form class="" action="{{ route('product.update', $product -> slug) }}" method="post">
  @csrf
  @method('patch')
  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Barang</label>
      <input type="text" class="form-control" placeholder="Nama Barang" value="{{ $product -> name }}" name="name">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Deskripsi</label>
      <textarea class="form-control" rows="3" placeholder="Deskripsi Produk" name="desc">{{ $product -> desc }}</textarea>
    </div>

    <div class="form-group">
      <label>Kategori</label>
      <select class="select2" multiple="multiple" data-placeholder="Pilih Kategori" style="width: 100%;" name="categories[]">
        @foreach( $wto as $cat )
        <option value="{{ $cat -> id }}">{{ $cat->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Stok</label>
      <input type="number" class="form-control" placeholder="Stok" value="{{ $product -> stock }}" name="stock">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Harga</label>
      <input type="number" class="form-control" placeholder="Harga" value="{{ $product -> price }}" name="price">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Berat</label>
      <input type="number" class="form-control" placeholder="Berat" value="{{ $product -> weight }}" name="weight">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Jumlah Terjual</label>
      <input type="number" class="form-control" placeholder="Jumlah Terjual" value="{{ $product -> sold }}" disabled>
    </div>

    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="status" @if( $product -> status == 1 ) checked @endif>
      <label class="form-check-label" for="exampleCheck1">Tampilkan barang</label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<div class="container row mt-5">
  <div class="col-12">
    <h3>Kategori</h3>
    <ul class="list-group">
      @foreach( $product->categories as $procat )
      <li class="list-group-item">
        <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-categories-{{ $procat -> id }}-form').submit();" title="Hapus Data">
          <i class="fas fa-times"></i>
        </a>

        <form id="delete-categories-{{ $procat -> id }}-form" action="{{ route('product.categories.delete', [$procat -> id, $product -> id]) }}" method="post" style="display: none">
          @csrf
          @method('delete')
        </form>

        <span class="ml-1">{{ $procat -> name }}</span>
      </li>
      @endforeach
    </ul>
  </div>
</div>
