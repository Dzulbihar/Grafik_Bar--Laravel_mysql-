
@extends('layouts.app')

@section('content')

<br>



<!-- Main content -->
<section class="content">
  <div class="row">

    <!-- Arus Bongkar -->
    <div class="col-md-12">
      <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">ARUS BONGKAR MUAT
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>

        <!-- form start -->
        <form action="{{ url('data') }}/{{$Arus_Bongkar_Muat->id}}/{{('update')}}" method="POST" enctype="multipart/form-data"  >
          {{csrf_field()}}

          <div class="card-body">
            <div class="form-group row">
              <div class="col-md-4">
                <label> Lokasi </label>
                <select id="Lokasi" class="form-control" id="Lokasi" name="Lokasi">
                  <option disabled>-- Pilih --</option>
                  <option value="Internasional" @if($Arus_Bongkar_Muat->Lokasi == 'Internasional') selected @endif> Internasional </option>
                  <option value="Domestik" @if($Arus_Bongkar_Muat->Lokasi == 'Domestik') selected @endif> Domestik </option>
                </select>
              </div>
              <div class="col-md-4">
                <label> Tahun </label>
                <select id="Tahun" class="form-control" id="Tahun" name="Tahun">
                  <option disabled>-- Pilih --</option>
                  <option value="2020" @if($Arus_Bongkar_Muat->Tahun == '2020') selected @endif> 2020 </option>
                  <option value="2021" @if($Arus_Bongkar_Muat->Tahun == '2021') selected @endif> 2021 </option>
                </select>
              </div>
              <div class="col-md-4">
                <label> Bulan </label>
                <select id="Bulan" class="form-control" id="Bulan" name="otl_yn">
                  <option disabled>-- Pilih --</option>
                  <option value="Januari" @if($Arus_Bongkar_Muat->Bulan == 'Januari') selected @endif> Januari </option>
                  <option value="Februari" @if($Arus_Bongkar_Muat->Bulan == 'Februari') selected @endif> Februari </option>
                  <option value="Maret" @if($Arus_Bongkar_Muat->Bulan == 'Maret') selected @endif> Maret </option>
                  <option value="April" @if($Arus_Bongkar_Muat->Bulan == 'April') selected @endif> April </option>
                  <option value="Mei" @if($Arus_Bongkar_Muat->Bulan == 'Mei') selected @endif> Mei </option>
                  <option value="Juni" @if($Arus_Bongkar_Muat->Bulan == 'Juni') selected @endif> Juni </option>
                  <option value="Juli" @if($Arus_Bongkar_Muat->Bulan == 'Juli') selected @endif> Juli </option>
                  <option value="Agustus" @if($Arus_Bongkar_Muat->Bulan == 'Agustus') selected @endif> Agustus </option>
                  <option value="September" @if($Arus_Bongkar_Muat->Bulan == 'September') selected @endif> September </option>
                  <option value="Oktober" @if($Arus_Bongkar_Muat->Bulan == 'Oktober') selected @endif> Oktober </option>
                  <option value="November" @if($Arus_Bongkar_Muat->Bulan == 'November') selected @endif> November </option>
                  <option value="Desember" @if($Arus_Bongkar_Muat->Bulan == 'Desember') selected @endif> Desember </option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label> Ships Call </label>
                <input type="number" name="shipcall" id="shipcall"  class="form-control"  value="{{ $Arus_Bongkar_Muat->shipcall}}">
              </div>
              <div class="col-md-6">
                <label> G.T (Tonage) </label>
                <input type="number" name="gt" id="gt"  class="form-control"  value="{{ $Arus_Bongkar_Muat->gt}}">
              </div>
            </div>
          </div>

      </div>
    </div>

    <!-- IMPORT CONTAINER -->
    <div class="col-md-6">
      <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">IMPORT CONTAINER
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="card-body">
          <div class="form-group row">
            <div class="col-md-4">
              <label> Full Container 20 </label>
              <input type="number" name="if20" id="if20"  class="form-control"  value="{{ $Arus_Bongkar_Muat->if20}}">
            </div>
            <div class="col-md-4">
              <label> Full Container 40 </label>
              <input type="number" name="if40" id="if40"  class="form-control"  value="{{ $Arus_Bongkar_Muat->if40}}">
            </div>
            <div class="col-md-4">
              <label> Full Container 45 </label>
              <input type="number" name="if45" id="if45"  class="form-control"  value="{{ $Arus_Bongkar_Muat->if45}}">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label> Empty  Container 20 </label>
              <input type="number" name="ie20" id="ie20"  class="form-control"  value="{{ $Arus_Bongkar_Muat->ie20}}">
            </div>
            <div class="col-md-4">
              <label> Empty  Container 40 </label>
              <input type="number" name="ie40" id="ie40"  class="form-control"  value="{{ $Arus_Bongkar_Muat->ie40}}">
            </div>
            <div class="col-md-4">
              <label> Empty  Container 45 </label>
              <input type="number" name="ie45" id="ie45"  class="form-control"  value="{{ $Arus_Bongkar_Muat->ie45}}">
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- IMPORT CONTAINER -->
    <div class="col-md-6">
      <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">EXPORT  CONTAINER
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="card-body">
          <div class="form-group row">
            <div class="col-md-4">
              <label> Full Container 20 </label>
              <input type="number" name="ef20" id="ef20"  class="form-control"  value="{{ $Arus_Bongkar_Muat->ef20}}">
            </div>
            <div class="col-md-4">
              <label> Full Container 40 </label>
              <input type="number" name="ef40" id="ef40"  class="form-control"  value="{{ $Arus_Bongkar_Muat->ef40}}">
            </div>
            <div class="col-md-4">
              <label> Full Container 45 </label>
              <input type="number" name="ef45" id="ef45"  class="form-control"  value="{{ $Arus_Bongkar_Muat->ef45}}">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label> Empty  Container 20 </label>
              <input type="number" name="ee20" id="ee20"  class="form-control"  value="{{ $Arus_Bongkar_Muat->ee20}}">
            </div>
            <div class="col-md-4">
              <label> Empty  Container 40 </label>
              <input type="number" name="ee40" id="ee40"  class="form-control"  value="{{ $Arus_Bongkar_Muat->ee40}}">
            </div>
            <div class="col-md-4">
              <label> Empty  Container 45 </label>
              <input type="number" name="ee45" id="ee45"  class="form-control"  value="{{ $Arus_Bongkar_Muat->ee45}}">
            </div>
          </div>
        </div>
        
      </div>
    </div>

  </div>

    <div class="form-group row">
      <!-- Tombol -->    
      <div class="col-md-12">
        <br>
        <button type="submit" class="btn btn-primary btn-sm">
          Simpan
        </button>
        <a href="{{url('data')}}" class="btn btn-secondary btn-sm float-right">Tutup</a>
      </div>
    </div>
  </form>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->




@endsection