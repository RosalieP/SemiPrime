

<?php
  function prima($n){

  for($i=1;$i<=$n;$i++){ 

          $counter = 0; 
          for($j=1;$j<=$i;$j++){ 


                if($i % $j==0){ 

                      $counter++;
                }
          }

       //check prime number and semi number
        if($counter==2){
            $primenumber = $i;  
            $semiprimenumber = 2*$primenumber;
            $semiprimenumber2 = $primenumber*$primenumber;
            
              print $semiprimenumber." is Semi Prime".PHP_EOL; 
            print $semiprimenumber2." is Semi Prime".PHP_EOL;
        }
      
  }

} 

prima(100);  //find prime numbers from 1-100 or whatever you want

