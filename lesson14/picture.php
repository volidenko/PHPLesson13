<?php
class Picture {
    public $id;
    public $pictureName;
    public $size;
    public $imagepath;

    function __construct($i, $n, $s, $p)
    {
        $this->id=$i;
        $this->pictureName=$n;
        $this->size=$s;
        $this->imagepath=$p;
    }

    function Show(){
        echo "<br/>Id: " . $this->id . "; pictureName: " . $this->pictureName . ", size: " . $this->size . ", Path: " . $this->imagepath."<br/>";
    }
}