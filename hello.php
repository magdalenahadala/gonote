<?php
/*$name = "Header";
echo "<h1>Hello, $name!</h1>";*/

$headerNumber = 1;
while($headerNumber<=6){
    echo "<h1> Header </h1>";
        $headerNumber = $headerNumber + 1;
    
}
$numberOfDivs = random_int(10,100);
while($numberOfDivs > 0){
    $randomInt = random_int(0,100);
    echo "<div>$randomInt</div>";
$numberOfDivs = $numberOfDivs - 1;
}
$array = ['red','blue','green'];

$data=date("Y-m-d");
$czas=date("H:i");
echo "<p>Dziś jest $data Godzina: $czas</p>";
