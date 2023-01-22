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
    <title>Car Rental | Edit car data</title>
    <!-- Styles included -->
    <?php include 'components/css.php'; ?>
</head>

<body>
    <section class="navbar-section">
        <?php include 'components/navbar.php'; ?>
    </section>
    <section class="edit-cars-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-5 text-center">
                    <h6 class="display-6">Edit vehicle information</h6>
                </div>
                <?php
                if(!isset($_SESSION['editForm']))
                {
                    ?>
                    <div class="col-12 card-number-form-container">
                    <form action="query/returnCarByNumber.php" method="POST" class="car-number-form">
                        <div class="mb-3">
                            <label class="form-label">Enter vehicle number</label>
                            <input type="text" name="vehicleNumber" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success">Edit</button>
                        </div>
                    </form>
                </div>
                    <?php
                }
                if(isset($_SESSION['editForm']))
                    {
                ?>
                <div class="col-12 p-5">
                        <form action="query/updateCarDetails.php" method="POST">
                            <div class="mb-3 text-center">
                                <span>Tip:- Don't change anything unless you want to update it!</span>
                            </div>
                        <div class="mb-3">
                            <label class="form-label">Vehicle Name</label>
                            <input type="text" name="vehicleName" value="<?php echo $_SESSION['vehicleName']; ?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Vehicle Model</label>
                            <input type="text" name="vehicleModel" value="<?php echo $_SESSION['vehicleModel']; ?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Vehicle Number</label>
                            <input type="text" name="vehicleNumber" value="<?php echo $_SESSION['vehicleNumber']; ?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Vehicle Capacity</label>
                            <input type="number" min="2" name="vehicleCapacity" value="<?php echo $_SESSION['vehicleCapacity']; ?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Vehicle Rent</label>
                            <input type="number" min="0" name="vehicleRent" value="<?php echo $_SESSION['vehicleRent']; ?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success">Update Data</button>
                        </div>
                        </form>
                </div>
                <?php
                    }
                ?>
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