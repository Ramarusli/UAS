<?php 
class koneksi{
	public function get_koneksi()
	{
		$conn=mysqli_connect("localhost","id14370007_uascovid8","Kelompok8-Web2","id14370007_uascovid");//cek koneksi
		if(mysqli_connect_error()){
			echo"koneksi gagal : ".mysqli_connect_error();
		}
		return $conn;
	}
}
$konek = new koneksi();
$koneksi=$konek->get_koneksi();
?>
