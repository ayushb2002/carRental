<?php
    session_start();
    if(isset($_SESSION['email']))
    {
        ?>
<h1>Page not found!</h1>
        <?php
    }
    else
    {
        include 'query/dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental | Register</title>
    <!-- Styles included -->
    <?php include 'components/css.php'; ?>
</head>

<body id="register">
    <section class="navbar-section">
        <?php include 'components/navbar.php'; ?>
    </section>
    <section class="register-form-section">
        <div class="container-flluid">
            <div class="row">
                <div class="col-12 mt-5 text-center">
                    <h2 class="display-2">Register here!</h2>
                </div>
                <div class="col-12 my-3 text-center">
                    <button class="btn btn-outline-primary" id="btn-user-register">As a user</button>
                    <button class="btn btn-outline-primary" id="btn-agency-register">As an agency</button>
                </div>
                <div class="col-12 register-form display-block" id="userRegister">
                    <?php include 'components/userRegister.php' ?>
                </div>
                <div class="col-12 register-form display-none" id="agencyRegister">
                    <?php include 'components/agencyRegister.php' ?>
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
?>