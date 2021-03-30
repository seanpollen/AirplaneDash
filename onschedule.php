<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flights On Schedule</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include 'connectdb.php';
    ?>
    <main class="page">
        <section class="glass">
            <h1 class="title">Flights on Schedule</h1>
            <div class="container">
                <table>
                    <tr>
                        <th>Airline</th>
                        <th>Number</th>
                        <th>Arrival</th>
                    </tr>
                    <?php
                    $query = 'SELECT AirlineID, 3DigitNumber, ScheduledArrival from arrival WHERE ScheduledArrival=ActualArrival';
                    $result = $connection->query($query);
                    while ($row = $result->fetch()) {
                        echo "<tr><td>" . $row["AirlineID"] . "</td><td>" . $row["3DigitNumber"] . "</td><td>" . $row["ScheduledArrival"] . "</td></tr>";
                    }
                    ?>
                </table>
                <img src="plane.png" class="picture" alt="">
                <br>
                <a href="airline.php">home</a>
                <?php
                $connection = NULL;
                ?>
            </div>
        </section>
    </main>
</body>

</html>