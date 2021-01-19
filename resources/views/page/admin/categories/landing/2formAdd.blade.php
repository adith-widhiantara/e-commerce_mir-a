<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Tambah Kategori</h3>
  </div>
  <form action="{{ route('categories.store') }}" method="post">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" class="form-control" placeholder="Nama Kategori" name="categories">
      </div>

      <div class="form-group">
        <label>Warna Kategori</label>
        <div class="input-group my-colorpicker2">
          <input type="text" class="form-control" name="color">
          <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-square"></i></span>
          </div>
        </div>
      </div>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">
        Tambah
      </button>
    </div>
  </form>
</div>
