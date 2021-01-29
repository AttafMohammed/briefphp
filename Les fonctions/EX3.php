<?php
 
function action($firstNumber ,$secondNumber){
   
   if( $firstNumber > $secondNumber){
      return 'le premier nomber est plus grand que le deuxieme.';
   }
   elseif ( $firstNumber < $secondNumber){
      return 'le premier numbre est plus petit aue le deuxieme.';
   }

   else{
     return 'les deux nombres sont egaux.';
   }


}

echo  action(12,76);



 
?>