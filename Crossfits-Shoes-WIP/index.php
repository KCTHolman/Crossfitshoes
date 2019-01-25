<?php
    include 'includes/db_connection.php';
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="homepage.css" type="text/css" rel="stylesheet">
    <title>Crossfit shoes</title>
    <link href="https://fonts.googleapis.com/css?family=Asul" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
    <div class="container1">
            <div class="nav-container">
                    <div clas="Home hover-menu"><a href=""></a> Home</div>
                    <div clas="Aanbod hover-menu">Aanbod</div>
                    <div clas="Contact hover-menu">Weightlift schoenen</div>
                    <div clas="Contact hover-menu">Crosstraining schoenen</div>
                    <div clas="Contact hover-menu">Over ons</div>
                    <div clas="Contact hover-menu">Contact</div>
                </div>
    </div>
    <div class="container2">
            <div class="box1">
                <div class="filter-price-info">
                    Filter op prijs:<br>
                    <a href="sort-by-price/sort-by-price.php">Oplopend</a><br>
                    <a href="sort-by-price/sort-by-price.php-2">Aflopend</a><br><br>
                </div>

            <div class="filter-brand">
                <div class="filter-brand-info">
                    Filter op merk:<br>
                    <a href="filter-by-brand/filter-by-brand-reebok.php">Reebok</a><br>
                    <a href="filter-by-brand/filter-by-brand-nike.php">Nike</a><br><br>
                </div>
            </div>
            <div class="filter-user">
                <div class="filter-user-info">
                    Filter op gebruiker:<br>
                    <a href="filter-by-user/filter-by-user-1.php">Koen Holman</a><br>
                    <a href="filter-by-user/filter-by-user-2.php">Laurie Peeten</a><br>
                    <a href="filter-by-user/filter-by-user-3.php">Adrie van Haasteren</a><br>
                    meer gebruikers<br>
                </div>
            </div>
            </div>
            <div class="box2">

                <?php include "includes/cards.php"; ?>
                <!-- sort-by-price.php of cards.php -->
            </div>

            <div class="box3"></div>
        </div>
    </div>
    </div>
</body>
</div>
</body>

</html>