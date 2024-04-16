 <!--sidebar end-->

 <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
 <!--main content start-->
 <?php 
	$id = $_GET['barang'];
	$hasil = $lihat -> barang_edit($id);
?>
 <a href="index.php?page=barang" class="btn btn-primary mb-3"><i class="fa fa-angle-left"></i> Balik </a>
 <h4>Edit Item</h4>
 <?php if(isset($_GET['success'])){?>
 <div class="alert alert-success">
     <p>Edit Data Success !</p>
 </div>
 <?php }?>
 <?php if(isset($_GET['remove'])){?>
 <div class="alert alert-danger">
     <p>Hapus Data Success !</p>
 </div>
 <?php }?>
<div class="card card-body">
	<div class="table-responsive">
		<table class="table table-striped">
			<form action="fungsi/edit/edit.php?barang=edit" method="POST">
				<tr>
					<td>ID Item</td>
					<td><input type="text" readonly="readonly" class="form-control" value="<?php echo $hasil['id_Item'];?>"
							name="id"></td>
				</tr>
				<tr>
					<td>Category</td>
					<td>
						<select name="kategori" class="form-control">
							<option value="<?php echo $hasil['id_Category'];?>"><?php echo $hasil['nama_Category'];?></option>
							<option value="#">Option Category</option>
							<?php  $kat = $lihat -> category(); foreach($kat as $isi){ 	?>
							<option value="<?php echo $isi['id_Category'];?>"><?php echo $isi['nama_Category'];?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Nama Item</td>
					<td><input type="text" class="form-control" value="<?php echo $hasil['nama_Item'];?>" name="nama"></td>
				</tr>
				<tr>
					<td>Brand Item</td>
					<td><input type="text" class="form-control" value="<?php echo $hasil['merk'];?>" name="merk"></td>
				</tr>
				<tr>
					<td>Purchase Price</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['Purchase_Price'];?>" name="Purchase"></td>
				</tr>
				<tr>
					<td>Selling Price</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['Selling_Price'];?>" name="Selling"></td>
				</tr>
				<tr>
					<td>Item Unit</td>
					<td>
						<select name="satuan" class="form-control">
							<option value="<?php echo $hasil['Item_Unit'];?>"><?php echo $hasil['Item_Unit'];?>
							</option>
							<option value="#">Choose Unit</option>
							<option value="PCS">PCS</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Stock</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['stock'];?>" name="stock"></td>
				</tr>
				<tr>
					<td>Update Date</td>
					<td><input type="text" readonly="readonly" class="form-control" value="<?php echo  date("j F Y, G:i");?>"
							name="tgl"></td>
				</tr>
				<tr>
					<td></td>
					<td><button class="btn btn-primary"><i class="fa fa-edit"></i> Update Data</button></td>
				</tr>
			</form>
		</table>
	</div>
</div>