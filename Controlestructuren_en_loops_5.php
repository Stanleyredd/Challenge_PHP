<?php
$leeftijd = 3;
$prijs = 10;

if ($leeftijd > 65 AND $leeftijd < 110 OR $leeftijd <= 12 AND $leeftijd >= 3){
    $prijs = $prijs *0.5;
    echo "€".$prijs;

}elseif ($leeftijd <3 AND $leeftijd >= 0){
    $prijs = $prijs * 0;
    echo "€".$prijs;
}elseif ($leeftijd >= 13 and $leeftijd <= 65){
    $prijs = $prijs * 1;
    echo "€".$prijs;


}



?>

