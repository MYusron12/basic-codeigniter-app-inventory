<div class="page-content">
<div class="page-body">
<div class="row">
<table class="table table-bordered">
	<tr>
		<td>Nama Barang</td>
		<td>Qty</td>
		<td>Status</td>
		<td colspan="2">Action</td>
	</tr>
	<?php foreach ($tampilListDataBarang->result() as $tampil) { ?>
	<tr>
		<td><?= $tampil->nama_barang; ?></td>
		<td><?= $tampil->stok; ?></td>
		<td><?= $tampil->status; ?></td>
		<td><a href="<?= base_url(); ?>barang/tampilDataEdit/<?= $tampil->id_barang; ?>">Edit</a></td>
		<td><a href="<?= base_url(); ?>barang/hapusData/<?= $tampil->id_barang; ?>">Hapus</a></td>
	</tr>
	
	<?php } ?>

</table>
</div>
</div>
</div>