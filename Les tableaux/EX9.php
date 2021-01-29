<?php

$departement = array( "2"=>"Aisne", "59"=> "Nord", "60"=>"Oise","80"=>"pasDeCalais");
$departement['51']= 'Reims';
ksort($departement); 
foreach($departement as $x => $x_value) {
    echo "Le departement  $x_value  a la numero  $x .";
    echo "<br>";
     }

 // "Le département" + nom_departement + "a le numéro" + num_departement
?>


