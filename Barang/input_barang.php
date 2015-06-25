<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Input Customer</title>
<style>
body {background:white}
</style>
</head>

<body>
<table width="400px" border="0" align="center">
	<form action="simpan_barang.php" method="post">
		<tr>
    	<td colspan="2" align="center"><b>FORM INPUT BARANG</b></td>
    	</tr>
        <tr><td></td></tr>
    	<tr>
    	<td>kode barang</td><td><input type="text" name="tkod" maxlength="15"  required="required"  />
    	</tr>
        <tr>
    	<td>NAMA barang</td><td><input type="text" name="tnama" width="240px" maxlength="30" required="required"  />
    	</tr>
        <tr>
    	<td>jenis barang</td><td><input type="text" name="tjen" maxlength="6" />
    	</tr>
        <tr>
    	<td>harga barang</td><td><input type="text" name="thar" maxlength="15"/></td>
    	</tr>
        <tr>
    	<td>stok barang</td><td><input type="text" name="tstok" maxlength="15"/></td>
    	</tr>
        <tr>
    	<td></td><td> <input type="submit" value="Simpan" /><input type="reset" value="Batal" /></td>
    	</tr>
	</form>
</table>
</body>
</html>