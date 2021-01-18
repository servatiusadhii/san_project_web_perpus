<?php
$namafolder="gambar_anggota/"; //tempat menyimpan file

include "../conn.php";

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['nama_file']['type'];
        $id = $_POST['id'];
        $no_induk = $_POST['no_induk'];
		$nama= $_POST['nama'];
		$jk=$_POST['jk'];
        $kelas = $_POST['kelas'];
        $ttl = $_POST['ttl'];
        $alamat=$_POST['alamat'];
		
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="INSERT INTO data_anggota(id,no_induk,nama,jk,kelas,ttl,alamat,foto) VALUES
            ('$id','$no_induk','$nama','$jk','$kelas','$ttl','$alamat','$gambar')";
			$res=mysql_query($sql) or die (mysql_error());
			echo "<script>alert('Data Anggota Berhasil Disimpan ke Database.'); window.location = 'anggota.php' </script>";
			// echo "Gambar berhasil dikirim ke direktori".$gambar;
            // echo "<h3><a href='input-anggota.php'> Input Lagi</a></h3>";
            // echo "<h3><a href='anggota.php'> Data Anggota</a></h3>";	   
		} else {
		   echo "<p>Gambar gagal dikirim</p>";
		}
   } else {
		echo "<script>alert('Jenis gambar yang anda pilih salah. Jenis gambar harus berupa .jpg ; .png ; .gif'); window.location = 'input-anggota.php' </script>";
   }
} else {
	echo "<script>alert('Anda belum memilih gambar') ;window.location = 'input-anggota.php' </script>";
}

?>