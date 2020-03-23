<div class="page-content">
<div class="page-body">
<div class="row">
<?php
echo form_open('stok_keluar/tampilDataEdit');
?>

<table class="table table-bordered">
	<tr>
		<td>Nama Customer</td>
		<td>
			<select name="nama_customer">
			<option value="<?= $dataEdit['id_customer']; ?>"><?= $dataEdit['nama_customer']; ?></option>
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
			<option value="<?= $dataEdit['id_barang']; ?>"><?= $dataEdit['nama_barang']; ?></option>
			<?php foreach($barang->result() as $tampil){ ?>
				<option value="<?= $tampil->id_barang; ?>"><?= $tampil->nama_barang; ?></option>
			<?php } ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Qty</td>
		<td><input type="text" name="qty" value="<?= $dataEdit['qty']; ?>" class="form-control"></td>
	</tr>
	<tr>
		<td>Tanggal</td>
		<td><input type="text" name="tanggal" value="<?= $dataEdit['tanggal']; ?>" class="form-control"></td>
	</tr>
	<tr>
		<td></td>
		<td>
		<input type="submit" name="submit">
		<input type="hidden" name="id_stok_keluar" value="<?= $dataEdit['id_stok_keluar']; ?>">
		</td>
	</tr>
	
</table>
</div>
</div>
</div>