<?php 

class Person {   // parent class
    public $name;
    protected $age;
    protected $gender;

    public function __construct($new_name, $new_age, $new_gender){
        $this->name = $new_name;
        $this->age = $new_age;
        $this->gender = $new_gender;
    } //not everybody has a schoolID, so dont include the id here. think about the scenario. 

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }
    public function getGender(){
        return $this->gender;
    }
}


?>