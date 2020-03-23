<div class="page-content">
<div class="page-body">
<div class="row">
<table class="table table-bordered">
	<tr>
		<td>Nama Suplier</td>
		<td>Nama Barang</td>
		<td>Qty</td>
		<td>Tanggal</td>
		<td colspan="2">Action</td>
	</tr>
	<?php foreach ($tampilListDataStokMasuk->result() as $tampil) { ?>
	<tr>
		<td><?= $tampil->nama_suplier; ?></td>
		<td><?= $tampil->nama_barang; ?></td>
		<td><?= $tampil->qty; ?></td>
		<td><?= $tampil->tanggal; ?></td>
		<td><a href="<?= base_url(); ?>stok_masuk/tampilDataEdit/<?= $tampil->id_stok_masuk; ?>">Edit</a></td>
		<td><a href="<?= base_url(); ?>stok_masuk/hapusData/<?= $tampil->id_stok_masuk; ?>">Hapus</a></td>
	</tr>
	
	<?php } ?>

</table>
</div>
</div>
</div>