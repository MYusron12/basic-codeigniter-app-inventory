<div class="page-content">
<div class="page-body">
<div class="row">
<?php
echo form_open('barang/tampilDataEdit');
?>

<table class="table table-bordered">
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama_barang" class="form-control" value="<?= $dataEdit['nama_barang']; ?>"></td>
	</tr>
	<tr>
		<td>Stock</td>
		<td><input type="text" name="stok" class="form-control" value="<?= $dataEdit['stok']; ?>"></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><input type="text" name="status" class="form-control" value="<?= $dataEdit['status']; ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td>
		<input type="hidden" name="id_barang" value="<?= $dataEdit['id_barang']; ?>">
		<input type="submit" name="submit"></td>
	</tr>
</table>
</div>
</div>
</div>