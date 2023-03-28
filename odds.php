<?php  
function oddLoop(){
    for($odd = 1; $odd <= 100; $odd+=2){
        echo $odd . "\xA";
    }
}

oddLoop();
?>  
