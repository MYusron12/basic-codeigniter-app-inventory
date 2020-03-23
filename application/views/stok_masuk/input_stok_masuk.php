<div class="page-content">
<div class="page-body">
<div class="row">
<?php
echo form_open('stok_masuk/tambahDataStokMasuk');
?>

<table class="table table-bordered">
	<tr>
		<td>Nama Suplier</td>
		<td>
			<select name="nama_suplier">
			<option value="">Pilih Suplier</option>
			<?php foreach($suplier->result() as $tampil){ ?>
				<option value="<?= $tampil->id_suplier; ?>"><?= $tampil->nama_suplier; ?></option>
			<?php } ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Nama Barang</td>
		<td>
			<select name="nama_barang">
			<option value="">Pilih Barang</option>
			<?php foreach($barang->result() as $tampil){ ?>
				<option value="<?= $tampil->id_barang; ?>"><?= $tampil->nama_barang; ?></option>
			<?php } ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Qty</td>
		<td><input type="text" name="qty" class="form-control"></td>
	</tr>
	<tr>
		<td>Tanggal</td>
		<td><input type="text" name="tanggal" class="form-control"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit"></td>
	</tr>
	
</table>
</div>
</div>
</div>