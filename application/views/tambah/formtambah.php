<?php 
$info=$this->session->flashdata('info');
if(!empty($info))
{
	echo $info;
}
?>

<form class="form-horizontal" method="POST" action="<?= base_url(); ?>index.php/Welcome/simpan">
	<div class="control-group">
		<label class="control-label">Nama</label>
		<div for="nama" class-controls>
			<input type="text" name="nama" id="nama" class="span1" value="<?= $nama; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Kelas</label>
		<div for="kelas" class-controls>
			<input type="text" name="kelas" id="kelas" class="span1" value="<?= $kelas;?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Angkatan</label>
		<div for="angkatan" class-controls>
			<input type="text" name="angkatan" id="angkatan" class="span1" value="<?= $angkatan;?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Fakultas</label>
		<div for="fakultas" class-controls>
			<input type="text" name="fakultas" id="fakultas" class="span1" value="<?= $fakultas?>">
		</div>
	</div>

	<p>
		<div>
			&nbsp; &nbsp; &nbsp; &nbsp; 
			<button type="submit" class="btn btn-primary btn-small">Simpan</button>
			<a href="<?= base_url();?>index.php/Welcome" class="btn btn-primary btn-small">Tutup</a>
		</div>
	</p>
</form>