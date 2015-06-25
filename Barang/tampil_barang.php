<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TAMPIL BARANG</title>
<style>
a{text-decoration:none}
a:hover {text-decoration:underline}
</style>
</head>

<body>
<?php
mysql_connect ("localhost","root","");
mysql_select_db ("sepatu_next");
	$cek=mysql_query ("select *from tabel_barang");
?>
<table width="700" border="1" align="center">
<tr><td colspan="5" align="center"><b>DATA BARANG</b></td></tr>
  <tr align="center">
    <td width="20%"><a href="sort_kode.php">kode barang</td>
    <td width="25%"><a href="sort_nama.php">nama barang</td>
    <td width="15%"><a href="sort_jenis.php">jenis barang</td>
    <td width="20%"><a href="sort_harga.php">harga barang</td>
    <td width="20%"><a href="sort_stok.php">stok barang</td>
    <td width="20%">Option</td>
  </tr>
<?php 
while ($data=mysql_fetch_array ($cek))
	{
?>
  <tr align="center">
    <td><?php echo $data['Kode_barang']; ?></td>
    <td><?php echo $data['Nama_barang']; ?></td>
    <td><?php echo $data['Jenis_barang']; ?></td>
    <td><?php echo $data['Harga_barang']; ?></td>
    <td><?php echo $data['Stok_barang']; ?></td>
    <td align="center"><a href="hapus.php?id=<?php echo $data['Kode_barang'] ?>" style="color:red">HAPUS</a> | <a href="ubah.php?id=<?php echo $data['Kode_barang'] ?>">UBAH </a>
  </tr>
<?php } ?>
</table>
<form action="pencarian_barang.php" method="get">
<table align="center" border="0">
	<tr><td><input type="text" name="tcari" maxlength="30" /><input type="submit" value="Cari" /></form></td></tr>
    <tr><td><br /></td></tr>
    <tr align="center"><td><a href="input_barang.php">Input Data Barang</a></td></tr>
</body>
</html>