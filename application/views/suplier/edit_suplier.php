<div class="page-content">
<div class="page-body">
<div class="row">
<?php
echo form_open('suplier/tampilDataEdit');
?>

<table class="table table-bordered">
	<tr>
		<td>Nama Suplier</td>
		<td><input type="text" name="nama_suplier" class="form-control" value="<?= $dataEdit['nama_suplier']; ?>"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" class="form-control" value="<?= $dataEdit['alamat']; ?>"></td>
	</tr>
	<tr>
		<td>No Telpon</td>
		<td><input type="text" name="no_telpon" class="form-control" value="<?= $dataEdit['no_telpon']; ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td>
		<input type="hidden" name="id_suplier" value="<?= $dataEdit['id_suplier']; ?>">
		<input type="submit" name="submit"></td>
	</tr>
	
</table>
</div>
</div>
</div>