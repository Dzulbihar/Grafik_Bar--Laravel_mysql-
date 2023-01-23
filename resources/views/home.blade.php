@extends('layouts.app')

@section('content')




<!-- Laporan Data Tables -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-10">
        <h1> <b>Laporan Data Tables</b> <br> (Arus Bongkar Muat Petikemas <b>Internasional 2020 & 2021</b>) </h1>
      </div>
      <div class="col-sm-2">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"> Data Tables </li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->





<!-- Kapal dan GT -->
<section class="content">
  <div class="container-fluid">
    <!-- =========================================================== -->



    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-info">
          <div class="info-box-icon">
            <h1 class="icon">
              <i class="fa fa-ship bg-info" aria-hidden="true"></i>
            </h1>
          </div>

          <div class="info-box-content">
            <h3 class="info-box-number">
              <?php
                $koneksi = mysqli_connect("localhost","root","","pelindo_grafik_bar_bongkarmuat_LM");

                $query = mysqli_query($koneksi, "SELECT SUM(shipcall) as kapal FROM tbl_arus WHERE Tahun='2020' order by ID asc");
                $shipcall    =mysqli_fetch_array($query);

                echo $shipcall['kapal'];
                echo ' Unit';
              ?>
            </h3>

            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <h3 class="progress-description">
              <?php 
                $persen = $shipcall['kapal']/600*100;
                echo ceil($persen);
                echo '%';
                echo ' Arus Kapal';
                echo "<br>";
                echo "<br>";
               ?>
            </h3>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <a href="#" class="text-right text-white"> th 2020 </a>
          </div>
        </div>
        <!-- /.info-box -->
      </div>

      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-info">
          <div class="info-box-icon">
            <h1 class="icon">
              <i class="fa fa-ship bg-info" aria-hidden="true"></i>
            </h1>
          </div>

          <div class="info-box-content">
            <h3 class="info-box-number">
              <?php
                $koneksi = mysqli_connect("localhost","root","","pelindo_grafik_bar_bongkarmuat_LM");

                $query = mysqli_query($koneksi, "SELECT SUM(shipcall) as kapal FROM tbl_arus WHERE Tahun='2021' order by ID asc");
                $shipcall    =mysqli_fetch_array($query);

                echo $shipcall['kapal'];
                echo ' Unit';
              ?>
            </h3>

            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <h3 class="progress-description">
              <?php 
                $persen = $shipcall['kapal']/600*100;
                echo ceil($persen);
                echo '%';
                echo ' Arus Kapal';
                echo "<br>";
                echo "<br>";
               ?>
            </h3>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <a href="#" class="text-right text-white"> th 2021 </a>
          </div>
        </div>
        <!-- /.info-box -->
      </div>

      <div class="col-md-6 col-sm-6 col-12">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>
              <?php
                $koneksi = mysqli_connect("localhost","root","","pelindo_grafik_bar_bongkarmuat_LM");
                $query = mysqli_query($koneksi, "SELECT SUM(shipcall) as kapal FROM tbl_arus order by ID asc");
                $shipcall    =mysqli_fetch_array($query);
              ?>
              <?php 
                echo $shipcall['kapal'];
                echo ' Unit';
                echo "<br>";
                echo "<br>";
               ?> 
            </h3>    
          </div>
          <div class="icon">
            <!-- <i class="ion ion-ship"></i> -->
            <i class="fa fa-ship bg-info" aria-hidden="true"></i>
          </div>
          <a href="#" class="small-box-footer"> Tahun 2021 - 2020 </a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-warning">
          <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
          <div class="info-box-content text-white">
            <h3 class="info-box-number">
              <?php
                $koneksi = mysqli_connect("localhost","root","","pelindo_grafik_bar_bongkarmuat_LM");
                $query = mysqli_query($koneksi, "SELECT SUM(gt) as gt FROM tbl_arus WHERE Tahun='2020' order by ID asc");
                $gt    =mysqli_fetch_array($query);

                $angka_format = number_format($gt['gt'],0,",",".");
                echo $angka_format;
                echo ' GT';
              ?>
            </h3>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              <?php 
                $persen = $gt['gt']/14000000*100;
                echo ceil($persen);
                echo '%';
                echo ' Arus Kapal';
                echo "<br>";
               ?>
            </span>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <a href="#" class="text-right text-white"> th 2020 </a>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-warning">
          <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
          <div class="info-box-content text-white">
            <h3 class="info-box-number">
              <?php
                $koneksi = mysqli_connect("localhost","root","","pelindo_grafik_bar_bongkarmuat_LM");
                $query = mysqli_query($koneksi, "SELECT SUM(gt) as gt FROM tbl_arus WHERE Tahun='2021' order by ID asc");
                $gt    =mysqli_fetch_array($query);

                $angka_format = number_format($gt['gt'],0,",",".");
                echo $angka_format;
                echo ' GT';
              ?>
            </h3>
            <div class="progress text-white">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              <?php 
                $persen = $gt['gt']/14000000*100;
                echo ceil($persen);
                echo '%';
                echo ' Arus Kapal';
                echo "<br>";
               ?>
            </span>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <a href="#" class="text-right text-white"> th 2021 </a>
                           
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <div class="col-md-6 col-sm-6 col-12">
        <div class="small-box bg-warning">
          <div class="inner text-white">
            <h3>
              <?php
                $koneksi = mysqli_connect("localhost","root","","pelindo_grafik_bar_bongkarmuat_LM");
                $query = mysqli_query($koneksi, "SELECT SUM(gt) as gt FROM tbl_arus order by ID asc");
                $gt    =mysqli_fetch_array($query);

                $angka_format = number_format($gt['gt'],0,",",".");
                echo $angka_format;
                echo ' GT';
                echo "<br>";
                echo "<br>";
               ?> 
            </h3>    
          </div>
          <div class="icon">
            <!-- <i class="ion ion-ship"></i> -->
            <i class="fa fa-ship bg-warning" aria-hidden="true"></i>
          </div>
          <a href="#" class="small-box-footer "> Tahun 2021 - 2020 </a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->


@endsection
