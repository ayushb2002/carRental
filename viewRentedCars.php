<?php

session_start();

if(isset($_SESSION['loginSuccess']))
{
    if($_SESSION['agency'] == 1)
    {

    include 'query/returnLease.php';

    $result = returnLease();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental | View Rented Cars</title>
    <!-- Styles included -->
    <?php include 'components/css.php'; ?>
</head>

<body>
    <section class="navbar-section">
        <?php include 'components/navbar.php'; ?>
    </section>
    <!-- Navbar Ends -->
    <section class="view-rented-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 my-5 text-center">
                    <h3 class="display-3">Cars rented by you!</h3>
                </div>
                <div class="col-12 p-5">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Buyer</th>
                                <th scope="col">Date of issue</th>
                                <th scope="col">Days issued for</th>
                                <th scope="col">Car Issued</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['user'] ?></td>
                                        <td><?php echo $row['date'] ?></td>
                                        <td><?php echo $row['days'] ?></td>
                                        <td><?php echo $row['number'] ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>

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