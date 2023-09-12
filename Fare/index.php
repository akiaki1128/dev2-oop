<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fare Activity</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="age" id="age" min=10 max=80 placeholder="Age">
        <br>
        <input type="text" name="distance" id="distance" placeholder="Distance(km)">
        <br>
        <button type="submit" name="btn_submit">Compute</button>
    </form>
    
</body>
</html>

<?php 
include "Fare.php";

if(isset($_POST['btn_submit'])){
    $age = $_POST['age'];
    $distance = $_POST['distance'];
    
    $fare = new Fare;

    $fare->setAge($age);
    $fare->setDistance($distance);
    $fare->setFare();

    echo $fare->getAge()." years old <br>";
    echo $fare->getDistance()." km <br>";
    echo $fare->getFare();
}

?>



