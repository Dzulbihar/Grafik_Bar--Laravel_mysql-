<?php 

  $koneksi = mysqli_connect("localhost","root","","pelindo_grafik_bar_bongkarmuat_LM");

//////////////////////// triwulan_import
  $teus_triwulan_import_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4
    "                
  );

  $teus_triwulan_import_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4
    "                
  );

 ?>

 

<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {

    var areaChartCanvas = $('#teus_triwulan_import').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['Triwulan 1', 'Triwulan 2', 'Triwulan 3', 'Triwulan 4'],
      datasets: [
        {
          label               : '2021',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          data                : 
            [
              <?php 
                while ($data = mysqli_fetch_array($teus_triwulan_import_2021)) 
                { 
                  echo '"' . $data['triwulan1'] . '",';
                  echo '"' . $data['triwulan2'] . '",';
                  echo '"' . $data['triwulan3'] . '",';
                  echo '"' . $data['triwulan4'] . '",';
                }
              ?>
            ]
        },
        {
          label               : '2020',
          backgroundColor     : 'rgba(255, 147, 1, 0.8)',
          data                : 
            [
              <?php 
                while ($data = mysqli_fetch_array($teus_triwulan_import_2020)) 
                { 
                  echo '"' . $data['triwulan1'] . '",';
                  echo '"' . $data['triwulan2'] . '",';
                  echo '"' . $data['triwulan3'] . '",';
                  echo '"' . $data['triwulan4'] . '",';
                }
              ?>
            ]
        },
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart_teus_triwulan_import').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

  })
</script>


