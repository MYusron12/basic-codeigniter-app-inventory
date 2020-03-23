<div class="page-content">
<div class="page-body">
<div class="row">
<table class="table table-bordered">
	<tr>
		<td>Nama Suplier</td>
		<td>Alamat</td>
		<td>Nomer Telpon</td>
		<td colspan="2">Action</td>
	</tr>
	<?php foreach ($tampilListDataSuplier->result() as $tampil) { ?>
	<tr>
		<td><?= $tampil->nama_suplier; ?></td>
		<td><?= $tampil->alamat; ?></td>
		<td><?= $tampil->no_telpon; ?></td>
		<td><a href="<?= base_url(); ?>index.php/suplier/tampilDataEdit/<?= $tampil->id_suplier; ?>">Edit</a></td>
		<td><a href="<?= base_url(); ?>index.php/suplier/hapusData/<?= $tampil->id_suplier; ?>">Hapus</a></td>
	</tr>
	
	<?php } ?>

</table>
</div>
</div>
</div>