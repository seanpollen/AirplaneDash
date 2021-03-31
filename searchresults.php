<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airport - Flight Search</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="page">
        <section class="glass">
            <div class="container">
                <?php
                include 'connectdb.php';
                ?>

                <h1 class="title">Flight Search Results</h1>
                <table>
                    <th>Airline</th>
                    <th>Flight</th>
                    <th>From</th>
                    <th>To</th>

                    <?php
                    $whichDay = $_POST["day"];
                    $whichAirline = $_POST["airlineCode"];

                    $query = 'SELECT days.AirlineID, days.3DigitNumber, ArrivingAirport, DepartingAirport
                                FROM days, arrival, departure
                                WHERE days.AirlineID="' . $whichAirline . '"
                                AND DayOffered="' . $whichDay . '"
                                AND days.3DigitNumber=arrival.3DigitNumber
                                AND days.3DigitNumber=departure.3DigitNumber';

                    $result = $connection->query($query);

                    while ($row = $result->fetch()) {
                        echo "<tr><td>" . $row["AirlineID"] .
                            "</td><td>" . $row["3DigitNumber"] .
                            "</td><td>" . $row["DepartingAirport"] .
                            "</td><td>" . $row["ArrivingAirport"] .
                            "</td></tr>";
                    }
                    ?>
                </table>
                <img src="plane.png" class="picture" alt="">
                <br>
                <a href="flightsearch.php">back</a>
                <a href="airline.php">home</a>

                <?php
                $connection = NULL;
                ?>

            </div>
        </section>
    </main>
</body>

</html>