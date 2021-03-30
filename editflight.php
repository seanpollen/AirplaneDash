<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline - Update Departure</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="page">
        <section class="glass">
            <?php include 'connectdb.php'; ?>

            <h1 class="title">Update Departure Time</h1>
            <h1 class="subtitle2">Select a flight to update</h1>

            <form action="updateresults.php" method="post">
                <?php
                $query = 'SELECT AirlineID, 3DigitNumber, ActualDeparture from departure';
                $result = $connection->query($query);

                while ($row = $result->fetch()) {
                    echo '<input type="radio" name="flight" value="';
                    echo $row["AirlineID"], $row["3DigitNumber"];
                    echo '">' . $row["AirlineID"] . " " . $row["3DigitNumber"] . " departing at " . $row["ActualDeparture"] . "<br>";
                }
                ?>
                <h1 class="subtitle2">What is the updated departure time?</h1>
                <input type="time" name="newdeparture">
                <input type="submit" value="Update Flight">
            </form>
            <img src="plane.png" class="picture" alt="">
            <br>
            <a href="airline.php">home</a>

            <?php
            $connection = NULL;
            ?>
        </section>
    </main>
</body>

</html>