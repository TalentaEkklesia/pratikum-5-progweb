<!DOCTYPE html>
<html>
<head>
	<title>Konversi Tipe</title>
</head>
<body>
	<?php
	//$a adalah variabel untuk menyimpan
	$a = 300.4;
	echo $a;
	echo "<br>";
	//doubleval adalah fungsi untuk menampilkan value double
	echo "tipe Double : ", doubleval($a), "<br>";
	//doubleval adalah fungsi untuk menampilkan value integer
	echo "tipe Integer : ", intval($a), "<br>";
	//doubleval adalah fungsi untuk menampilkan value string
	echo "tipe string : ", strval($a), "<br>";
	?>

</body>
</html>