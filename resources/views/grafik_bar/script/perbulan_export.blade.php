<?php 

  $koneksi = mysqli_connect("localhost","root","","pelindo_grafik_bar_bongkarmuat_LM");

// perbulan_export
  $perbulan_export_2020  = mysqli_query($koneksi, "SELECT bulan, (ef20+ef40+ef45+ee20+ee40+ee45) FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $perbulan_export_2021  = mysqli_query($koneksi, "SELECT bulan, (ef20+ef40+ef45+ee20+ee40+ee45) FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_perbulan_export      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

 ?>
 
<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {

    var areaChartCanvas = $('#perbulan_export').get(0).getContext('2d')
    var areaChartData_perbulan_export = {
      labels  : [
          <?php 
            while ($p = mysqli_fetch_array($Bulan_perbulan_export)) { echo '"' . $p['Bulan'] . '",';}
          ?>
      ],
      datasets: [
        {
          label               : '2021',
          backgroundColor     : 'rgba(60,141,188,0.9)',

          data                : 
            [
              <?php 
                while ($data = mysqli_fetch_array($perbulan_export_2021)) 
                { 
                  echo '"' . $data['(ef20+ef40+ef45+ee20+ee40+ee45)'] . '",';
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
                while ($data = mysqli_fetch_array($perbulan_export_2020)) 
                { 
                  echo '"' . $data['(ef20+ef40+ef45+ee20+ee40+ee45)'] . '",';
                }
              ?>
            ]
        },
      ]
    }

    //-------------
    //- BAR CHART -  - CHART Ships Call -
    //-------------
    var barChart_Canvas_perbulan_export = $('#barChart_perbulan_export').get(0).getContext('2d')
    var barChart_Data_perbulan_export = $.extend(true, {}, areaChartData_perbulan_export)
    var temp0 = areaChartData_perbulan_export.datasets[0]
    var temp1 = areaChartData_perbulan_export.datasets[1]
    barChart_Data_perbulan_export.datasets[0] = temp1
    barChart_Data_perbulan_export.datasets[1] = temp0

    var barChart_Options_perbulan_export = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart_perbulan_export = new Chart(barChart_Canvas_perbulan_export, {
      type: 'bar',
      data: barChart_Data_perbulan_export,
      options: barChart_Options_perbulan_export
    })

  })
</script>