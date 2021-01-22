@extends('base.base')

@section('title', 'Daftar Pesanan Saya')

@section('base')
<!-- Breadcrumbs -->
  {{ Breadcrumbs::render('user.status', $user) }}
<!-- end Breadcrumbs -->

<div class="container my-3">
  @foreach( $cart as $crt )
    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title">Daftar Pesanan Saya</h5>
          <?php
              if ( $crt -> status == 1 ) {
                $text = "Belum Dikonfirmasi";
              } elseif ( $crt -> status == 2 ) {
                $text = "Belum Dibayar";
              } elseif ( $crt -> status == 3 ) {
                $text = "Proses Dikemas";
              } elseif ( $crt -> status == 4 ) {
                $text = "Sedang Dikirim";
              } elseif ( $crt -> status == 5 ) {
                $text = "Selesai";
              } elseif ( $crt -> status == 6 ) {
                $text = "Dibatalkan";
              }
            ?>
        <p class="card-text">
          Status : {{ $text }}
          @if ( $crt -> status == 4 )
            <br>
            Nomor Resi : {{ $crt -> resi }} ({{ $crt -> pengiriman }})
          @endif
        </p>

        @if ( $crt -> status == 6 )
          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        @else
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{ $crt -> status * 20 }}%;" aria-valuenow="{{ $crt -> status * 20 }}" aria-valuemin="0" aria-valuemax="100">
              {{ $crt -> status * 20 }}%
            </div>
          </div>
        @endif

        <ul class="list-group list-group-flush">
          @if ( $crt -> status == 2 )
            <li class="list-group-item">
              <a href="{{ route('checkout.dropboxPayment') }}" class="btn btn-block" style="background-color: #7fad39; border-color: #7fad39; color: #ffffff">
                Bayar
              </a>
            </li>
          @elseif ( $crt -> status == 4 )
            <li class="list-group-item">
              <a onclick="event.preventDefault(); document.getElementById('barang-diterima-form').submit();" class="btn btn-block" style="background-color: #7fad39; border-color: #7fad39; color: #ffffff">
                Barang Sudah Diterima
              </a>

              <form id="barang-diterima-form" class="" action="{{ route('user.update', $crt -> id) }}" method="post" style="display: none">
                @csrf
                @method('patch')
              </form>
            </li>
          @endif
          @foreach ( $crt -> product as $pro )
            <li class="list-group-item">
              {{ $pro -> name }}
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  @endforeach
</div>
@endsection
