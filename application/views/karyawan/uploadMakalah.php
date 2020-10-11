<div class="page-header">
	<div class="row">
		<div class="col-lg-6">
			<h3>Upload Makalah</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>/ltr/index.html">Home</a></li>
				<li class="breadcrumb-item">Forms  </li>
				<li class="breadcrumb-item active">Upload Makalah</li>
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
					<h5>Form Upload Makalah</h5>
					<span>Silahkan Upload Makalah sesuai dengan form yang telah disediakan.</span>
				</div>
				<div class="card-body">
					<form class="needs-validation" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>Karyawan/Upload">
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">Judul Makalah</label>
								<input class="form-control" id="validationCustom01" type="text" placeholder="Judul Makalah" name="judul_makalah" required="Judul Makalah Tidak Boleh Kosong">
							</div>
						</div>
						<div class="row">
							<label class="col-lg-12 control-label">Upload File</label>
							<div class="col-md-4 mb-3">
								<input class="input-file" type="file" required="" name="berkas">
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Upload Makalah</button>
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
								<th scope="col">Judul Makalah</th>
								<th scope="col">Waktu Upload</th>
								<th scope="col">Id Karyawan</th>
								<th scope="col">Nama File Makalah</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<?php $a=1;
							foreach ($dataListMakalah as $key) {
						?>
						<tbody>
							<tr>
								<th scope="row"><?php echo $a;?></th>
								<td><?php echo $key['judul_makalah'];?></td>
								<td><?php echo $key['waktu_upload'];?></td>
								<td><?php echo $key['id_karyawan'];?></td>
								<td><?php echo $key['nama_file_makalah'];?></td>
								<td><button class="btn btn-primary" type="button" data-original-title="btn btn-primary" title="">Edit</button>
									<button class="btn btn-danger" type="button" data-original-title="btn btn-danger" title="">Hapus</button></td>							
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