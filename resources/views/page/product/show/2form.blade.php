<div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Barang" value="{{ $product -> name }}">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Deskripsi</label>
    <textarea class="form-control" rows="3" placeholder="Enter ...">{{ $product -> desc }}</textarea>
  </div>

  <div class="form-group">
    <label>Kategori</label>
    <select class="form-control">
      @foreach( $wto as $cat )
        <option>{{ $cat->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Stok</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Stok" value="{{ $product -> stock }}">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Harga</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Harga" value="{{ $product -> price }}">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah Terjual</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Harga" value="{{ $product -> sold }}" disabled>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" @if( $product -> status == 1 ) checked @endif>
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
        <a href="#" class="btn btn-danger">
          <i class="fas fa-times"></i>
        </a>
        <span class="ml-1">{{ $procat -> name }}</span>
      </li>
      @endforeach
    </ul>
  </div>
</div>
