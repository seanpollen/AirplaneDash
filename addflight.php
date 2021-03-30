<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airport - Add a Flight</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="page">
        <section class="glass">
            <h1 class="title">Add a Flight.</h1>
            <form action="newflightadded.php" method="post">
                <?php
                //list of airlines as radio buttons
                include 'connectdb.php';
                $query = 'SELECT AirlineID, Name from airline';
                $result = $connection->query($query);
                echo "<h1 class='subtitle2'>Choose an airline.</h1>";
                while ($row = $result->fetch()) {
                    echo '<input type="radio" name="airline" value="';
                    echo $row["AirlineID"];
                    echo '">' . $row["Name"] . "<br>";
                }

                //list of airports as radio buttons (FROM)
                $query = 'SELECT AirportID, City FROM airport';
                $result = $connection->query($query);
                echo "<h1 class='subtitle2'>FROM</h1>";
                while ($row = $result->fetch()) {
                    echo '<input type="radio" name="airportFrom" value="';
                    echo $row["AirportID"];
                    echo '">' . $row["AirportID"] . " " . $row["City"] . "<br>";
                }

                //TO
                $query = 'SELECT AirportID, City FROM airport';
                $result = $connection->query($query);
                echo "<h1 class='subtitle2'>TO</h1>";
                while ($row = $result->fetch()) {
                    echo '<input type="radio" name="airportTo" value="';
                    echo $row["AirportID"];
                    echo '">' . $row["AirportID"] . " " . $row["City"] . "<br>";
                }
                ?>

                <h1 class='subtitle2'>Enter a flight number</h1>
                <input type="number" name="flightnum" min="0" max="999">

                <h1 class='subtitle2'>Departure</h1>
                <input type="time" name="departuretime">

                <h1 class='subtitle2'>Arrival</h1>
                <input type="time" name="arrivaltime">

                <h1 class='subtitle2'>Plane Number</h1>
                <input type="number" name="planenum" min="0" max="999">

                <h1 class='subtitle2'>Days</h1>
                <input type="checkbox" name="days[]" value="MON">Monday
                <input type="checkbox" name="days[]" value="TUES">Tuesday
                <input type="checkbox" name="days[]" value="WED">Wednesday
                <input type="checkbox" name="days[]" value="THU">Thursday
                <input type="checkbox" name="days[]" value="FRI">Friday
                <input type="checkbox" name="days[]" value="SAT">Saturday
                <input type="checkbox" name="days[]" value="SUN">Sunday
                <br>
                <br>
                <input type="submit" value="Add Flight">
            </form>
            <a href="airline.php">home</a>
        </section>
    </main>
</body>

</html>