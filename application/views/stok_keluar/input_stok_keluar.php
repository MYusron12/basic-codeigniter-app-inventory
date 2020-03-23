<div class="page-content">
<div class="page-body">
<div class="row">
<?php
echo form_open('stok_keluar/tambahDataStokKeluar');
?>

<table class="table table-bordered">
	<tr>
		<td>Nama Customer</td>
		<td>
			<select name="nama_customer">
			<option value="">Pilih Customer</option>
			<?php foreach($customer->result() as $tampil){ ?>
				<option value="<?= $tampil->id_customer; ?>"><?= $tampil->nama_customer; ?></option>
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