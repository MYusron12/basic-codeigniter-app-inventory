<div class="page-content">
<div class="page-body">
<div class="row">
<?php
echo form_open('barang/tambahDataBarang');
?>

<table class="table table-bordered">
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama_barang" class="form-control"></td>
	</tr>
	<tr>
		<td>Stock</td>
		<td><input type="text" name="stok" class="form-control"></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><input type="text" name="status" class="form-control"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit"></td>
	</tr>
</table>
</div>
</div>
</div>