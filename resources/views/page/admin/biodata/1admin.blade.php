<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Biodata Admin</h3>
        </div>
        <form class="" action="{{ route('admin.biodata.biodataAdmin') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" value="{{ $user->name }}" name="name">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="{{ $user->email }}" name="email">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Ganti Password</label>
              <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Ganti Password" name="password">
            </div>

            <div class="form-group">
              <label for="exampleInputFile">Foto Profil</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" onchange="previewImage();" name="photo">
                  <label class="custom-file-label" for="exampleInputFile">Pilih Foto</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Unggah</span>
                </div>
              </div>
              <img id="image-preview" alt="image preview" class="img-fluid" style="display:none"/>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
