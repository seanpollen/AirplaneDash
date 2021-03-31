<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="page">
        <section class="glass">
            <?php
            include 'connectdb.php';
            ?>
            <h1 class="title">Flight Added!</h1>
            <h1 class="subtitle">Now how about that airplane food?</h1>
            <?php
            $whichAirline = $_POST["airline"];
            $whereFrom = $_POST["airportFrom"];
            $whereTo = $_POST["airportTo"];
            $flightNum = $_POST["flightnum"];
            $departure = $_POST["departuretime"];
            $arrival = $_POST["arrivaltime"];
            $planenum = $_POST["planenum"];
            $days = (isset($_POST['days'])) ? $_POST['days'] : array();

            $query = 'INSERT INTO flight VALUES ("' . $flightNum . '","' . $whichAirline . '","' . $planenum . '")';
            $query2 = 'INSERT INTO arrival VALUES ("' . $whichAirline . '","' . $flightNum . '","' . $whereTo . '","' . $arrival . '","' . $arrival . '")';
            $query3 = 'INSERT INTO departure VALUES ("' . $whichAirline . '","' . $flightNum . '","' . $whereFrom . '","' . $departure . '","' . $departure . '")';
            $numRows = $connection->exec($query);
            $numRows = $connection->exec($query2);
            $numRows = $connection->exec($query3);

            if (count($days) > 0) {
                foreach ($days as $day) {
                    $query4 = 'INSERT INTO days VALUES ("' . $whichAirline . '", "' . $flightNum . '", "' . $day . '")';
                    $numRows = $connection->exec($query4);
                }
            }
            ?>

            <img src="plane.png" class="picture" alt="">

            <a href="flightsearch.php">back</a>
            <a href="airline.php">home</a>
        </section>
    </main>
</body>

</html>