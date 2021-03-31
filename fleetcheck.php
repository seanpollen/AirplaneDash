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

            <h1 class="title">Fleets!</h1>
            <h1 class="subtitle2">Select an airline</h1>

            <form action="fleetresults.php" method="post">
                <?php
                $query = 'SELECT AirlineID, Name from airline';
                $result = $connection->query($query);

                while ($row = $result->fetch()) {
                    echo '<input type="radio" name="airline" value="';
                    echo $row["AirlineID"];
                    echo '">' . $row["Name"] . "<br>";
                }
                ?>
                <input type="submit" value="Plane Check">
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