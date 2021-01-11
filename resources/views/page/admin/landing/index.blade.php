@extends('base.admin')

<?php
$title = "Halaman Utama Admin"
?>

@section('title', $title)

@section('style')
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
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
var donutData        = {
  labels: [
      'Chrome',
      'IE',
      'FireFox',
      'Safari',
      'Opera',
      'Navigator',
  ],
  datasets: [
    {
      data: [
        700,
        500,
        400,
        600,
        300,
        100
      ],
      backgroundColor : [
        '#f56954',
        '#00a65a',
        '#f39c12',
        '#00c0ef',
        '#3c8dbc',
        '#d2d6de'
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
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })
  });
</script>
@endsection
