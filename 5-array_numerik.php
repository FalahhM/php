<?php
	$film[0] = "Avenger";
	$film[1] = "Who Am I (Germany)";
	$film[2] = "Snowden";
	$film[3] = "Black Berry";
	$film[4] = "Wikileaks";
	$film[5] = "Interstellar";

	// $film = array("wiro sable","JCSDF","Invicible","Snowden");

	for ($i=0; $i < count($film); $i++) { 
		echo "Nonton Film".$film[$i]."<br>";
	}
?>
<br>
Array Assosiatif
<br>
<?php
// $mhs["budi"] = "2020354";
// $mhs["anto"] = "2020355";
// $mhs["andi"] = "2020356";
$mhs = array(
	"budi"=>"2020354",
	"anto"=>"2020355",
	"andi"=>"2020356",
);
foreach ($mhs as $nama => $nim) {
	echo "Mahasiswa atas nama" .$nama. "dan NIM" .$nim. "<br>";
}
?>