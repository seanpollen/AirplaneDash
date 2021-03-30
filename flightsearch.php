<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline - Flight Search</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="page">
        <section class="glass">
            <h1 class="title">Flight Search</h1>

            <form action="searchresults.php" method="post">
                <h1 class="subtitle2">Enter an airline code</h1>
                <input type="text" name="airlineCode">
                <h1 class="subtitle2">What day of the week?</h1>
                <input type="radio" name="day" value="MON">Monday<br>
                <input type="radio" name="day" value="TUES">Tuesday<br>
                <input type="radio" name="day" value="WED">Wednesday<br>
                <input type="radio" name="day" value="THURS">Thursday<br>
                <input type="radio" name="day" value="FRI">Friday<br>
                <input type="radio" name="day" value="SAT">Saturday<br>
                <input type="radio" name="day" value="SUB">Sunday<br>
                <br>
                <input type="submit"><br>
            </form>
            <img src="plane.png" class="picture" alt="">
            <br>
            <a href="airline.php">home</a>
        </section>
    </main>
</body>

</html>