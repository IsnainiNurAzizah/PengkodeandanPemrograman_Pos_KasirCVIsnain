<?php 
	$id = $_GET['barang'];
	$hasil = $lihat -> barang_edit($id);
?>
<a href="index.php?page=barang" class="btn btn-primary mb-3"><i class="fa fa-angle-left"></i> Balik </a>
<h4>Details Item</h4>
<?php if(isset($_GET['success-stok'])){?>
<div class="alert alert-success">
	<p>Tambah Stock Success !</p>
</div>
<?php }?>
<?php if(isset($_GET['success'])){?>
<div class="alert alert-success">
	<p>Tambah Data Success !</p>
</div>
<?php }?>
<?php if(isset($_GET['remove'])){?>
<div class="alert alert-danger">
	<p>Delete Data Success !</p>
</div>
<?php }?>
<div class="card card-body">
	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<td>ID Item</td>
				<td><?php echo $hasil['id_barang'];?></td>
			</tr>
			<tr>
				<td>category</td>
				<td><?php echo $hasil['nama_kategori'];?></td>
			</tr>
			<tr>
				<td>Nama Item</td>
				<td><?php echo $hasil['nama_barang'];?></td>
			</tr>
			<tr>
				<td>Brand Item</td>
				<td><?php echo $hasil['merk'];?></td>
			</tr>
			<tr>
				<td>Purchase Price</td>
				<td><?php echo $hasil['harga_beli'];?></td>
			</tr>
			<tr>
				<td>Selling Price</td>
				<td><?php echo $hasil['harga_jual'];?></td>
			</tr>
			<tr>
				<td>Unit Item</td>
				<td><?php echo $hasil['satuan_barang'];?></td>
			</tr>
			<tr>
				<td>Stock</td>
				<td><?php echo $hasil['stok'];?></td>
			</tr>
			<tr>
				<td>Input Date</td>
				<td><?php echo $hasil['tgl_input'];?></td>
			</tr>
			<tr>
				<td>Update Date</td>
				<td><?php echo $hasil['tgl_update'];?></td>
			</tr>
		</table>
	</div>
</div>