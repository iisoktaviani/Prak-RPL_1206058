<title>hapus</title>
<?php
mysql_connect ("localhost","root","");
mysql_select_db ("sepatu_next");
	$kode=$_GET['id'];
	$hapus= mysql_query ("delete from tabel_barang where Kode_barang='$kode'");
	echo "<script>alert('Data $kode telah terhapus')</script>";
	echo "<meta http-equiv='refresh'; content='0; url=tampil_barang.php'>";
?>