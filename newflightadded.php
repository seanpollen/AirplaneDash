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
    <?php
    include 'connectdb.php';
    ?>

    <?php
    $whichAirline = $_POST["airline"];
    $whereFrom = $_POST["airportFrom"];
    $whereTo = $_POST["airportTo"];
    $flightNum = $_POST["flightnum"];
    $departure = $_POST["departuretime"];
    $arrival = $_POST["arrivaltime"];
    $planenum = $_POST["planenum"];
    $days = (isset($_POST['days'])) ? $_POST['days'] : array();

    echo "<p>" . $whichAirline . "</p>";
    echo "<p>" . $whereFrom . "</p>";
    echo "<p>" . $whereTo . "</p>";
    echo "<p>" . $flightNum . "</p>";
    echo "<p>" . $departure . "</p>";
    echo "<p>" . $arrival . "</p>";
    echo "<p>" . $planenum . "</p>";

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

    <p>Your flight was added! Amazing!</p>

    <a href="flightsearch.php">back</a>
    <a href="airline.php">home</a>

</body>

</html>