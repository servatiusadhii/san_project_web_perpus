<?php
$namafolder="gambar_admin/"; //tempat menyimpan file

include "../conn.php";

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['nama_file']['type'];
        $user_id = $_POST['user_id'];
		$username= $_POST['username'];
		$password=$_POST['password'];
        $fullname=$_POST['fullname'];
		
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="INSERT INTO admin(user_id,username,password,fullname,gambar) VALUES
            ('$user_id','$username','$password','$fullname','$gambar')";
			$res=mysql_query($sql) or die (mysql_error());
			echo "<script>alert('Data Admin berhasil tersimpan.') ; window.location = 'admin.php' </script>";
			// echo "Gambar berhasil dikirim ke direktori".$gambar;
            // echo "<h3><a href='input-admin.php'> Input Lagi</a></h3>";
            // echo "<h3><a href='admin.php'> Data Admin</a></h3>";	   
		} else {
		   echo "<p>Gambar gagal dikirim</p>";
		}
   } else {
		echo "<script>alert('Jenis gambar yang anda kirim salah. File gambar harus .jpg ;.gif ; .png') ; window.location = 'insert-admin.php'</script>";
   }
} else {
	echo "<script>alert('Anda belum memilih gambar.') ; window.location = 'input-admin.php'</script>";
}

?>