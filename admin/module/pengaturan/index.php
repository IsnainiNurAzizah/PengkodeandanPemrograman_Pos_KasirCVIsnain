<h4>Store Settings</h4>
<br>
<?php if(isset($_GET['success'])){?>
<div class="alert alert-success">
	<p>Update Data Success !</p>
</div>
<?php }?>
<div class="card">
	<div class="card-body">
		<form method="post" action="fungsi/edit/edit.php?pengaturan=ubah">
			<div class="row">
				<div class="col-md 6">
					<div class="form-group">
						<label for="">Store Name</label>
						<input class="form-control" name="namatoko" value="<?php echo $toko['nama_toko'];?>"
									placeholder="Nama Toko">
					</div>
					<div class="form-group">
						<label for="">Address</label>
						<input class="form-control" name="alamat" value="<?php echo $toko['alamat_toko'];?>"
									placeholder="Alamat Toko">
					</div>
				</div>
				<div class="col-md 6">
					<div class="form-group">
						<label for="">Contact (Telp)</label>
						<input class="form-control" name="kontak" value="<?php echo $toko['tlp'];?>"
									placeholder="Kontak (Hp)">
					</div>
					<div class="form-group">
						<label for="">Store Owner</label>
						<input class="form-control" name="pemilik" value="<?php echo $toko['nama_pemilik'];?>"
									placeholder="Nama Pemilik Toko">
					</div>
				</div>
			</div>
			<button id="tombol-simpan" class="btn btn-primary"><i class="fas fa-edit"></i> Update Data</button>
		</form>
	</div>
</div>