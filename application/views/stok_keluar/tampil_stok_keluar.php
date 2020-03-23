<div class="page-content">
<div class="page-body">
<div class="row">
<table class="table table-bordered">
	<tr>
		<td>Nama Customer</td>
		<td>Nama Barang</td>
		<td>Qty</td>
		<td>Tanggal</td>
		<td colspan="2">Action</td>
	</tr>
	<?php foreach ($tampilListDataStokKeluar->result() as $tampil) { ?>
	<tr>
		<td><?= $tampil->nama_customer; ?></td>
		<td><?= $tampil->nama_barang; ?></td>
		<td><?= $tampil->qty; ?></td>
		<td><?= $tampil->tanggal; ?></td>
		<td><a href="<?= base_url(); ?>stok_keluar/tampilDataEdit/<?= $tampil->id_stok_keluar; ?>">Edit</a></td>
		<td><a href="<?= base_url(); ?>stok_keluar/hapusData/<?= $tampil->id_stok_keluar; ?>">Hapus</a></td>
	</tr>
	
	<?php } ?>

</table>
</div>
</div>
</div>