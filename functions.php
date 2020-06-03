<?php 
$conn = mysqli_connect("localhost","root","","buku_tamu");

function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows [] = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$asal = htmlspecialchars($data["asal"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$jk = htmlspecialchars($data["jk"]);
	$no_hp = htmlspecialchars($data["no_hp"]);
	$tujuan = htmlspecialchars($data["tujuan"]);

	$query = "INSERT INTO tamu VALUES ('','$nama', '$asal','$alamat','$jk','$no_hp','$tujuan')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$asal = htmlspecialchars($data["asal"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$jk = htmlspecialchars($data["jk"]);
	$hp = htmlspecialchars($data["no_hp"]);
	$tujuan = htmlspecialchars($data["tujuan"]);

	$query = "UPDATE tamu SET 
				nama = '$nama',
				asal = '$asal',
				alamat = '$alamat',
				jenis_kelamin = '$jk',
				hp = '$hp',
				tujuan = '$tujuan'
				WHERE
				id = '$id'
				"; 
	$data = mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM tamu WHERE id=$id");
	return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query = "SELECT * FROM tamu WHERE nama LIKE '%$keyword%'";
	return query($query);
}
?>