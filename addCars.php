<?php
session_start();

if(isset($_SESSION['loginSuccess']))
{
    if($_SESSION['agency'] == 1)
    {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental | Add a car</title>
    <!-- Styles included -->
    <?php include 'components/css.php'; ?>
</head>

<body>
    <section class="navbar-section">
        <?php include 'components/navbar.php'; ?>
    </section>
    <section class="register-car-form-section">
        <div class="container-flluid">
            <div class="row">
                <div class="col-12 my-5 text-center">
                    <h3 class="display-3">Add a car!</h3>
                </div>
                <div class="col-12 register-car-form">
                    <form action="query/dbAddCars.php" method="POST">
                    <div class="mb-3">
                            <label for="vehicleName" class="form-label">Vehicle Name</label>
                            <input type="text" class="form-control" name="vehicleName" required>
                        </div>
                        <div class="mb-3">
                            <label for="vehicleModel" class="form-label">Vehicle Model</label>
                            <input type="text" class="form-control" name="vehicleModel" required>
                        </div>
                        <div class="mb-3">
                            <label for="vehicleNumber" class="form-label">Vehicle Number</label>
                            <input type="text" class="form-control" name="vehicleNumber" required>
                        </div>
                        <div class="mb-3">
                            <label for="vehicleCapacity" class="form-label">Seating Capaicty</label>
                            <input type="number" min="2" class="form-control" name="vehicleCapacity" required>
                        </div>
                        <div class="mb-3">
                            <label for="vehicleRent" class="form-label">Rent per day</label>
                            <input type="number" min="0" class="form-control" name="vehicleRent" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-section">
        <?php include 'components/footer.php'; ?>
    </section>

    <!-- Scripts included -->
    <?php include 'components/script.php'; ?>
</body>
</html>

<?php
    }
    else
    {
        header('Location: 404.php');
    }
}
else
{
    header('Location: 404.php');
}
?>