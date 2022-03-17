<?php

$silnia=1;
for($x=1; $x<=$_POST['silnia'];$x++){
    $silnia=$silnia*$x;
}
echo 'Silnia z '.$_POST['silnia'].' to: '.$silnia.'<br>';

$nr1= 0;
$nr2=1;
$i=0;
$fib=$_POST['fib']-1;
while($i<$fib){
    
    $nr3=$nr2+$nr1;
    $nr1=$nr2;
    $nr2=$nr3;
    $i++;
}
echo '<br>'.$_POST['fib'].' z fibbonaci: '.$nr3;
?>