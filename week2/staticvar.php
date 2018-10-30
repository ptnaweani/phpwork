<?php 
function mynum(){
    static $x =0;
    echo $x;
    $x++;
}
mynum();
echo"<br>";
mynum();
echo "<br>";
mynum();
?>