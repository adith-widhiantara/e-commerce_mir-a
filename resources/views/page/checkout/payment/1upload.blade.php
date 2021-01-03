<div class="text">
  <p class="text-center">
    Berikut adalah nomor rekening untuk pembayaran produk yang telah dipilih
  </p>
</div>

<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-2 d-flex align-items-center">
      <img src="{{ asset('img/bank/bri.png') }}" class="card-img my-auto ml-1" alt="...">
    </div>
    <div class="col-10">
      <div class="card-body">
        <h5 class="card-title">BRI</h5>
        <p class="card-text">0123 4567 8910</p>
        <p class="card-text"><small class="text-muted">A.N Widhiantara</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-2 d-flex align-items-center">
      <img src="{{ asset('img/bank/bni.png') }}" class="card-img my-auto ml-1" alt="...">
    </div>
    <div class="col-10">
      <div class="card-body">
        <h5 class="card-title">BNI</h5>
        <p class="card-text">0123 4567 8910</p>
        <p class="card-text"><small class="text-muted">A.N Widhiantara</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-2 d-flex align-items-center">
      <img src="{{ asset('img/bank/mandiri.png') }}" class="card-img my-auto ml-1" alt="...">
    </div>
    <div class="col-10">
      <div class="card-body">
        <h5 class="card-title">Mandiri</h5>
        <p class="card-text">0123 4567 8910</p>
        <p class="card-text"><small class="text-muted">A.N Widhiantara</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-12">
      <p class="text-center">
        Unggah bukti pembayaran
      </p>
      <div class="container">
        <form class="" action="index.html" method="post">
          <input type="file" id="input-file" name="input-file" accept="image/*" onchange={handleChange()} hidden />
          <label class="btn btn-primary btn-block" for="input-file" role="button">
            Unggah Bukti Pembayaran
          </label>
          <button type="submit" class="btn btn-block">Simpan</button>
          <div class="preview-box"></div>
        </form>
      </div>
    </div>
  </div>
</div>

@section('JavaScript')
<script>
const handleChange = () => {
const fileUploader = document.querySelector('#input-file');
const getFile = fileUploader.files
if (getFile.length !== 0) {
  const uploadedFile = getFile[0];
  readFile(uploadedFile);
}
}

const readFile = (uploadedFile) => {
if (uploadedFile) {
  const reader = new FileReader();
  reader.onload = () => {
    const parent = document.querySelector('.preview-box');
    parent.innerHTML = `<img class="preview-content" src=${reader.result} />`;
  };

  reader.readAsDataURL(uploadedFile);
}
};
</script>
@endsection
