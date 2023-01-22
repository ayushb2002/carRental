<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental | 404 Error</title>
    <!-- Styles included -->
    <?php include 'components/css.php'; ?>
</head>

<body>
    <section class="navbar-section">
        <?php include 'components/navbar.php'; ?>
    </section>
    
    <?php
                    if(isset($_SESSION['message']))
                    {
                ?>
                    <div class="build-toast">
                        <span><?php echo $_SESSION['message']; ?></span>
                    </div>
                <?php
                        unset($_SESSION['message']);
                    }
    ?>
    <!-- Navbar Ends -->
    <section class="not-found-section text-center">
        <h1 class="display-1">404 | Not Found :)</h1>
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