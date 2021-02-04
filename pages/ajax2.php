<?php
include_once("functions.php");
$link = connect();
$cityid=$_POST["cityid"];
$sel2 = "SELECT * FROM Hotels WHERE cityid=". $cityid;
$res = mysqli_query($link, $sel2);
echo '<table class="table table-striped">';
    while ($row=mysqli_fetch_array($res, MYSQLI_NUM)){
        echo '<tr>';
        echo '<td>'.$row[0].'</td>';
        echo '<td>'.$row[1].'</td>';
        echo '<td>'.$row[2].'</td>';
        echo '<td>'.$row[3].'</td>';
        echo '<td>'.$row[4].'</td>';
        echo '<td>'.$row[5].'</td>';
        echo "<td><a href='pages/hotelinfo.php?hotel=".$row[0]."' target='_blank'>Детальнее...</a></td>";
        echo '</tr>';
    }
    echo '</table>';