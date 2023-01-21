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
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Date of issue</th>
                                <th scope="col">Days issued for</th>
                                <th scope="col">Car Issued</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark Otto</td>
                                <td>January 25, 2023</td>
                                <td>3</td>
                                <td>Ford Ecosports</td>
                            </tr>
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