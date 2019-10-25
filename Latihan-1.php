<?php
function tukar(&$pertama, &$kedua)
{
    $temp = $pertama;
    $pertama = $kedua;
    $kedua = $temp;
}
$a = 1;
$b = 2;

echo "Sebelum Ditukar <br>";
echo "$a <br>";
echo "$b <br>";
echo "<br>";

tukar($a, $b);
echo "Sesudah Ditukar <br>";
echo "$a <br>";
echo $b;
