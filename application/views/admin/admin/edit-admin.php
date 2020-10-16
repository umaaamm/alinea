<div class="page-header">
	<div class="row">
		<div class="col-lg-6">
			<h3>Edit Admin</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>/ltr/index.html">Home</a></li>
				<li class="breadcrumb-item">Forms  </li>
				<li class="breadcrumb-item active">Edit Admin</li>
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
					<h5>Form Edit Admin</h5>
					<span>Silahkan isi data sesuai dengan form yang telah disediakan.</span>
				</div>
				<div class="card-body">
					<form class="needs-validation" method="post" action="<?php echo base_url();?>Admin/EditDataAdmin">
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">Nama Admin</label>
								<input class="form-control" id="validationCustom01" value="<?php echo $data_edit[0]['nama'];?>" type="text" placeholder="Nama Admin" name="nama" required="Nama Admin Tidak Boleh Kosong">
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">Email</label>
								<input class="form-control" id="validationCustom01" type="email" value="<?php echo $data_edit[0]['email'];?>" placeholder="Email Admin" name="email" required="Email Admin Tidak Boleh Kosong">
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">Password</label>
								<input class="form-control" id="validationCustom01" type="text" value="<?php echo $data_edit[0]['password'];?>"  placeholder="Password Admin" name="password" required="Password Tidak Boleh Kosong">
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="exampleFormControlSelect9">Unit Kerja</label>
								<select class="form-control digits" name="unit_kerja" id="unitKerjaEdit">
									<option value="-">- Pilih Salah Satu -</option>
									<?php foreach($listUnitKerja as $row):?>
										<option <?php if($row->id_unit_kerja == $data_edit[0]['id_unit_kerja']){echo "selected"; } ?> value="<?php echo $row->id_unit_kerja;?>"><?php echo $row->nama_unit_kerja;?></option>
									<?php endforeach;?>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="exampleFormControlSelect9">Area/ Divisi</label>
								<select class="unitKerjaClassEdit form-control digits" name="area">
									<option value="-">- Pilih Salah Satu -</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="exampleFormControlSelect9">Role Admin</label>
								<select class="form-control digits" name="role_admin" id="exampleFormControlSelect9">
									<option value="-">- Pilih Salah Satu -</option>
									<option <?php if('1' == $data_edit[0]['role_admin']){echo "selected"; } ?> value="1">Admin Direktorat</option>
									<option <?php if('2' == $data_edit[0]['role_admin']){echo "selected"; } ?> value="2">Admin Area</option>
									<option <?php if('3' == $data_edit[0]['role_admin']){echo "selected"; } ?> value="3">Admin Wilayah</option>
									<option <?php if('4' == $data_edit[0]['role_admin']){echo "selected"; } ?> value="4">Admin Divisi</option>
									<option <?php if('5' == $data_edit[0]['role_admin']){echo "selected"; } ?> value="5">Admin Budaya Kerja</option>
								</select>
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Edit Data</button>
					</form>
				</div>
			</div>
		</div>
	<script src="<?php echo base_url();?>/assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#unitKerjaEdit').change(function(){
				var id=$(this).val();
				$.ajax({
					url : "<?php echo base_url();?>ControllerGeneral/getArea",
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
						$('.unitKerjaClassEdit').html(html);

					}
				});
			});
		});
	</script>