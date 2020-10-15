<div class="page-header">
	<div class="row">
		<div class="col-lg-6">
			<h3>Upload Proposal</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>/ltr/index.html">Home</a></li>
				<li class="breadcrumb-item">Forms  </li>
				<li class="breadcrumb-item active">Upload Proposal</li>
			</ol>
		</div>
		<div class="col-lg-6">
			<!-- Bookmark Start-->
			<div class="bookmark pull-right">
				<ul>
					<li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
					<li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
					<li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
					<li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
						<form class="form-inline search-form">
							<div class="form-group form-control-search">
								<input type="text" placeholder="Search..">
							</div>
						</form>
					</li>
				</ul>
			</div>
			<!-- Bookmark Ends-->
		</div>
	</div>
</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<?php echo $this->session->flashdata('notif');?>
			<div class="card">
				<div class="card-header">
					<h5>Form Upload Proposal</h5>
					<span>Silahkan Upload Proposal sesuai dengan form yang telah disediakan.</span>
				</div>
				<div class="card-body">
					<form class="needs-validation" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>Karyawan/SimpanProposal">
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">Judul Proposal</label>
								<input class="form-control" id="validationCustom01" type="text" placeholder="Judul Proposal" name="judul_proposal" required="Judul Proposal Tidak Boleh Kosong">
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="exampleFormControlSelect9">Unit Kerja</label>
								<select class="form-control digits" name="unit_kerja" id="unitKerja">
									<option value="-">- Pilih Salah Satu -</option>
									<?php foreach($listUnitKerja as $row):?>
										<option value="<?php echo $row->id_unit_kerja;?>"><?php echo $row->nama_unit_kerja;?></option>
									<?php endforeach;?>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="exampleFormControlSelect9">Area/ Divisi</label>
								<select class="unitKerjaClass form-control digits" id="areaID" name="area">
									<option value="-">- Pilih Salah Satu -</option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="exampleFormControlSelect9">Cabang</label>
								<select class="cabangClass form-control digits" name="cabang">
									<option value="-">- Pilih Salah Satu -</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="exampleFormControlSelect9">Kategori PIA</label>
								<select class="form-control digits" name="kategori" id="exampleFormControlSelect9">
									<option value="-">- Pilih Salah Satu -</option>
									<?php foreach($listKategori as $row_k):?>
										<option value="<?php echo $row_k->id_kategori;?>"><?php echo $row_k->nama_kategori;?></option>
									<?php endforeach;?>
								</select>
							</div>
						</div>
						<div class="row">
							<label class="col-lg-12 control-label">Upload File</label>
							<div class="col-md-4 mb-3">
								<input class="input-file" type="file" required="" name="berkas">
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Upload Proposal</button>
					</form>
				</div>
			</div>
		</div>

		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Data File Anda</h5>
					Dibawah ini adalah data file makalah yang telah anda upload.
				</div>
				<div class="table-responsive">
					<table class="table table-border-horizontal">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Judul Proposal</th>
								<th scope="col">Nama File Proposal</th>
								<th scope="col">Kategori Proposal</th>
								<th scope="col">Nik Karyawan</th>
								<th scope="col">Unit Kerja</th>
								<th scope="col">Area/ Divisi</th>
								<th scope="col">Cabang</th>
								<th scope="col">Waktu Upload</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<?php $a=1;
						foreach ($dataListProposal as $key) {
							?>
							<tbody>
								<tr>
									<th scope="row"><?php echo $a;?></th>
									<td><?php echo $key['judul_proposal'];?></td>
									<td><?php echo $key['nama_file_proposal'];?></td>
									<td><?php echo $key['id_kategori'];?></td>
									<td><?php echo $key['id_karyawan'];?></td>
									<td><?php echo $key['id_unit_kerja'];?></td>
									<td><?php echo $key['id_area'];?></td>
									<td><?php echo $key['id_cabang'];?></td>
									<td><?php echo $key['waktu_upload'];?></td>
									<td>
										<button class="btn btn-danger" type="button" data-original-title="Hapus Proposal" title="" onclick="hapus('<?php echo $key['id_proposal']?>')"><i class="fa fa-trash-o"></i></button>
										<button class="btn btn-primary" type="button" data-original-title="Edit Proposal" data-toggle="modal" data-target="#editModal" title="" onclick="edit('<?php echo $key['id_proposal'];?>','<?php echo $key['judul_proposal'];?>','<?php echo $key['id_unit_kerja'];?>','<?php echo $key['id_area'];?>','<?php echo $key['id_cabang'];?>','<?php echo $key['id_kategori'];?>','<?php echo $key['nama_file_proposal'];?>')"><i class="fa fa-pencil"></i></button></td>							
									</tr>
									<?php $a++; } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="post" action="<?php echo base_url();?>SuperAdmin/EditDataJuri">
					<div class="modal-header">
						<h5 class="modal-title">Edit Data Juri</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					</div>
					<div class="modal-body">
						<input type="hidden" name="id_makalah" id="id" readonly>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">Judul Proposal</label>
								<input class="form-control" id="jdl_mkl" type="text" placeholder="Judul Proposal" name="judul_proposal" required="Judul Proposal Tidak Boleh Kosong">
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="exampleFormControlSelect9">Unit Kerja</label>
								<select class="form-control digits" name="unit_kerja" id="unitKerja">
									<option value="-">- Pilih Salah Satu -</option>
									<?php foreach($listUnitKerja as $row):?>
										<option value="<?php echo $row->id_unit_kerja;?>"><?php echo $row->nama_unit_kerja;?></option>
									<?php endforeach;?>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="exampleFormControlSelect9">Area/ Divisi</label>
								<select class="unitKerjaClass form-control digits" id="areaID" name="area">
									<option value="-">- Pilih Salah Satu -</option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="exampleFormControlSelect9">Cabang</label>
								<select class="cabangClass form-control digits" name="cabang" id="cabang">
									<option value="-">- Pilih Salah Satu -</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="exampleFormControlSelect9">Kategori PIA</label>
								<select class="form-control digits" name="kategori" id="kategoriID">
									<option value="-">- Pilih Salah Satu -</option>
									<?php foreach($listKategori as $row_k):?>
										<option value="<?php echo $row_k->id_kategori;?>"><?php echo $row_k->nama_kategori;?></option>
									<?php endforeach;?>
								</select>
							</div>
						</div>
						<div class="row">
							<label class="col-lg-12 control-label">Upload File</label>
							<div class="col-md-4 mb-3">
								<input class="input-file" id="nmakalah" type="file" required="" name="berkas">
							</div>
						</div>


						<!-- 
						<div class="form-group">
							<label for="validationCustom01">Nama Juri</label>
							<input class="form-control" id="nm" type="text" placeholder="Nama Juri" name="nama_juri" required="Nama Juri Tidak Boleh Kosong">
						</div>
						<div class="form-group">
							
							<label for="validationCustom01">Tahun Menjadi Juri</label>
							<input class="form-control digits" type="month" name="tahun" id="tahun" data-original-title="" title="">
						</div>
						<div class="form-group">
							<label for="validationCustom01">Email</label>
							<input class="form-control" id="email" type="email" placeholder="Email Juri" name="email" required="Email Juri Tidak Boleh Kosong">
						</div>
						<div class="form-group">
							<label for="validationCustom01">Password</label>
							<input class="form-control" id="pwd" type="text" placeholder="Password Juri" name="password" required="Password Tidak Boleh Kosong">
						</div> -->
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
						<button class="btn btn-primary" type="submit">Simpan Perubahan</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url();?>/assets/js/jquery-3.5.1.min.js"></script>

	<script type="text/javascript">

		function hapus($id_proposal){
			document.location='<?php echo base_url(); ?>ControllerKaryawan/HapusMakalah/'+$id_proposal;
		}

		function edit(id,jdl_mkl,unitKerja,areaID,cabang,kategoriID,nama_file_makalah){
			$('#id').val(id);
			$('#jdl_mkl').val(jdl_mkl);
			$('#unitKerja').val(unitKerja);
			$('#areaID').val(areaID);
			$('#cabang').val(cabang);
			$('#kategoriID').val(kategoriID);
			$('#nmakalah').val(nama_file_makalah);
		}

		$(document).ready(function(){
			$('#unitKerja').change(function(){
				var id=$(this).val();
				$.ajax({
					url : "<?php echo base_url();?>ControllerKaryawan/getArea",
					method : "POST",
					data : {id: id},
					async : false,
					dataType : 'json',
					success: function(data){
						var html = '';
						var i;
						for(i=0; i<data.length; i++){
							html += '<option value="'+data[i].id_area+'">'+data[i].nama_area+'</option>';
						}
						$('.unitKerjaClass').html(html);

					}
				});
			});
		});

		$(document).ready(function(){
			$('#areaID').change(function(){
				var id=$(this).val();
				$.ajax({
					url : "<?php echo base_url();?>ControllerKaryawan/getCabang",
					method : "POST",
					data : {id: id},
					async : false,
					dataType : 'json',
					success: function(data){
						var html = '';
						var i;
						for(i=0; i<data.length; i++){
							html += '<option value="'+data[i].id_cabang+'">'+data[i].nama_cabang+'</option>';
						}
						$('.cabangClass').html(html);

					}
				});
			});
		});
	</script>