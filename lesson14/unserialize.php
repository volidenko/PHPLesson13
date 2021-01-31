<?php
include_once("picture.php");
$str=file_get_contents("picture.txt");
$p2 = unserialize($str);
$p2->Show();