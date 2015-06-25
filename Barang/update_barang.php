<?php
mysql_connect ("localhost","root","");
mysql_select_db ("sepatu_next");
	$kode=$_POST['Kode_barang'];
	$Kode_barang=$_POST['tKod'];
	$Nama_barang=$_POST['tNama'];
	$Jenis_barang=$_POST['tJen'];
	$Harga_barang=$_POST['tHar'];
	$Stok_barang=$_POST['tStok'];
		$update=mysql_query("update sepatu_next set Kode_barang='$Kode_barang', Nama_barang='$Nama', Jenis_barang='$Jenis_barang', Harga_barang='$Harga_barang', Stok_barang='$Stok barang' where Kode_barang='$Kode'");
		//message box notif
		echo "<script>alert('Data barang telah terupdate')</script>";			
		echo "<meta http-equiv='refresh'; content='0; url=tampil_barang.php'>";

?>