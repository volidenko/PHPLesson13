<?php
include_once("picture.php");
$p1 = new Picture(1, "photo_23646", 1024, "images/photo_23646.jpg" );
//$p1->Show();
$str=serialize($p1);
echo $str."<br>";
file_put_contents("picture.txt", $str);