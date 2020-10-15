<div class="page-header">
	<div class="row">
		<div class="col-lg-6">
			<h3>Upload Resume</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>/ltr/index.html">Home</a></li>
				<li class="breadcrumb-item">Forms  </li>
				<li class="breadcrumb-item active">Upload Resume</li>
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
					<h5>Data Resume</h5>
					Dibawah ini adalah data file Resume yang telah diupload.
				</div>
				<div class="table-responsive">
					<table class="table table-border-horizontal">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Judul Resume</th>
								<th scope="col">Judul Makalah</th>
								<th scope="col">Nama File Resume</th>
								<th scope="col">Kategori Makalah</th>
								<th scope="col">Nik Karyawan</th>
								<th scope="col">Unit Kerja</th>
								<th scope="col">Waktu Upload</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<?php $a=1;
						foreach ($dataListResume as $key) {
							?>
							<tbody>
								<tr>
									<th scope="row"><?php echo $a;?></th>
									<td><?php echo $key['judul_makalah'];?></td>
									<td><?php echo $key['nama_file_makalah'];?></td>
									<td><?php echo $key['nama_file'];?></td>
									<td><?php echo $key['nama_kategori'];?></td>
									<td><?php echo $key['id_karyawan'];?></td>
									<td><?php echo $key['nama_unit_kerja'];?> <br> <?php echo $key['nama_area'];?> - <?php echo $key['nama_cabang'];?></td>
									<td><?php echo $key['waktu_upload'];?></td>
									<td>
										<a href="<?=base_url('upload/'.$key['nama_file']);?>" class="btn btn-primary btn-sm" target="_blank"><i class="fa fa-file-pdf-o"></i></a>
											<a href="<?=base_url('upload/'.$key['nama_file_makalah']);?>" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>							
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

	<script src="<?php echo base_url();?>/assets/js/jquery-3.5.1.min.js"></script>

	<script type="text/javascript">

		function hapus($id_resume_nasional){
			document.location='<?php echo base_url(); ?>ControllerKaryawan/HapusResume/'+$id_resume_nasional;
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