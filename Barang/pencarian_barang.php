<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PENCARIAN</title>
</head>
<style>
a{text-decoration:none}
</style>
<body>
<?php
mysql_connect ("localhost","root","");
mysql_select_db ("sepatu_next");
	$kode=$_GET['tcari'];
	$cek=mysql_query ("select *from tabel_barang where Kode_barang='$kode' or Nama_barang='$kode'");
	$data=mysql_fetch_array($cek);
	if ($kode==$data['Kode_barang'] or $kode==$data['Nama_barang'])
	{
		echo "<script>alert('Data Barang Ditemukan')</script>";
?>
<table width="400px" border="0" align="center">
		<tr>
    	<td colspan="3" align="left"><h2><b>Data <?php echo $data['Nama_barang']; ?></b></h2></td>
    	</tr>
    	<tr>
    	<td width="55%">kode</td><td width="3%"> : </td><td><?php echo $data['Kode_barang']; ?></td>
    	</tr>
        <tr>
    	<td>nama</td><td width="3%"> : </td><td><?php echo $data['Nama_barang']; ?></td>
    	</tr>
        <tr>
    	<td>jenis</td><td width="3%"> : </td><td><?php echo $data['Jenis_barang']; ?></td>
    	</tr>
        <tr>
    	<td>harga</td><td width="3%"> : </td><td><?php echo $data['Harga_barang']; ?></td>
    	</tr>
        <tr>
    	<td>stok</td><td width="3%"> : </td><td><?php echo $data['Stok_barang']; ?></td>
    	</tr>
        <tr>
    	<td colspan="3" align="left"><button><a href="tampil_barang.php">Kembali</a></button></td>
    	</tr>
</table>
<?php } 
else
	{
		echo "<script>alert('Data Barang Tidak Ditemukan')</script>";
		echo "<script>self.history.go(-1)</script>";
	}
?>
</body>
</html>