<?php
function connect($host = "localhost:3306", $user = "root", $pasw = "root", $dbname = "traveldb")
{
    $cs = "mysql:host=" . $host . ";dbname=" . $dbname . ";charset=utf8";
    $option = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
    );
    try {
        $pdo = new PDO($cs, $user, $pasw, $option);
        return $pdo;
    } catch (PDOException $ex) {
        echo $ex->getMessage();
        return false;
    }
}

$link = connect();
$res = $link->prepare("SELECT ho.hotel, ci.city, co.country, ho.cost, ho.stars FROM Hotels ho JOIN Cities ci ON ho.cityid=ci.id
JOIN Countries co ON ci.countryid=co.id");
$arr = array();
$res->execute();
while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
    $arr[] = $row;
}
echo json_encode($arr);