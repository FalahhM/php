<?php
$awal = 1;
while ($awal <= 5) {//true
	echo "No :".$awal."<br>";
	$awal++;
}

$awal = 5;
do {
	echo "Do while :".$awal."<br>";
	$awal--;
} while ($awal>=1);

echo "<br>FOR<br>";
for ($i=0; $i < 10; $i++) { 
	echo $i."-";
}

echo "<br>Latihan<br>";
for ($i=1; $i < 100; $i++) { 
	if($i%2==0) echo $i. "-";
}
?>
<br>

<select>
	<?php
		for ($i=1; $i <= 12; $i++) { 
		echo "<option>bulan $i</option>";
		}
	?>
</select>
<select>
	<?php
		for ($i=1; $i <= 31; $i++) { 
		echo "<option>tanggal $i</option>";
		}
	?>
</select>
<select>
	<?php
		for ($i=2010; $i <= 2023; $i++) { 
		echo "<option>$i</option>";
		}
	?>
</select>
