@extends('layouts.app')

@section('content')




<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>ARUS BONGKAR MUAT PETIKEMAS</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
					<li class="breadcrumb-item active">ARUS</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">

				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							ARUS BONGKAR MUAT PETIKEMAS INTERNASIONAL 2020 & 2021
						</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Nomor</th>
									<th>Aksi</th>
									<th>Location</th>
									<th>Year</th>
									<th>Month</th>
									<th>Ships Call</th>
									<th>G.T (Tonage)</th>
									<th>Import Full Container 20</th>
									<th>Import Full Container 40</th>
									<th>Import Full Container 45</th>
									<th>Import Empty Container 20</th>
									<th>Import Empty Container 40</th>
									<th>Import Empty Container 45</th>
									<th>Export Full Container 20</th>
									<th>Export Full Container 40</th>
									<th>Export Full Container 45</th>
									<th>Export Empty Container 20</th>
									<th>Export Empty Container 40</th>
									<th>Export Empty Container 45</th>
								</tr>
							</thead>
							<tbody>
								<!-- Variabel php untuk nomor-->    
								<?php
								$nomer = 1;
								?>
								<!-- ambil data di database-->
								@foreach($Arus_Bongkar_Muat as $arus)
								<tr>
									<th>{{$nomer++}}</th>
									<td>
										<a href="{{url('data')}}/{{$arus->id}}/{{('edit')}}" class="btn btn-warning btn-sm">
											<i class="fas fa-pencil-alt"></i>
											Edit
										</a>
										<a href="{{url('data')}}/{{$arus->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">
											<i class="fas fa-trash"></i>
											Delete
										</a>
									</td>
									<td>{{$arus->Lokasi}}</td>
									<td>{{$arus->Tahun}}</td>
									<td>{{$arus->Bulan}}</td>
									<td>{{$arus->shipcall}}</td>
									<td>{{$arus->gt}}</td>

									<td>{{$arus->if20}}</td>
									<td>{{$arus->if40}}</td>
									<td>{{$arus->if45}}</td>

									<td>{{$arus->ie20}}</td>
									<td>{{$arus->ie40}}</td>
									<td>{{$arus->ie45}}</td>

									<td>{{$arus->ef20}}</td>
									<td>{{$arus->ef40}}</td>
									<td>{{$arus->ef45}}</td>

									<td>{{$arus->ee20}}</td>
									<td>{{$arus->ee40}}</td>
									<td>{{$arus->ee45}}</td>
								</tr>
								@endforeach 
							</tbody>

						</table>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
							Tambah Data
						</button>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</section>
<!-- /.content -->




<div class="modal fade" id="modal-lg">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title"> <b> Tambah Data Arus Bongkar Muat Petikemas </b> </h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form action="data/create" method="POST" enctype="multipart/form-data" >
					{{csrf_field()}}
					<div class="form-group row">
						<div class="col-md-6">
							<label> Tahun </label>
							<select name="Tahun" id="Tahun" class="form-control">
								<option selected> -- Pilih -- </option>
								<option value="2020"> 2020 </option>
								<option value="2021"> 2021 </option>
							</select>
						</div>
						<div class="col-md-6">
							<label> Bulan </label>
							<select name="Bulan" id="Bulan" class="form-control">
								<option selected> -- Pilih -- </option>
								<option value="Januari"> Januari </option>
								<option value="Februari"> Februari </option>
								<option value="Maret"> Maret </option>
								<option value="April"> April </option>
								<option value="Mei"> Mei </option>
								<option value="Juni"> Juni </option>
								<option value="Juli"> Juli </option>
								<option value="Agustus"> Agustus </option>
								<option value="September"> September </option>
								<option value="Oktober"> Oktober </option>
								<option value="November"> November </option>
								<option value="Desember"> Desember </option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-6">
							<label> Ships Call </label>
							<input type="number" name="shipcall" id="shipcall" class="form-control">
						</div>
						<div class="col-md-6">
							<label> G.T (Tonage) </label>
							<input type="number" name="gt" id="gt" class="form-control">
						</div>
					</div>

					<hr><hr>
					<h3 align="center"> <b> IMPORT CONTAINER </b> </h3>
					<hr><hr>

					<h5 align="center"> <b> Full Container </b> </h5>
					<hr>

					<div class="form-group row">
						<div class="col-md-4">
							<label>  20  </label>
							<input type="number" name="if20" id="if20" class="form-control">
						</div>
						<div class="col-md-4">
							<label>  40  </label>
							<input type="number" name="if40" id="if40" class="form-control">
						</div>
						<div class="col-md-4">
							<label>  45  </label>
							<input type="number" name="if45" id="if45" class="form-control">
						</div>
					</div>

					<hr>
					<h5 align="center"> <b> Empty Container </b> </h5>
					<hr>

					<div class="form-group row">
						<div class="col-md-4">
							<label>  20 </label>
							<input type="number" name="ie20" id="ie20" class="form-control">
						</div>
						<div class="col-md-4">
							<label>  40 </label>
							<input type="number" name="ie40" id="ie40" class="form-control">
						</div>
						<div class="col-md-4">
							<label>  45 </label>
							<input type="number" name="ie44" id="ie44" class="form-control">
						</div>
					</div>


					<hr><hr>
					<h3 align="center"> <b> EXPORT CONTAINER </b> </h3>
					<hr><hr>

					<h5 align="center"> <b> Full Container </b> </h5>
					<hr>

					<div class="form-group row">
						<div class="col-md-4">
							<label>  20  </label>
							<input type="number" name="ef20" id="ef20" class="form-control">
						</div>
						<div class="col-md-4">
							<label>  40  </label>
							<input type="number" name="ef40" id="ef40" class="form-control">
						</div>
						<div class="col-md-4">
							<label>  45  </label>
							<input type="number" name="ef45" id="ef45" class="form-control">
						</div>
					</div>

					<hr>
					<h5 align="center"> <b> Empty Container </b> </h5>
					<hr>

					<div class="form-group row">
						<div class="col-md-4">
							<label>  20 </label>
							<input type="number" name="ee20" id="ee20" class="form-control">
						</div>
						<div class="col-md-4">
							<label>  40 </label>
							<input type="number" name="ee40" id="ee40" class="form-control">
						</div>
						<div class="col-md-4">
							<label>  45 </label>
							<input type="number" name="ee45" id="ee45" class="form-control">
						</div>
					</div>

					<div class="form-group row">
						<!-- Tombol -->    
						<div class="col-md-12">
							<br>
							<button type="submit" class="btn btn-primary btn-sm">
								Simpan
							</button>
							<button type="button" class="btn btn-secondary btn-sm float-right" data-dismiss="modal">Tutup</button>
						</div>

					</form>  
				</div>

				<!-- EndFormulir __________________________________________________________________________________________ -->


			</div>

		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->




@endsection