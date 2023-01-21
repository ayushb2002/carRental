<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <!-- Styles included -->
    <?php include 'components/css.php'; ?>
</head>

<body>
    <section class="navbar-section">
        <?php include 'components/navbar.php'; ?>
    </section>
    <!-- Navbar Ends -->
    <section class="hero-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 hero-img">
                    <div class="hero-img-content">
                        <div class="hero-head text-center">
                            <span class="display-head">carRental</span>
                            <br>
                            <span class="display-subhead">Helping you rent a car easily</span>
                            <br><br>
                            <?php
                            if(isset($_SESSION['loginSuccess']))
                            {
                                if($_SESSION['agency'] == 0)
                                {
                                    ?>
                                        <a href="viewCars.php"><button class="btn btn-primary">Rent a ride now</button></a>
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                    <a href="viewCars.php"><button class="btn btn-primary">Rent a ride now</button></a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- Hero section ends -->
    <section class="footer-section">
        <?php include 'components/footer.php'; ?>
    </section>
    <!-- Footer Ends -->

    <!-- Scripts included -->
    <?php include 'components/script.php'; ?>
</body>

</html>