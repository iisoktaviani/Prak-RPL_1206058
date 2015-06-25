<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ubah</title>
</head>
<style>
a{text-decoration:none}
</style>
<?php
mysql_connect ("localhost","root","");
mysql_select_db ("sepatu_next");
	$kode=$_GET['id'];
	$cek=mysql_query ("select *from tabel_barang where Kode_barang='$kode' or Nama_barang='$kode'");
	while ($data=mysql_fetch_array($cek)) {
?>
<body>
<table width="400px" border="0" align="center">
	<form action="update_barang.php" method="post">
		<tr>
    	<td colspan="2" align="center"><b>FORM INPUT BARANG</b></td>
    	</tr>
        <tr><td><input type="hidden" value="<?php echo $data['Kode_barang']; ?>" name="Kode_barang"/></td></tr>
    	<tr>
    	<td>Kode Barang</td><td><input type="text" name="tKode_barang" maxlength="15" value="<?php echo $data['Kode_barang']; ?>" readonly="readonly" />
    	</tr>
        <tr>
    	<td>Nama Barang</td><td><input type="text" name="tNama_barang" width="240px" maxlength="30" value="<?php echo $data['Nama_barang']; ?>" required="required" />
    	</tr>
        <tr>
    	<td>Jenis Barang</td><td><input type="text" name="tJenis_barang" maxlength="50" value="<?php echo $data['Jenis_barang']; ?>"/>
    	</tr>
        <tr>
    	<td>Harga Barang</td><td><input type="text" name="tHarga_barang" maxlength="15" value="<?php echo $data['Harga_barang']; ?>"/></td>
    	</tr>
        <tr>
        <td>Stok Barang</td><td><input type="text" name="tStok_barang" maxlength="15" value="<?php echo $data['Stok_barang']; ?>"/></td>
    	</tr>
        <tr>
    	<td></td><td> <input type="submit" value="Update" /><input type="reset" value="Batal" /></td>
    	</tr>
	</form>
</table>
<?php } ?>
</body>
</html>