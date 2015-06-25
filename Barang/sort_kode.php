<?php
mysql_connect ("localhost","root","");
mysql_select_db ("sepatu_next");
	$tampil=mysql_query("select * from tabel_barang");
?>
<table border="1" width="200px" align="center">
	<tr><td align="center" style="font-size:20px"><b>Kode Barang</b></td></tr>
	<?php
	while ($data=mysql_fetch_array($tampil))
		{
	 ?>
    	<tr><td align="center"><?php echo $data['Kode_barang']?></td></tr>
	<?php } ?>
      
    	
</table>
<center><button><a href="tampil_barang.php">Kembali</a></button></center>