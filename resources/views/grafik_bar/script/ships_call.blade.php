<?php 

  $koneksi = mysqli_connect("localhost","root","","pelindo_grafik_bar_bongkarmuat_LM");

// shipcall
  $shipcall_2020  = mysqli_query($koneksi, "SELECT shipcall FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $shipcall_2021  = mysqli_query($koneksi, "SELECT shipcall FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_shipcall      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' order by ID asc");

 ?>

 
<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {

    var areaChartCanvas = $('#shipscall').get(0).getContext('2d')
    var areaChartData_shipscall = {
      labels  : [
          <?php 
            while ($p = mysqli_fetch_array($Bulan_shipcall)) { echo '"' . $p['Bulan'] . '",';}
          ?>
      ],
      datasets: [
        {
          label               : '2021',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : 
            [
              <?php 
                while ($data = mysqli_fetch_array($shipcall_2021)) 
                { 
                  echo '"' . $data['shipcall'] . '",';
                }
              ?>
            ]
        },
        {
          label               : '2020',
          backgroundColor     : 'rgba(255, 147, 1, 0.8)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :
            [
              <?php 
                while ($data = mysqli_fetch_array($shipcall_2020)) 
                { 
                  echo '"' . $data['shipcall'] . '",';
                }
              ?>
            ]
        },
      ]
    }

    //-------------
    //- BAR CHART -  - CHART Ships Call -
    //-------------
    var barChart_Canvas_shipscall = $('#barChart_shipscall').get(0).getContext('2d')
    var barChart_Data_shipscall = $.extend(true, {}, areaChartData_shipscall)
    var temp0 = areaChartData_shipscall.datasets[0]
    var temp1 = areaChartData_shipscall.datasets[1]
    barChart_Data_shipscall.datasets[0] = temp1
    barChart_Data_shipscall.datasets[1] = temp0

    var barChart_Options_shipscall = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart_shipscall = new Chart(barChart_Canvas_shipscall, {
      type: 'bar',
      data: barChart_Data_shipscall,
      options: barChart_Options_shipscall
    })

  })
</script>