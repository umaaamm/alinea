<div class="page-header">
	<div class="row">
		<div class="col-lg-6">
			<h3>Hasil Plagiarism Proposal</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>/ltr/index.html">Home</a></li>
				<li class="breadcrumb-item">Forms  </li>
				<li class="breadcrumb-item active">Hasil Plagiarism Proposal</li>
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
						<h5>Data File Plagiarism</h5>
						Dibawah ini adalah hasil dari check plagiatrism Proposal peserta, <b>Silahkan klik refresh pada baris makalah anda.</b>
					</div>
					<div class="table-responsive">
						<table class="table table-border-horizontal">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Judul Proposal</th>
									<th scope="col">Nama File Proposal</th>
									<th scope="col">Waktu Upload</th>
									<th scope="col">Status Cek Plagiat</th>
									<th scope="col">Hasil Plagiatrism</th>
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
										<td><?php echo $key['waktu_upload'];?></td>
										<td><?php echo $key['status_simirariti'];?></td>
										<td><?php echo $key['similarity'];?> %</td>
										<td><button class="btn btn-primary" type="button" data-original-title="Cek Status Plagiat" title="" onclick="hapus('<?php echo $key["id_proposal"]; ?>')">Refresh Hasil</button>
											<a href="<?=base_url('upload/'.$key['nama_file_proposal']);?>" class="btn btn-success" target="_blank">Show Pdf</a>

										</tr>
										<?php $a++; } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
		</div>
		<script type="text/javascript">
			function hapus($id_similarity){
				document.location='<?php echo base_url(); ?>ControllerSuperAdmin/checkPlagiatProposalSuperAdmin/'+$id_similarity;
			}
		</script>