<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">{{ __('Daftar Bank') }}</h3>
        </div>
        <div class="card-body">
          <div class="row">
            @foreach( $bank as $bnk )
              <div class="col-12 col-lg-3">
                <div class="card">
                  <img src="{{ asset('img/upload/bank/'.$bnk->photo) }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">
                      {{ $bnk->bank }}
                    </h5>
                    <p class="card-text">
                      {{ $bnk->norek }}
                    </p>
                    <p class="card-text">
                      {{ $bnk->nama }}
                    </p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <div class="card-footer">
          <form class="" action="{{ route('admin.biodata.send.addBank') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputFile">Gambar Bank</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFileBank" onchange="previewImageBank();" name="photoBank">
                  <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Unggah</span>
                </div>
              </div>
              <img id="image-preview-bank" alt="image preview" class="img-fluid" style="display:none"/>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nama Bank</label>
              <input type="text" class="form-control"  placeholder="Nama Bank" name="nameBank">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Rekening Bank</label>
              <input type="text" class="form-control"  placeholder="Nomor Rekening Bank" name="norekBank">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Atas Nama</label>
              <input type="text" class="form-control"  placeholder="Atas Nama" name="nameOwnBank">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-warning">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
