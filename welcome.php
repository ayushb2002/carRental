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
                <div class="col-lg-9 col-sm-12"></div>
                <div class="col-lg-3 col-sm-12 mt-3 text-center">
                    <span class="welcome-user-text">Welcome Ayush Bansal</span>
                </div>
                <div class="col-sm-12 col-lg-6 welcome-card-links p-5">
                    <!-- Rent a car card -->
                    <div class="card mb-3">
                        <h5 class="card-header">Book a car</h5>
                        <div class="card-body">
                            <h5 class="card-title">Renting facilities</h5>
                            <p class="card-text">Rent a car with us at lowest cost in the market!
                            </p>
                            <a href="viewCars.php" class="btn btn-success">View cars</a>
                        </div>
                    </div>
                    <!-- Admin add cars to rent -->
                    <div class="card mb-3">
                        <h5 class="card-header">For agency members only!</h5>
                        <div class="card-body mb-2">
                            <h5 class="card-title">Add cars to rent</h5>
                            <p class="card-text">Fill the form to add details of new cards available to rent!
                            </p>
                            <a href="addCars.php" class="btn btn-success">Fill out the form</a>
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="card-title">View rented cars</h5>
                            <p class="card-text">Keep a track on the cars rented by your agency!
                            </p>
                            <a href="viewRentedCars.php" class="btn btn-success">View details</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-lg-6"></div>
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