<?php
$name=$_POST["arg1"];
$name=strtolower($name);
$arr=["Mario", "Maxim", "Milana", "Mila", "Mark"];
$response="";
foreach($arr as $n){
    if(substr(strtolower($n), 0, strlen($name))==$name)
        $response.=$n."<br>";
}
echo $response;