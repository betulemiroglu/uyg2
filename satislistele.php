<table border="1" align="center">
<tr>
	<th colspan="2">SATIS LÝSTELE</th>
</tr>
<tr>
	<th>Adi</th>
	<th>Satis Tarih</th>
</tr>
<?php
	$dosya=fopen("satis.txt","r");
	while (!feof($dosya))
	{
		$kaynak=fgets($dosya,256);
		$kaynak=trim($kaynak);
		$dizi=explode("-",$kaynak);
	<table border="1" align="center">
<th>ANA MENU</th>
<tr>
	<td>
		<a href='ogrencibilgisi.php'>Ogrenci Bilgisi Gir</a><br>
		<a href='notbilgisi.php'>Not Bilgisi Gir</a><br>
		<a href='bilgilistele.php'>Bilgileri Listele</a>
	</td>
</tr>
</table>	
		
		
		
		
		
		
		
		
		
		
		
	}
	
?>
<tr>
	<td colspan="2" align="center">
		<a href='index.php'>anasayfa don</a>
	</td>
</tr>
