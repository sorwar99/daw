<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Sorwar Hussian</title>
</head>

<body>
    <div class="container">
        <header class="bg-secondary p-2 text-white">
            <h1 class="text-center">Comunitats, províncies, municipis. AJAX i bases de dades</h1>
            <h2 class="text-center">Autor: Sorwar Hussian</h2>
        </header>

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




        ?>

    </div>

</body>

</html>