<div class="page-content">
<div class="page-body">
<table class="table table-bordered">
	<tr>
		<td>Nama Barang</td>
		<td>Stok Awal</td>
		<td>Stok Masuk</td>
		<td>Stok Keluar</td>
		<td>Saldo</td>
	</tr>
<?php foreach($tampilListDataStok->result() as $data){ ?>
	<tr>
		<td><?php echo $data->nama_barang1; ?></td>
		<td><?php echo $data->stok1; ?></td>
		<td><?php echo $data->qty; ?></td>
		<td><?php echo $data->qty1; ?></td>
		<?php $s=$data->stok1; $m=$data->qty; $k=$data->qty1; $akh=($s+$m)-$k; ?>
		<td><?php echo $akh; ?></td>
	</tr>
<?php } ?>
</table>
</div>
</div>