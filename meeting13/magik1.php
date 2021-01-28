<?php
class Point{
    private $x;
    private $y;
    private $width;

    function __construct($x, $y, $width)
    {
        $this->x = $x;
        $this->y = $y;
        $this->width = $width;
    }

    function Show(){
        echo "<br/>Координаты: X = ". $this->x .", Y = ". $this->y ."<br/>";
    }

    function __toString()
    {
        return "<br/> Точка с координатамы: X = ". $this->x .", Y = ". $this->y ."<br/>"; 
    }
    function __get($name)
    {
        // if($name=="xCoord")
        // return $this->x;
        // if($name=="yCoord")
        // return $this->y;
        // if($name=="Sum")
        // return $this->x+$this->y;
        if (property_exists($this, $name))
        return $this->name;
    }

    function __set($name, $value)
    {
        if($name=="xCoord")
        $this->x=$value;
        if($name=="yCoord")
        $this->y=$value;
        if (property_exists($this, $name))
        $this->name=$value;
    }

    function __isset($name)
    {
        return isset($this->name);
    }
    function __sleep()
    {
        return array("x", "width");
    }
    private function Summa($arg1, $arg2){
        echo "<br/>". $arg1 ." + ". $arg2 ." = ".($arg1+$arg2)."<br/>";
    }
    function __call($name, $arguments)
    {
        if($name=="Summa")
        $this->name=$arguments; 
    }
}
$p1 = new Point(7, 12, 5);
// echo $p1;
// echo "X: ".$p1->xCoord."<br>";
// echo "Y: ".$p1->yCoord."<br>";
// echo "Sum: ".$p1->Sum."<br>";
// $p1->xCoord=24;
// $p1->yCoord=-23;
// echo "X: ".$p1->xCoord."<br>";
// echo "Y: ".$p1->yCoord."<br>";
// echo "Sum: ".$p1->Sum."<br>";

echo $p1->x."<br>";
$p1->x=10;
echo $p1->x."<br>";

if(isset($p1->widht))
echo "Свойство width есть";
else
echo "Свойства width нет";
echo "<br/>";

if(isset($p1->x))
echo "Свойство x есть";
else
echo "Свойства x нет";
echo "<br/>";

$str=serialize($p1);
echo $str."<br>";
$p1->Summa(4,8);
$p1->Ufo(3,7, "ha-ha-ha");