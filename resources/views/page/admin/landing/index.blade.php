@extends('base.admin')

<?php
$title = "Halaman Utama Admin"
?>

@section('title', $title)

@section('style')
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@endsection

@section('header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">{{ $title }}</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">{{ $title }}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@endsection

@section('base')
<!-- Info -->
  @include('page.admin.landing.1info')
<!-- End Info -->

<!-- Chart -->
  @include('page.admin.landing.2chart')
<!-- Chart -->
@endsection

@section('script')
<script src="{{ asset('lte/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('lte/dist/js/demo.js') }}"></script>

<script>
var donutData = {
  labels: [
    @foreach( $categories as $cat )
      '{{ $cat -> name }}',
    @endforeach
  ],
  datasets: [
    {
      data: [
        @foreach( $categories as $count )
          {{ $count -> product -> count() }},
        @endforeach
      ],
      backgroundColor : [
        @foreach( $categories as $cat )
          '{{ $cat -> color }}',
        @endforeach
      ],
    }
  ]
}

  $(function (){
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }

    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

  });
</script>
@endsection
