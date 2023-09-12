<?php 
include "../classes/User.php";

$user = new User;  // we are going to access our user class. 

$user->store($_POST);

?>