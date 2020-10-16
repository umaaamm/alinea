<div class="page-header">
	<div class="row">
		<div class="col-lg-6">
			<h3>Treshold Plagiarism</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>/ltr/index.html">Home</a></li>
				<li class="breadcrumb-item">Forms  </li>
				<li class="breadcrumb-item active">Plagiarism</li>
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
					<h5>Data Treshold Plagiarism</h5>
					Dibawah ini adalah data Treshold untuk pembatasan nilai Plagiarism makalah yang telah diupload.
				</div>
				<div class="table-responsive">
					<table class="table table-border-horizontal">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Treshold Direktorat</th>
								<th scope="col">Treshold Divisi</th>
								<th scope="col">Treshold Area</th>
								<th scope="col">Treshold Wilayah</th>
								<th scope="col">Treshold Nasional</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<?php $a=1;
						foreach ($listTreshold as $key) {
							?>
							<tbody>
								<form method="POST" action="<?php echo base_url();?>SuperAdmin/EditTreshold">
									<input type="text" name="id_treshold" value="<?php echo $key['id_treshold'];?>" hidden>
									<tr>
										<th scope="row"><?php echo $a;?></th>
										<td><input class="form-control" id="treshold_direktorat" type="text" placeholder="Treshold Makalah Direktorat" name="treshold_direktorat" required="Treshold Makalah Direktorat Tidak Boleh Kosong" value="<?php echo $key['treshold_direktorat'];?>" disabled></td>
										<td><input class="form-control" id="treshold_divisi" type="text" placeholder="Treshold Makalah Divisi" name="treshold_divisi" required="Treshold Makalah Divisi Tidak Boleh Kosong" value="<?php echo $key['treshold_divisi'];?>" disabled></td></td>
										<td><input class="form-control" id="treshold_area" type="text" placeholder="Treshold Makalah Area" name="treshold_area" required="Treshold Makalah Area Tidak Boleh Kosong" value="<?php echo $key['treshold_area'];?>" disabled></td>
										<td><input class="form-control" id="treshold_wilayah" type="text" placeholder="Treshold Makalah Wilayah" name="treshold_wilayah" required="Treshold Makalah Wilayah Tidak Boleh Kosong" value="<?php echo $key['treshold_wilayah'];?>" disabled></td>
										<td><input class="form-control" id="treshold_nasional" type="text" placeholder="Treshold Makalah Nasional" name="treshold_nasional" required="Treshold Makalah Nasional Tidak Boleh Kosong" value="<?php echo $key['treshold_nasional'];?>" disabled></td>
										<td>
											<button class="btn btn-primary" type="button" data-original-title="Enable Edit Data" title="" onclick="ButtonEnable()">Enable Treshold</button> 
											<button class="btn btn-success" type="submit" data-original-title="Simpan Setelah diedit" title="" id="editData">Simpan</button>
										</td>
									</tr>
									<?php $a++; } ?>
								</form>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function ButtonEnable() {
		document.getElementById("treshold_direktorat").disabled = false;
		document.getElementById("treshold_area").disabled = false;
		document.getElementById("treshold_wilayah").disabled = false;
		document.getElementById("treshold_nasional").disabled = false;
		document.getElementById("treshold_divisi").disabled = false;
	}
</script>

