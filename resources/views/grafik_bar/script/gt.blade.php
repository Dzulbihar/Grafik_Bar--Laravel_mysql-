<?php 

  $koneksi = mysqli_connect("localhost","root","","pelindo_grafik_bar_bongkarmuat_LM");

// gt
  $gt_2020  = mysqli_query($koneksi, "SELECT gt FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $gt_2021  = mysqli_query($koneksi, "SELECT gt FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_gt      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

 ?>

 
<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {

    var areaChartCanvas = $('#gt').get(0).getContext('2d')
    var areaChartData_gt = {
      labels  : [
          <?php 
            while ($p = mysqli_fetch_array($Bulan_gt)) { echo '"' . $p['Bulan'] . '",';}
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
                while ($data = mysqli_fetch_array($gt_2021)) 
                { 
                  echo '"' . $data['gt'] . '",';
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
                while ($data = mysqli_fetch_array($gt_2020)) 
                { 
                  echo '"' . $data['gt'] . '",';
                }
              ?>
            ]
        },
      ]
    }

    //-------------
    //- BAR CHART -  - CHART Ships Call -
    //-------------
    var barChart_Canvas_gt = $('#barChart_gt').get(0).getContext('2d')
    var barChart_Data_gt = $.extend(true, {}, areaChartData_gt)
    var temp0 = areaChartData_gt.datasets[0]
    var temp1 = areaChartData_gt.datasets[1]
    barChart_Data_gt.datasets[0] = temp1
    barChart_Data_gt.datasets[1] = temp0

    var barChart_Options_gt = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart_gt = new Chart(barChart_Canvas_gt, {
      type: 'bar',
      data: barChart_Data_gt,
      options: barChart_Options_gt
    })

  })
</script>