<?php
include_once("pdo1.php");
$pdo=connect();
$cname1="Италия";
$cname2="Швеция";
$cname3="Греция";

// $ps1=$pdo->prepare("INSERT INTO Countries (Country) VALUES ('".$cname1."')");
// $ps1->execute();

// $ps2=$pdo->prepare("INSERT INTO Countries (Country) VALUES (?)");
// $ps2->bindParam(1,$cname2);
// $ps2->execute();

// $ps3=$pdo->prepare("INSERT INTO Countries (Country) VALUES (:country)");
// $ps3->execute(array("country"=>$cname3));

$ps4=$pdo->prepare("SELECT * FROM Countries");
$ps4->execute();
echo "<table>";
while($row = $ps4->fetch(PDO::FETCH_ASSOC)){
    echo "<tr><td>" .$row["id"] ."</td><td>" . $row["country"] ."</td></tr>";
}
echo "</table>";