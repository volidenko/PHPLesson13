<?php
//print_r(PDO::getAvailableDrivers());
function connect($host="localhost:3306", $user="root", $pasw="root", $dbname="traveldb"){
    $cs = "mysql:host=".$host. ";dbname=". $dbname. ";charset=utf8";
    $option=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_NUM,
    PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"
);
try{
    $pdo=new PDO($cs, $user, $pasw, $option);
    return $pdo;
}
catch(PDOException $ex){
    echo $ex->getMessage();
    return false;
}
}

$link=connect();
$res=$link->query("SELECT * FROM Countries");
echo "<ul>";
while ($row = $res->fetch()) {
    echo "<li>" . $row[0] . ". " . $row[1] . "</li>";
}
echo "</ul>";