<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Belajar PHP</title>
</head>
<body>

<?php

// $kata = "Belajar <b><font color='red'>PHP</font></b>";
// $kata = 'Belajar <b><font color="red">PHP</font></b>';
// $kata = "Belajar <b><font color=\"red\">PHP</font></b>";

// echo $kata;
$angka1 = 10;$angka2 = 2;
echo "Operator Aritmatika ".$angka1." & ".$angka2;
echo "<br>penjumlahan :".$angka1 + $angka2;
echo "<br>pengurangan :".$angka1 - $angka2;
echo "<br>perkalian :".$angka1 * $angka2;
echo "<br>pembagian :".$angka1 / $angka2;
echo "<br>perpangkatan :".$angka1 ** $angka2;
echo "<br>modulus :" .$angka1 % $angka2;

$kata= "Bismillah";
$kata.= "Saya bisa PHP";
echo $kata;

?>

</body>
</html>