<?php  
function leapYear(){
    for($year = 4; $year <= 2024; $year++){
        if($year % 4 == 0){
            echo $year . "\xA" ;
        }
    }
}

leapYear();
?>  
