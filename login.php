<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental | Login</title>
    <!-- Styles included -->
    <?php include 'components/css.php'; ?>
</head>

<body id="login">
    <section class="navbar-section">
        <?php include 'components/navbar.php'; ?>
    </section>
    <?php
                    if(isset($_SESSION['loginSuccess']))
                    {
                        if(!$_SESSION['loginSuccess'])
                        {
                ?>
                    <div class="build-toast">
                        <span>Login failed due to invalid credentials!</span>
                    </div>
                <?php
                        }
                        unset($_SESSION['loginSuccess']);
                    }
                ?>
    <?php
                    if(isset($_SESSION['registerSuccess']))
                    {
                        if($_SESSION['registerSuccess'])
                        {
                ?>
                    <div class="build-toast">
                        <span>Registered successfully! You can log in now...</span>
                    </div>
                <?php
                        }
                        unset($_SESSION['registerSuccess']);
                    }
                ?>
    <section class="login-form-section">
        <div class="container-flluid">
            <div class="row">
                <div class="col-12 mt-5 text-center">
                    <h2 class="display-2">Login here!</h2>
                </div>
                <div class="col-12 my-3 text-center">
                    <button class="btn btn-outline-primary" id="btn-user-login">As a user</button>
                    <button class="btn btn-outline-primary" id="btn-agency-login">As an agency</button>
                </div>
                <div class="col-12 login-form display-block" id="userLogin">
                    <?php include 'components/userLogin.php' ?>
                </div>
                <div class="col-12 login-form display-none" id="agencyLogin">
                    <?php include 'components/agencyLogin.php' ?>
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