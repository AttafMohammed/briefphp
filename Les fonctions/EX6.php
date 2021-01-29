<?php
 
function action( int $age , $genre){
    if( $age < 18){
        return " vous êtes $genre et vous êtes mineur";
    }
    else {
        return " vous êtes $genre et vous êtes majeur";

    }
   
}
   
   
echo  action(19,"femme");



 
?>


