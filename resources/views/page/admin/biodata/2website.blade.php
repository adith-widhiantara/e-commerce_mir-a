<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form class="" action="{{ route('admin.biodata.biodataWebsite') }}" method="post">
          @csrf
          @method('patch')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Instagram</label>
              <input type="text" class="form-control"  placeholder="Instagram" value="{{ \App\Biodata::where('name','instagram')->first()->keterangan }}" name="instagram">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Facebook</label>
              <input type="text" class="form-control"  placeholder="Facebook" value="{{ \App\Biodata::where('name','facebook')->first()->keterangan }}" name="facebook">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <input type="text" class="form-control"  placeholder="Alamat" value="{{ $user->alamat }}" name="alamat">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Telepon</label>
              <input type="text" class="form-control"  placeholder="Nomor Telepon" value="{{ $user->nomorTelepon }}" name="nomorTelepon">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
