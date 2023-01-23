

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>


<!-- DataTables  & Plugins -->
<script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


@include('grafik_bar.script.teus_pertahun_import')
@include('grafik_bar.script.teus_pertahun_export')
@include('grafik_bar.script.teus_pertahun_import_export')

@include('grafik_bar.script.teus_semester_import')
@include('grafik_bar.script.teus_semester_export')
@include('grafik_bar.script.teus_semester_import_export')

@include('grafik_bar.script.teus_triwulan_import')
@include('grafik_bar.script.teus_triwulan_export')
@include('grafik_bar.script.teus_triwulan_import_export')

@include('grafik_bar.script.teus_perbulan_import')
@include('grafik_bar.script.teus_perbulan_export')
@include('grafik_bar.script.teus_perbulan_import_export')

@include('grafik_bar.script.pertahun_import')
@include('grafik_bar.script.pertahun_export')
@include('grafik_bar.script.pertahun_import_export')

@include('grafik_bar.script.semester_import')
@include('grafik_bar.script.semester_export')
@include('grafik_bar.script.semester_import_export')

@include('grafik_bar.script.triwulan_import')
@include('grafik_bar.script.triwulan_export')
@include('grafik_bar.script.triwulan_import_export')

@include('grafik_bar.script.perbulan_import')
@include('grafik_bar.script.perbulan_export')
@include('grafik_bar.script.perbulan_import_export')

@include('grafik_bar.script.ships_call')
@include('grafik_bar.script.gt')
