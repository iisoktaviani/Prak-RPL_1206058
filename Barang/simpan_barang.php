<title>simpan barang</title>
<?php
//koneksi ke localhost
mysql_connect ("localhost","root","");
//koneksi ke database
mysql_select_db ("sepatu_next");
	$kode_barang=$_POST['tKode_barang'];
	$nama_barang=$_POST['tNama_barang'];
	$jenis_barang=$_POST['tJenis_barang'];
	$harga_barang=$_POST['tHarga_barang'];
	$stok_barang=$_POST['tStok_barang'];
	$cek=mysql_query("select *from tabel_barang where Kode_barang='$Kode_barang'");
	$data=mysql_fetch_array($cek);
		if ($kode_barang == $data['Kode_barang'])
			echo "<script>alert('Kode Yang Anda Input Sudah Terdaftar');
			self.history.go(-1)</script>";
		else
			echo "<script>alert('Data Tersimpan')</script>";
			$simpan=mysql_query("insert into tabel_barang values('$Kode_barang','$Nama_barang','$Jenis_barang','$Harga_barang','$Stok_barang)");			
			echo "<meta http-equiv='refresh'; content='0; url=tampil_barang.php'>";
?>