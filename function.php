  <?php 
$conn= mysqli_connect("localhost", "root", "", "sisfopuguh");

function query($query){
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;

}

function tambah($data){
	global $conn;
		$nama =  htmlspecialchars_decode($data["nama"]);
		$nis =  htmlspecialchars_decode($data["nis"]);
		$tempat_tgl_lahir = htmlspecialchars_decode($data["tempat_tgl_lahir"]);
		$alamat =  htmlspecialchars_decode($data["alamat"]);
		$gambar = htmlspecialchars_decode($data["gambar"]);
		
$query = "INSERT INTO siswa VALUES
			('', '$nama', '$nis', '$tempat_tgl_lahir', '$alamat', '$gambar')
			";
		mysqli_query($conn, $query);
	return (mysqli_affected_rows($conn));
}


function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;
		$id = $data["id"];
		$nama =  htmlspecialchars_decode($data["nama"]);
		$nis =  htmlspecialchars_decode($data["nis"]);
		$tempat_tgl_lahir = htmlspecialchars_decode($data["tempat_tgl_lahir"]);
		$alamat =  htmlspecialchars_decode($data["alamat"]);
		

$query = "UPDATE siswa SET 
				nama ='$nama',
				nis = '$nis',
				tempat_tgl_lahir = '$tempat_tgl_lahir',
				alamat = '$alamat'
			WHERE id = '$id'
			";
				
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}


 ?>
