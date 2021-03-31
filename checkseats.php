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
            $day = $_POST["day"];
            //get all flight codes on selected day
            $query = 'SELECT AVG(Capacity) AS Average FROM airplanetype where TypeName IN( 
        SELECT TYPE AS TypeName FROM airplane WHERE (AirlineID, ID) IN(
        SELECT AirlineID, AirplaneID AS ID FROM flight WHERE (AirlineID, 3DigitNumber) IN(
        SELECT AirlineID, 3DigitNumber FROM days WHERE DayOffered="' . $day . '")))';

            $result = $connection->query($query);

            while ($row = $result->fetch()) {
                echo "<h1 class='subtitle'>There are around</h1><h1 class='title'> " . round($row["Average"], 0) . "</h1><h1 class='subtitle'> seats per plane leaving on " . $day . "</h1>";
            }

            ?>
            <img src="plane.png" class="picture" alt="">
            <br>
            <a href="openseats.php">back</a>
            <br>
            <a href="airline.php">home</a>
        </section>
    </main>

    <?php
                $connection = NULL;
                ?>
</body>

</html>