<div class="page-header">
	<div class="row">
		<div class="col-lg-6">
			<h3>Manajemen Admin</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>/ltr/index.html">Home</a></li>
				<li class="breadcrumb-item">Forms  </li>
				<li class="breadcrumb-item active">Manajemen Admin</li>
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
					<h5>Form Manajemen Admin</h5>
					<span>Silahkan isi data sesuai dengan form yang telah disediakan.</span>
				</div>
				<div class="card-body">
					<form class="needs-validation" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>Admin/SimpanAdmin">
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">Nama Admin</label>
								<input class="form-control" id="validationCustom01" type="text" placeholder="Nama Admin" name="nama" required="Nama Admin Tidak Boleh Kosong">
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">Email</label>
								<input class="form-control" id="validationCustom01" type="email" placeholder="Email Admin" name="email" required="Email Admin Tidak Boleh Kosong">
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">Password</label>
								<input class="form-control" id="validationCustom01" type="text" placeholder="Password Admin" name="password" required="Password Tidak Boleh Kosong">
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
								<select class="unitKerjaClass form-control digits" name="area">
									<option value="-">- Pilih Salah Satu -</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="exampleFormControlSelect9">Role Admin</label>
								<select class="form-control digits" name="role_admin" id="exampleFormControlSelect9">
									<option value="-">- Pilih Salah Satu -</option>
									<option value="1">Admin Direktorat</option>
									<option value="2">Admin Area</option>
									<option value="3">Admin Wilayah</option>
									<option value="4">Admin Divisi</option>
									<option value="5">Admin Budaya Kerja</option>
								</select>
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Simpan</button>
					</form>
				</div>
			</div>
		</div>

		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Data Admin</h5>
					Dibawah ini adalah data admin untuk Pegadaian Innovatioan Awards.
				</div>
				<div class="table-responsive">
					<table class="table table-border-horizontal">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nama Admin</th>
								<th scope="col">Email Admin</th>
								<th scope="col">Password</th>
								<th scope="col">Role Admin</th>
								<th scope="col">Unit Kerja</th>
								<th scope="col">Area/ Divisi</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<?php $a=1;
						foreach ($listAdmin as $key) {
							?>
							<tbody>
								<tr>
									<th scope="row"><?php echo $a;?></th>
									<td><?php echo $key['nama'];?></td>
									<td><?php echo $key['email'];?></td>
									<td><?php echo md5($key['password']);?></td>
									
									<?php if ($key['role_admin'] === '1') { ?>
										<td>Admin Direktorat</td>
									<?php } ?>	
									<?php if ($key['role_admin'] === '2') { ?>
										<td>Admin Area</td>
									<?php } ?>	
									<?php if ($key['role_admin'] === '3') { ?>
										<td>Admin Wilayah</td>
									<?php } ?>	
									<?php if ($key['role_admin'] === '4') { ?>
										<td>Admin Divisi</td>
									<?php } ?>	
									<?php if ($key['role_admin'] === '5') { ?>
										<td>Admin Budaya Kerja</td>
									<?php } ?>	

									<td><?php echo $key['nama_unit_kerja'];?></td>
									<td><?php echo $key['nama_area'];?></td>
									<td><button class="btn btn-primary" type="button" data-original-title="Edit Data Admin" title=""data-toggle="modal" data-target="#editModal" onclick="edit('<?php echo $key["id_admin"]; ?>','<?php echo $key["nama"]; ?>','<?php echo $key["email"]; ?>','<?php echo $key["password"]; ?>','<?php echo $key["role_admin"]; ?>','<?php echo $key["id_unit_kerja"]; ?>','<?php echo $key["id_area"]; ?>')">Edit</button>
										<button class="btn btn-danger" type="button" data-original-title="Hapus Data Admin" title="" onclick="hapus(<?php echo $key['id_admin'];?>)">Hapus</button>
									</td>
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
			<form method="post" action="<?php echo base_url();?>Admin/EditDataAdmin">
				<div class="modal-header">
					<h5 class="modal-title">Edit Data Admin</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				</div>
				<div class="modal-body">
					<input type="hidden" name="id_admin" id="id" readonly>
					<div class="form-group">
						<label for="validationCustom01">Nama Admin</label>
						<input class="form-control" id="nm" type="text" placeholder="Nama Admin" name="nama" required="Nama Admin Tidak Boleh Kosong">
					</div>

					<div class="form-group">
						<label for="validationCustom01">Email</label>
						<input class="form-control" id="email" type="email" placeholder="Email Admin" name="email" required="Email Admin Tidak Boleh Kosong">
					</div>
					<div class="form-group">
						<label for="validationCustom01">Password</label>
						<input class="form-control" id="pwd" type="text" placeholder="Password Admin" name="password" required="Password Tidak Boleh Kosong">
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect9">Role Admin</label>
						<select class="form-control digits" name="role_admin" id="role_admin">
							<option value="-">- Pilih Salah Satu -</option>
							<option value="1">Admin Direktorat</option>
							<option value="2">Admin Area</option>
							<option value="3">Admin Wilayah</option>
							<option value="4">Admin Divisi</option>
							<option value="5">Admin Budaya Kerja</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect9">Unit Kerja</label>
						<select class="form-control digits" name="unit_kerja" id="unitKerjaPop">
							<option value="-">- Pilih Salah Satu -</option>
							<?php foreach($listUnitKerja as $row):?>
								<option value="<?php echo $row->id_unit_kerja;?>"><?php echo $row->nama_unit_kerja;?></option>
							<?php endforeach;?>
						</select>
					</div>

					<div class="form-group">
						<label for="exampleFormControlSelect9">Area/ Divisi</label>
						<select class="unitKerjaClassPop form-control digits" id="areaPop" name="area">
							<option value="-">- Pilih Salah Satu -</option>
									</select>
								</div>
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
				var selectedIdUnitKerja = "";
				var selectedIdArea = "";

				function hapus($id_admin){
					document.location='<?php echo base_url(); ?>ControllerSuperAdmin/HapusDataAdmin/'+$id_admin;
				}

				function edit(id,nama,email,password,role_admin,id_unit_kerja,id_area){
					$('#id').val(id);
					$('#nm').val(nama);
					$('#email').val(email);
					$('#pwd').val(password);
					$('#role_admin').val(role_admin);
					$('#unitKerjaPop').val(id_unit_kerja);
					$('#unitKerjaPop').trigger('change');
					selectedIdUnitKerja = id_unit_kerja;
					selectedIdArea = id_area;
				}

				$(function(){
					$("#datepicker").datepicker({
						format: 'yyyy-mm-dd',
						autoclose: true,
						todayHighlight: true,
					});
				});	

				$(document).ready(function(){
					$('#unitKerja').change(function(){
						var id=$(this).val();
						$.ajax({
							url : "<?php echo base_url();?>ControllerGeneral/getArea",
							method : "POST",
							data : {id: id},
							async : true,
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
					$('#unitKerjaPop').change(function(){
						var id=$(this).val();
						$.ajax({
							url : "<?php echo base_url();?>ControllerGeneral/getArea",
							method : "POST",
							data : {id: id},
							async : true,
							dataType : 'json',
							success: function(data){
								var html = '';
								var i;
								for(i=0; i<data.length; i++){
									html += '<option value="'+data[i].id_area+'" '+ (data[i].id_area == selectedIdArea ? 'selected' : '') +'>'+data[i].nama_area+'</option>';
								}
								$('.unitKerjaClassPop').html(html);

							}
						});
					});
				});
			</script>