<h3>Bilangan Prima dari 1-37</h3>
<?php
for($i=1; $i<=37; $i++){
    $p = 0; //total pembagi

    //mencari pembagi
    for($j=1; $j<=$i; $j++){
        if($i % $j == 0){
            $p++;
        }
    }
    if($p == 2){
        echo $i.", ";
    }
}
?>