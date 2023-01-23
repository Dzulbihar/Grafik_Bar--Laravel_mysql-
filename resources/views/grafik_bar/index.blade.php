@extends('layouts.app')

@section('content')

<!-- Content Header -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-10">
        <h1> <b>Laporan Grafik Bar</b> <br> (Arus Bongkar Muat Petikemas <b>Internasional 2020 & 2021</b>) </h1>
      </div>
      <div class="col-sm-2">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"> Grafik </li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->


<!-- Main Grafik -->
<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-4">

@include('grafik_bar.bar_chart.teus_pertahun_import')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.teus_pertahun_export')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.teus_pertahun_import_export')

      </div>
    </div>
    <!-- /.row --> 
    
    <div class="row">
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.teus_semester_import')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.teus_semester_export')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.teus_semester_import_export')

      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.teus_triwulan_import')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.teus_triwulan_export')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.teus_triwulan_import_export')

      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.teus_perbulan_import')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.teus_perbulan_export')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.teus_perbulan_import_export')

      </div>
    </div>
    <!-- /.row -->


    <div class="row">
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.pertahun_import')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.pertahun_export')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.pertahun_import_export')

      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.semester_import')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.semester_export')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.semester_import_export')

      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.triwulan_import')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.triwulan_export')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.triwulan_import_export')

      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.perbulan_import')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.perbulan_export')

      </div>
      <div class="col-md-4">
 
@include('grafik_bar.bar_chart.perbulan_import_export')

      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-6">
 
@include('grafik_bar.bar_chart.ships_call')

      </div>
      <div class="col-md-6">
 
@include('grafik_bar.bar_chart.gt')

      </div>
    </div>
    <!-- /.row -->





  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection