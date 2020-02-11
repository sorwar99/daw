<?php

$servername = "localhost";
$username = "root";
$password = "";
$port = 8889;
$myDB = "jbalmes";

try {
    $dbh = new PDO("mysql:host=$servername; dbname=$myDB; port=$port", $username, $password);

    $stmt = $dbh->prepare('SELECT id_com,comunitat FROM comunitats  ');
    $stmt->execute();
    $comunitats = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($comunitats as $comunitat){

        $city = $comunitat['comunitat']; 

        $id= $comunitat['id_com'];

        echo "<option c value='. $id .'>$city.</option>";

    }

?>
   


<?php



} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}