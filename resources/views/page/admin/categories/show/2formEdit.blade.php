<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Ubah Nama Kategori</h3>
  </div>
  <form action="{{ route('categories.update', $categories -> id) }}" method="post">
    @csrf
    @method('put')
    <div class="card-body">
      <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" class="form-control" placeholder="Nama Kategori" name="categories" value="{{ $categories -> name }}">
      </div>

      <div class="form-group">
        <label>Warna Kategori</label>
        <div class="input-group my-colorpicker2">
          <input type="text" class="form-control" name="color" value="{{ $categories -> color }}">
          <div class="input-group-append">
            <span class="input-group-text">
              <i class="fas fa-square" style="color:{{ $categories -> color }}"></i>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">
        Ubah Nama
      </button>
    </div>
  </form>
</div>
