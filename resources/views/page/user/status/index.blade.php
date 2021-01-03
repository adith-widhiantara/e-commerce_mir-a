@extends('base.base')

@section('title', 'Daftar Pesanan Saya')

@section('base')
<!-- Breadcrumbs -->
  {{ Breadcrumbs::render('user.status', 1) }}
<!-- end Breadcrumbs -->

<div class="container my-3">
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">Daftar Pesanan Saya</h5>
      <p class="card-text">Status : Dikirim</p>
      <p class="card-text">Nomor Resi (JNE) : 012345678910</p>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
          10%
        </div>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
      </ul>
    </div>
  </div>

  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">Daftar Pesanan Saya</h5>
      <p class="card-text">Status : Dikirim</p>
      <p class="card-text">Nomor Resi (JNE) : 012345678910</p>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
          10%
        </div>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
      </ul>
    </div>
  </div>
</div>
@endsection
