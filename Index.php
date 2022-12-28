<?php
	include 'koneksi.php';

	$query = "SELECT * FROM tbl_barang;";
	$sql = mysqli_query($conn, $query);
	$no = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js" ></script>

	<! -- Font Awesome -->
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


	<! -- JUDUL -->
	<div class="container-fluid">
		<h1 class="mt-3">Daftar Stok Barang</h1>
		<figure>	
			<blockquote class="blockquote">
				<p>Data yang tersimpan di database</p>
	  		</blockquote>
		</figure>
		<a href="kelola.php" type="button" class="btn btn-primary mb-3">
			<i class= "fa fa-plus"></i>
			Tambah Data
		</a>
		<div class="table-responsive">
			<table class="table align-middle table-bordered table-hover">
			    <thead> 
			      <tr>
			        <th><center>No.</center></th>
			        <th>Kode</th>
			        <th>Nama Barang</th>
			        <th>Harga</th>
			        <th>Stok</th>
			        <th>Edit</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	while($result = mysqli_fetch_assoc($sql)){
			    ?>

				      <tr>
				        <td><center>
				        	<?php echo ++$no ?>.
				        </center></td>
				        <td>
				        	<?php echo $result['kode_brg']; ?>
				        </td>
				        <td>
				        	<?php echo $result['nama_brg']; ?>
				        </td>
				        <td>
				        	<?php echo $result['harga_brg']; ?>
				        </td>
				        <td>
				        	<?php echo $result['stok_brg']; ?>
				        </td>
				        <td>
				        	<a href="kelola.php?ubah=<?php echo $result['id_brg']; ?>" type="button" class="btn btn-success btn-sm">
				        		<i class="fa fa-pencil"></i>
				        	</a>
				        	<a href="proses.php?hapus=<?php echo $result['id_brg']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus data?')">
				        		<i class="fa fa-trash-o"></i>
				        	</a>
				        </td>
				      </tr>
			    <?php
			    	}
			    ?>
			    </tbody>
			  </table>
		</div>
	</div>
</body>
</html> 
