<?php

session_start();

if(isset($_SESSION['loginSuccess']))
{
    if($_SESSION['agency'] == 1)
    {
        header('Location: ../carRental/404.php');
    }
}   

include 'query/returnCars.php';
$result = returnCars();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental | View Cars</title>
    <!-- Styles included -->
    <?php include 'components/css.php'; ?>
</head>

<body>
    <section class="navbar-section">
        <?php include 'components/navbar.php'; ?>
    </section>
    <!-- Navbar Ends -->
    <section class="view-cars-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 my-5 text-center">
                    <h4 class="display-4">Available cars to rent!</h4>
                </div>
                <div class="col-12">
                    <div class="row">
                        <?php
                               if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                        ?>
                        <!-- Card starts -->
                        <div class="col-lg-6 col-sm-12">
                            <div class="card mb-3" style="width:100%">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/500/800" class="img-fluid rounded-start"
                                            alt="picsum">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                            <div class="row g-3 align-items-center">
                                                <div class="col-12">
                                                    <table class="table">
                                                        <thead>
                                                            <th scope="col">Model</th>
                                                            <th scope="col">Number</th>
                                                            <th scope="col">Seats</th>
                                                            <th scope="col">Rent</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $row['model']; ?></td>
                                                                <td><?php echo $row['number']; ?></td>
                                                                <td><?php echo $row['capacity']; ?></td>
                                                                <td>Rs. <?php echo $row['rent']; ?>/day</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <?php

                                                if(isset($_SESSION['loginSuccess']))
                                                {
                                                ?>
                                                <form action="query/dbLeased.php" method="POST">
                                                    <input type="hidden" name="agency" value="<?php echo $row['agency'] ?>">
                                                    <input type="hidden" name="vehicleNumber" value="<?php echo $row['number'] ?>">
                                                <div class="col-12 form-group mb-3">
                                                    <label class="form-label">Enter number of days to rent the car</label>
                                                    <select class="form-select" name="days">
                                                        <option selected disabled>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 form-group mb-3">
                                                    <label class="form-label">Date to rent car from</label>
                                                    <input type="date" name="rentDate" name="rentDate" class="form-control">
                                                </div>
                                                <div class="col-12 form-group">
                                                    <button class="btn btn-success">Rent this car</button>
                                                </div>
                                                </form>
                                                <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                    <div class="text-center">
                                                        <a href="login.php">
                                                        <button class="btn btn-danger">Log in to rent this!</button>
                                                        </a>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card ends -->
                        <?php

                            }
                        }
                        else
                        {
                            echo '<h1>No records found!</h1>';
                        }
                        ?>
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