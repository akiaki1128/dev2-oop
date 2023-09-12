<?php  

class Fare{
    /* Properties */
    private $age; 

    private $distance;

    private $fare;


    /* Methods */ 
    public function setAge($new_age){
        $this->age = $new_age;
    }

    public function setDistance($new_distance){
        $this->distance = $new_distance;
    }

    public function getAge(){
        return $this->age;
    }

    public function getDistance(){
        return $this->distance;
    }

    private function displayValues(){
        echo "Age: " . $this->age . " years old <br>";
        echo "Distance: " . $this->distance . " km <br>";
    } 
    
    function setFare() {
        $baseFare = 8; 
        $additionalFarePerKm = 1; 
       if ($this->age >= 10 && $this->age <= 80) {
        if ($this->distance <= 4) {
            $this->fare = $baseFare;
        } else {
            $additionalDistance = $this->distance - 4;
            $this->fare = $baseFare + ($additionalDistance * $additionalFarePerKm);
        }
    
        if ($this->age >= 60) {
            $this->fare *= 0.8; 
        }
  
    }
    }

    function getFare(){
        return $this->fare;
    }
}



?>