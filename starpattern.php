<?php
/* 

*
* * *
* * * * *
* * * * * * *

*/

/*
function makeStar($count = 0){

        for($i=0;$i<$count;$i++){
              for ($j=0; $j < ($i*2-1) ; $j++) {
             echo "* ";

          }
      echo "<br>";
  
	}
}

makeStar(5);
// row 1 = 1
// row 2 = 3
// row 3 = 5
// row 4 = 7
*/

// 0 1 1 2 3 5 8 13 21 34 ....<100

$a=0;
$b=1;

while($c<100)
{
 echo ;	

          }
		  
		  
		  
		  <?php
function starprint($count){
	for($i = 1; $i <= $count; $i++){
  		for($j = $count; $j > $i; $j--){
  			echo "_";
       	}
        for($k = 1; $k<=($i*2-1);$k++){
        	echo "*";
        }
        
        echo "<br>";
  	}
  }
  
starprint(4);