<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline - Check for Seats</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="page">
        <section class="glass">
            <h1 class="title">Check Available Seats</h1>
            <form action="checkseats.php" method="post">
                <h1 class="subtitle">What day are you interested in monitoring traffic?</h1>
                <input type="radio" name="day" value="MON">Monday
                <input type="radio" name="day" value="TUES">Tuesday
                <input type="radio" name="day" value="WED">Wednesday
                <input type="radio" name="day" value="THU">Thursday
                <input type="radio" name="day" value="FRI">Friday
                <input type="radio" name="day" value="SAT">Saturday
                <input type="radio" name="day" value="SUN">Sunday
                <br>
                <br>
                <input type="submit" value="Calculate Open Seats">
            </form>
            <img src="plane.png" class="picture" alt="">
            <br>
            <a href="airline.php">home</a>
        </section>
    </main>
</body>

</html>