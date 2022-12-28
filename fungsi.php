<?php
	include 'koneksi.php';

	function tambah_data($data, $files){	
		$kode = $data['kode'];
		$nama_brg = $data['nama_brg'];
		$harga_brg = $data['harga_brg'];
		$stok_brg = $data['stok_brg'];

		$query = "INSERT INTO tbl_barang VALUES(null, '$kode', '$nama_brg', '$harga_brg', '$stok_brg')";
		$sql = mysqli_query($GLOBALS['conn'], $query);	

		return true;
	}

	function ubah_data($data, $files){
		$id_brg = $data['id_brg'];
		$kode = $data['kode'];
		$nama_brg = $data['nama_brg'];
		$harga_brg = $data['harga_brg'];
		$stok_brg = $data['stok_brg'];

		$queryShow = "SELECT * FROM tbl_barang WHERE id_brg = '$id_brg'";
		$sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
		$result = mysqli_fetch_assoc($sqlShow);


		$query = "UPDATE tbl_barang SET kode_brg='$kode', nama_brg='$nama_brg', harga_brg='$harga_brg', stok_brg='$stok_brg' WHERE id_brg='$id_brg'";
		$sql = mysqli_query($GLOBALS['conn'], $query);

		return true;
	}

	function hapus_data($data){
		$id_brg = $data['hapus'];

		$queryShow = "SELECT * FROM tbl_barang WHERE id_brg = '$id_brg'";
		$sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
		$result = mysqli_fetch_assoc($sqlShow);

		$query = "DELETE FROM tbl_barang WHERE id_brg = '$id_brg'";
		$sql = mysqli_query($GLOBALS['conn'], $query);

		return true;
	}
?>
