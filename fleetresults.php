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

                <h1 class="title">Fleet Search Results</h1>
                <table>
                    <th>Manufacturer</th>
                    <th>Model</th>
                    <th>Capacity</th>

                    <?php
                    $whichAirline = $_POST["airline"];

                    $query = 'SELECT TypeName, Manufacturer, Capacity FROM airplanetype where TypeName IN(
                        SELECT TYPE as TypeName from airplane WHERE AirlineID="' . $whichAirline . '")';

                    $result = $connection->query($query);

                    while ($row = $result->fetch()) {
                        echo "<tr><td>" . $row["Manufacturer"] .
                            "</td><td>" . $row["TypeName"] .
                            "</td><td>" . $row["Capacity"] .
                            "</td></tr>";
                    }
                    ?>
                </table>
                <img src="plane.png" class="picture" alt="">
                <br>
                <a href="fleetcheck.php">back</a>
                <a href="airline.php">home</a>

                <?php
                $connection = NULL;
                ?>

            </div>
        </section>
    </main>
</body>

</html>