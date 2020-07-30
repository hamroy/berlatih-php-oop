<!DOCTYPE>
<html>
<head>
	<title>Berlatih PHP</title>
	<meta charset="UTP-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php
	
	include 'animal.php';

	$sheep = new Animal("shaun");

	echo "<br/>". $sheep->name; // "shaun"
	echo "<br/>". $sheep->get_legs(); // 2
	echo "<br/>". $sheep->get_cold_blooded(); // false

	// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

	// index.php
	echo "<br/>";
	echo "Class Ape";
	$sungokong = new Ape("kera sakti");
	echo "<br/>". $sungokong->name;
	echo "<br/>". $sungokong->get_legs();
	echo "<br/>". $sungokong->yell(); // "Auooo"

	echo "<br/>";
	echo "<br/>";
	echo "Class Frog";
	$kodok = new Frog("buduk");
	$kodok->set_legs(4);
	
	echo "<br/>". $kodok->name; 
	echo "<br/>". $kodok->get_legs();
	echo "<br/>".$kodok->jump(); // "hop hop"
	?>

</body>
</html>