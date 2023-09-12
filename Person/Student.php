<?php  
include "Person.php";

class Student extends Person{    // child class  (If you see extends that means its the child class.)
    private $school_id;

    public function __construct($new_name, $new_age, $new_gender, $new_school_id){
        $this->name = $new_name;
        $this->age = $new_age;
        $this->gender = $new_gender;
        $this->school_id = $new_school_id;
    } // All of these above can be accessed to Person.php file since its public/protected.

    public function getSchoolID(){
        return $this->school_id;
    }
}


?>