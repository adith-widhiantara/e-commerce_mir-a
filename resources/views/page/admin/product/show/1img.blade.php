<div class="col-12">
  <img style="height: 250px; object-fit: cover" src="{{ asset('lte/dist/img/prod-1.jpg') }}" class="product-image" alt="Product Image">
</div>
<div class="col-12 product-image-thumbs">
  <div class="product-image-thumb active"><img src="{{ asset('lte/dist/img/prod-1.jpg') }}" alt="Product Image"></div>
  <div class="product-image-thumb" ><img src="{{ asset('lte/dist/img/prod-2.jpg') }}" alt="Product Image"></div>
  <div class="product-image-thumb" ><img src="{{ asset('lte/dist/img/prod-3.jpg') }}" alt="Product Image"></div>
  <div class="product-image-thumb" ><img src="{{ asset('lte/dist/img/prod-4.jpg') }}" alt="Product Image"></div>
  <div class="product-image-thumb" ><img src="{{ asset('lte/dist/img/prod-5.jpg') }}" alt="Product Image"></div>
</div>
<div class="container my-5">
  <div class="row">
    <div class="col-12">
      <ul class="list-group">
        <li class="list-group-item">
          <a href="#" class="btn btn-danger">
            <i class="fas fa-times"></i>
          </a>
          <span class="ml-1">Cras justo odio</span>
        </li>
        <li class="list-group-item">
          <a href="#" class="btn btn-danger">
            <i class="fas fa-times"></i>
          </a>
          <span class="ml-1">Dapibus ac facilisis in</span>
        </li>
        <li class="list-group-item">
          <a href="#" class="btn btn-danger">
            <i class="fas fa-times"></i>
          </a>
          <span class="ml-1">Morbi leo risus</span>
        </li>
        <li class="list-group-item">
          <a href="#" class="btn btn-danger">
            <i class="fas fa-times"></i>
          </a>
          <span class="ml-1">Porta ac consectetur ac</span>
        </li>
        <li class="list-group-item">
          <a href="#" class="btn btn-danger">
            <i class="fas fa-times"></i>
          </a>
          <span class="ml-1">Vestibulum at eros</span>
        </li>
      </ul>
    </div>
  </div>
</div>

<form>
<div class="form-group">
  <label for="exampleInputFile">Tambah Gambar (Maksimal 5 Gambar)</label>
  <div class="input-group">
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="exampleInputFile" onchange="previewImage();">
      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
    </div>
    <div class="input-group-append">
      <span class="input-group-text">Upload</span>
    </div>
  </div>
  <img id="image-preview" alt="image preview" class="img-fluid" style="display:none"/>
</div>
