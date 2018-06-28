<?php 

class Car2 {
    
  
    function MoveWheels(){
    
        echo "Wheels move";
        
    
    }
    
    

}

if(method_exists("Car2", "MoveWheels")) {

echo "The Method Exist";

} else {

echo "no it does not";

}





?>