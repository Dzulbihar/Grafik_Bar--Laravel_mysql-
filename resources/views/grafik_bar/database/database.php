<?php 

  $koneksi = mysqli_connect("localhost","root","","grafik_tpks");


// shipcall
  $shipcall_2020  = mysqli_query($koneksi, "SELECT shipcall FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $shipcall_2021  = mysqli_query($koneksi, "SELECT shipcall FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_shipcall      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' order by ID asc");

// gt
  $gt_2020  = mysqli_query($koneksi, "SELECT gt FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $gt_2021  = mysqli_query($koneksi, "SELECT gt FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_gt      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// if20
  $if20_2020  = mysqli_query($koneksi, "SELECT if20 FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $if20_2021  = mysqli_query($koneksi, "SELECT if20 FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_if20      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// if40
  $if40_2020  = mysqli_query($koneksi, "SELECT if40 FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $if40_2021  = mysqli_query($koneksi, "SELECT if40 FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_if40      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// if45
  $if45_2020  = mysqli_query($koneksi, "SELECT if45 FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $if45_2021  = mysqli_query($koneksi, "SELECT if45 FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_if45      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// ie20
  $ie20_2020  = mysqli_query($koneksi, "SELECT ie20 FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $ie20_2021  = mysqli_query($koneksi, "SELECT ie20 FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_ie20      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// ie40
  $ie40_2020  = mysqli_query($koneksi, "SELECT ie40 FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $ie40_2021  = mysqli_query($koneksi, "SELECT ie40 FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_ie40      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// ie45
  $ie45_2020  = mysqli_query($koneksi, "SELECT ie45 FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $ie45_2021  = mysqli_query($koneksi, "SELECT ie45 FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_ie45      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// ef20
  $ef20_2020  = mysqli_query($koneksi, "SELECT ef20 FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $ef20_2021  = mysqli_query($koneksi, "SELECT ef20 FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_ef20      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// ef40
  $ef40_2020  = mysqli_query($koneksi, "SELECT ef40 FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $ef40_2021  = mysqli_query($koneksi, "SELECT ef40 FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_ef40      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// ef45
  $ef45_2020  = mysqli_query($koneksi, "SELECT ef45 FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $ef45_2021  = mysqli_query($koneksi, "SELECT ef45 FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_ef45      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// ee20
  $ee20_2020  = mysqli_query($koneksi, "SELECT ee20 FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $ee20_2021  = mysqli_query($koneksi, "SELECT ee20 FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_ee20      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// ee40
  $ee40_2020  = mysqli_query($koneksi, "SELECT ee40 FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $ee40_2021  = mysqli_query($koneksi, "SELECT ee40 FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_ee40      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// ee45
  $ee45_2020  = mysqli_query($koneksi, "SELECT ee45 FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $ee45_2021  = mysqli_query($koneksi, "SELECT ee45 FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_ee45      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

////////////////////////////////////////////////////////////
// perbulan_import
  $perbulan_import_2020  = mysqli_query($koneksi, "SELECT bulan, (if20+if40+if45+ie20+ie40+ie45) FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $perbulan_import_2021  = mysqli_query($koneksi, "SELECT bulan, (if20+if40+if45+ie20+ie40+ie45) FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_perbulan_import      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// perbulan_export
  $perbulan_export_2020  = mysqli_query($koneksi, "SELECT bulan, (ef20+ef40+ef45+ee20+ee40+ee45) FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $perbulan_export_2021  = mysqli_query($koneksi, "SELECT bulan, (ef20+ef40+ef45+ee20+ee40+ee45) FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_perbulan_export      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// perbulan_import_export
  $perbulan_import_export_2020  = mysqli_query($koneksi, "SELECT bulan, (if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $perbulan_import_export_2021  = mysqli_query($koneksi, "SELECT bulan, (if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_perbulan_import_export      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
///////////////////////////////////////////////

//////////////////////// triwulan_import
  $triwulan_import_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4
    "                
  );

  $triwulan_import_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4
    "                
  );


//////////////////////// triwulan_export
  $triwulan_export_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4
    "                
  );

  $triwulan_export_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4
    "                
  );


//////////////////////// triwulan_import_export
  $triwulan_import_export_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4
    "                
  );

  $triwulan_import_export_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4
    "                
  );



//////////////////////// semester_import
  $semester_import_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2
    "                
  );

  $semester_import_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2
    "                
  );



//////////////////////// semester_export
  $semester_export_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2
    "                
  );

  $semester_export_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2
    "                
  );


//////////////////////// semester_import_export
  $semester_import_export_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2
    "                
  );

  $semester_import_export_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2
    "                
  );


//////////////////////// pertahun_import
  $pertahun_import_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun
    "                
  );

  $pertahun_import_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun
    "                
  );



//////////////////////// pertahun_export
  $pertahun_export_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun
    "                
  );

  $pertahun_export_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun
    "                
  );


//////////////////////// pertahun_import_export
  $pertahun_import_export_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun
    "                
  );

  $pertahun_import_export_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun
    "                
  );


 ?>






<?php 


// perbulan_import
  $teus_perbulan_import_2020  = mysqli_query($koneksi, "SELECT if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45 as teus FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $teus_perbulan_import_2021  = mysqli_query($koneksi, "SELECT if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45 as teus FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $teus_Bulan_perbulan_import      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// perbulan_export
  $teus_perbulan_export_2020  = mysqli_query($koneksi, "SELECT ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45 as teus FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $teus_perbulan_export_2021  = mysqli_query($koneksi, "SELECT ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45 as teus FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $teus_Bulan_perbulan_export      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// perbulan_import_export
  $teus_perbulan_import_export_2020  = mysqli_query($koneksi, "SELECT if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45 as teus FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $teus_perbulan_import_export_2021  = mysqli_query($koneksi, "SELECT if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45 as teus FROM tbl_arus where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $teus_Bulan_perbulan_import_export      = mysqli_query($koneksi, "SELECT Bulan FROM tbl_arus where Tahun='2020' and Lokasi='Internasional' order by ID asc");
///////////////////////////////////////////////


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


//////////////////////// triwulan_export
  $teus_triwulan_export_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4
    "                
  );

  $teus_triwulan_export_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4
    "                
  );


//////////////////////// triwulan_import_export
  $teus_triwulan_import_export_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4
    "                
  );

  $teus_triwulan_import_export_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4
    "                
  );


//////////////////////// semester_import
  $teus_semester_import_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2
    "                
  );

  $teus_semester_import_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2
    "                
  );



//////////////////////// semester_export
  $teus_semester_export_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2
    "                
  );

  $teus_semester_export_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2
    "                
  );


//////////////////////// semester_import_export
  $teus_semester_import_export_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2
    "                
  );

  $teus_semester_import_export_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2
    "                
  );


//////////////////////// pertahun_import
  $teus_pertahun_import_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun
    "                
  );

  $teus_pertahun_import_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun
    "                
  );



//////////////////////// pertahun_export
  $teus_pertahun_export_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun
    "                
  );

  $teus_pertahun_export_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun
    "                
  );


//////////////////////// pertahun_import_export
  $teus_pertahun_import_export_2020  = mysqli_query($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun
    "                
  );

  $teus_pertahun_import_export_2021  = mysqli_query($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from tbl_arus where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun
    "                
  );


?>