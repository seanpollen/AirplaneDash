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
            <?php
            //the whole flight code ie AC30, we need to seperate the flight code and the number
            $str = $_POST["flight"];
            $airline = preg_replace('/[0-9]+/', '', $str);; //leaves only letters
            $flightnum = preg_replace('/[^0-9]/', '', $str); //leave only numbers (WORKING)

            $updatedDeparture = $_POST["newdeparture"];

            $query = 'UPDATE departure SET ActualDeparture="' . $updatedDeparture . '" WHERE AirlineID="' . $airline . '" AND 3DigitNumber="' . $flightnum . '"';
            $numRows = $connection->exec($query);

            ?>
            <h1 class="title">Wonderful!</h1>
            <h1 class="subtitle">Departure time has been updated.</h1>
            <img src="plane.png" class="picture" alt="">
            <br>
            <a href="airline.php">home</a>
        </section>
    </main>
</body>

</html>