<div class="page-header">
	<div class="row">
		<div class="col-lg-6">
			<h3>List Makalah</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>/ltr/index.html">Home</a></li>
				<li class="breadcrumb-item">Forms  </li>
				<li class="breadcrumb-item active">List Makalah</li>
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
					<h5>Data Makalah yang sudah terupload</h5>
					Dibawah ini adalah data file makalah yang telah diupload.
				</div>
				<div class="table-responsive">
					<table class="table table-border-horizontal">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Judul Makalah</th>
								<th scope="col">Nama File Makalah</th>
								<th scope="col">Kategori Makalah</th>
								<th scope="col">Nik Karyawan</th>
								<th scope="col">Unit Kerja</th>
								<th scope="col">Waktu Upload</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<?php $a=1;
						foreach ($listMakalahAll as $key) {
							?>
							<tbody>
								<tr>
									<th scope="row"><?php echo $a;?></th>
									<td><?php echo $key['judul_makalah'];?></td>
									<td><?php echo $key['nama_file_makalah'];?></td>
									<td><?php echo $key['nama_kategori'];?></td>
									<td><?php echo $key['id_karyawan'];?></td>
									<td><?php echo $key['nama_unit_kerja'];?> <br> <?php echo $key['nama_area'];?> - <?php echo $key['nama_cabang'];?>
								</td>
								<td><?php echo $key['waktu_upload'];?></td>
								<td><a href="<?=base_url('upload/'.$key['nama_file_makalah']);?>" class="btn btn-primary" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
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