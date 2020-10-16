<div class="page-header">
	<div class="row">
		<div class="col-lg-6">
			<h3>Manajemen Super Admin</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>/ltr/index.html">Home</a></li>
				<li class="breadcrumb-item">Forms  </li>
				<li class="breadcrumb-item active">Manajemen Super Admin</li>
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
					<h5>Form Manajemen Super Admin</h5>
					<span>Silahkan isi data sesuai dengan form yang telah disediakan.</span>
				</div>
				<div class="card-body">
					<form class="needs-validation" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>SuperAdmin/SimpanAdmin">
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">Nama Admin</label>
								<input class="form-control" id="validationCustom01" type="text" placeholder="Nama Super Admin" name="nama" required="Nama Super Admin Tidak Boleh Kosong">
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">Email</label>
								<input class="form-control" id="validationCustom01" type="email" placeholder="Email Super Admin" name="email" required="Email Super Admin Tidak Boleh Kosong">
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">Password</label>
								<input class="form-control" id="validationCustom01" type="text" placeholder="Password Super Admin" name="password" required="Password Tidak Boleh Kosong">
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
					<h5>Data Super Admin</h5>
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
								<th scope="col">Action</th>
							</tr>
						</thead>
						<?php $a=1;
						foreach ($listSuperAdmin as $key) {
							?>
							<tbody>
								<tr>
									<th scope="row"><?php echo $a;?></th>
									<td><?php echo $key['nama'];?></td>
									<td><?php echo $key['email'];?></td>
									<td><?php echo md5($key['password']);?></td>
									<td><button class="btn btn-primary" type="button" data-original-title="Edit Data Admin" title="" data-toggle="modal" data-target="#editModal" onclick="edit('<?php echo $key["id_super_admin"]; ?>','<?php echo $key["nama"]; ?>','<?php echo $key["email"]; ?>','<?php echo $key["password"]; ?>')">Edit</button>
										<button class="btn btn-danger" type="button" data-original-title="Hapus Data Admin" title="" onclick="hapus(<?php echo $key['id_super_admin'];?>)">Hapus</button></td>
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
				<form method="post" action="<?php echo base_url();?>SuperAdmin/EditDataAdmin">
					<div class="modal-header">
						<h5 class="modal-title">Edit Data Admin</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					</div>
					<div class="modal-body">
						<input type="hidden" name="id_super_admin" id="id" readonly>
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
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
						<button class="btn btn-primary" type="submit">Simpan Perubahan</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function hapus($id_super_admin){
			document.location='<?php echo base_url(); ?>ControllerSuperAdmin/HapusDataSuperAdmin/'+$id_super_admin;
		}

		function edit(id,nama,email,password,role_admin){
			$('#id').val(id);
			$('#nm').val(nama);
			$('#email').val(email);
			$('#pwd').val(password);
		}
		$(function(){
			$("#datepicker").datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true,
				todayHighlight: true,
			});
		});
	</script>