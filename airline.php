<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="page">
        <section class="glass">
            <?php
            include 'connectdb.php';
            ?>
            <h1 class="title">Airline Dashboard</h1>
            <h1 class="subtitle">What would you like to do?</h1>
            <div class="container">
                <form action="onschedule.php" class="btn" method="post">
                    <input type="submit" value="Flights on Schedule">
                </form>

                <form action="flightsearch.php" class="btn" method="post">
                    <input type="submit" value="Flight Search">
                </form>

                <form action="addflight.php" class="btn" method="post">
                    <input type="submit" value="Add a Flight">
                </form>

                <form action="editflight.php" class="btn" method="post">
                    <input type="submit" value="Update Departure Time">
                </form>

                <form action="openseats.php" class="btn" method="post">
                    <input type="submit" value="Check Open Seats">
                </form>

                <form action="fleetcheck.php" class="btn" method="post">
                    <input type="submit" value="BONUS: Check a Fleet">
                </form>

                <img src="plane.png" class="picture" alt="">
                <p>Sean Pollen - 20102356 - Made for CMPE332</p>
            </div>
        </section>
    </main>
</body>

</html>