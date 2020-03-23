<div class="page-content">
<div class="page-body">
<div class="row">
<?php
echo form_open('suplier/tambahDataSuplier');
?>

<table class="table table-bordered">
	<tr>
		<td>Nama Suplier</td>
		<td><input type="text" name="nama_suplier" class="form-control"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" class="form-control"></td>
	</tr>
	<tr>
		<td>No Telpon</td>
		<td><input type="text" name="no_telpon" class="form-control"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit"></td>
	</tr>
	
</table>
</div>
</div>
</div>