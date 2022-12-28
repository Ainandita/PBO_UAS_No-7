<!DOCTYPE html>
<?php
	include 'koneksi.php';

	$id_brg = '';
	$kode = '';
	$nama_brg = '';
	$harga_brg = '';
	$stok_brg = '';

	if(isset($_GET['ubah'])){
		$id_brg = $_GET['ubah'];

		$query = "SELECT * FROM tbl_barang WHERE id_brg = '$id_brg';";
		$sql = mysqli_query($conn, $query);

		$result = mysqli_fetch_assoc($sql);

		$kode = $result['kode_brg'];
		$nama_brg = $result['nama_brg'];
		$harga_brg = $result['harga_brg'];
		$stok_brg = $result['stok_brg'];
	}
?>
 
<html>
<head>
	<meta charset="utf-8">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js" ></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	
	<title>UAS Ainandita</title>
</head>
<body>
	<nav class="navbar bg-primary" data-bs-theme="dark">
	  <div class="container-fluid">
	  	<span class="navbar-text">
	      TOKO MAKMUR PAK AHMAD
	    </span>
	  </div>
	</nav>
	<div class="container">
		<form method="POST" action="proses.php" enctype="multipart/form-data">
		<input type="hidden" value="<?php echo $id_brg; ?>" name="id_brg">

				<div class="mb-3 row mt-4">
			    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
			    <div class ="col-sm-10">
			      <input required type="text" name = "kode" class="form-control" id="kode" placeholder="ex: 112" value="<?php echo $kode; ?>">
			</div>
			<div class="mb-3 row mt-4">
			    <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
			    <div class ="col-sm-10">
			      <input required type="text" name = "nama_brg"class="form-control" id="nama" placeholder="ex: Tepung" value="<?php echo $nama_brg; ?>">
			</div>
			<div class="mb-3 row mt-4">
			    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
			    <div class ="col-sm-10">
			      <input required type="text" name = "harga_brg"class="form-control" id="harga" placeholder="ex: 10000" value="<?php echo $harga_brg; ?>">
			</div>
			<div class="mb-3 row mt-4">
			    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
			    <div class ="col-sm-10">
			      <input required type="text" name = "stok_brg"class="form-control" id="stok" placeholder="ex: 1" value="<?php echo $stok_brg; ?>">
			</div>

			<div class="mb-3 row mt-4">
				<div class="col">
					<?php
						if(isset($_GET['ubah'])){
					?>
						<button type="submit" name="aksi" value="edit" class="btn btn-primary">
							<i class="fa fa-floppy-o" aria-hidden="true"></i>
							Simpan Perubahan
						</button>
					<?php
						} else {
					?>
						<button type="submit" name="aksi" value="add" class="btn btn-primary">
							<i class="fa fa-floppy-o" aria-hidden="true"></i>
							Tambahkan
						</button>
					<?php
						}
					?>
					<a href="index.php" type="button" class="btn btn-danger">
						<i class="fa fa-reply" aria-hidden="true"></i>
						Batal
					</a>
				</div>
			</div>
		</form>
	</div>
</body>
</html> 
