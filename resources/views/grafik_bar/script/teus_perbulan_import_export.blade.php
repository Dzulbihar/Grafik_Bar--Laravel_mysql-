<?php 

  $koneksi = mysqli_connect("localhost","root","","pelindo_grafik_bar_bongkarmuat_LM");

// perbulan_import_export
  $teus_perbulan_import_export_2020  = mysqli_query($koneksi, "SELECT if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45 as teus FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $teus_perbulan_import_export_2021  = mysqli_query($koneksi, "SELECT if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45 as teus FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $teus_Bulan_perbulan_import_export      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

 ?>

 
<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {

    var areaChartCanvas = $('#teus_perbulan_import_export').get(0).getContext('2d')
    var areaChartData_teus_perbulan_import_export = {
      labels  : [
          <?php 
            while ($p = mysqli_fetch_array($teus_Bulan_perbulan_import_export)) { echo '"' . $p['Bulan'] . '",';}
          ?>
      ],
      datasets: [
        {
          label               : '2021',
          backgroundColor     : 'rgba(60,141,188,0.9)',

          data                : 
            [
              <?php 
                while ($data = mysqli_fetch_array($teus_perbulan_import_export_2021)) 
                { 
                  echo '"' . $data['teus'] . '",';
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
                while ($data = mysqli_fetch_array($teus_perbulan_import_export_2020)) 
                { 
                  echo '"' . $data['teus'] . '",';
                }
              ?>
            ]
        },
      ]
    }

    //-------------
    //- BAR CHART -  - CHART Ships Call -
    //-------------
    var barChart_Canvas_teus_perbulan_import_export = $('#barChart_teus_perbulan_import_export').get(0).getContext('2d')
    var barChart_Data_teus_perbulan_import_export = $.extend(true, {}, areaChartData_teus_perbulan_import_export)
    var temp0 = areaChartData_teus_perbulan_import_export.datasets[0]
    var temp1 = areaChartData_teus_perbulan_import_export.datasets[1]
    barChart_Data_teus_perbulan_import_export.datasets[0] = temp1
    barChart_Data_teus_perbulan_import_export.datasets[1] = temp0

    var barChart_Options_teus_perbulan_import_export = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart_teus_perbulan_import_export = new Chart(barChart_Canvas_teus_perbulan_import_export, {
      type: 'bar',
      data: barChart_Data_teus_perbulan_import_export,
      options: barChart_Options_teus_perbulan_import_export
    })

  })
</script>