<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">carRental</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <?php
      if(isset($_SESSION['loginSuccess']))
        {
          if($_SESSION['agency'] == 0)
            {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="viewCars.php">Available Cars</a>
          </li>
        <?php
            }
          }  
          else
          {
            ?>
           <li class="nav-item">
            <a class="nav-link" href="viewCars.php">Available Cars</a>
          </li>
            <?php
          }
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 
            if(isset($_SESSION['loginSuccess']))
            {
              if($_SESSION['loginSuccess'])
              {
            ?>
            <li><a class="dropdown-item" href="welcome.php">Profile</a></li>
            <li><a class="dropdown-item" href="query/logout.php">Logout</a></li>
            <?php
              }
            }
            else
            {
            ?>
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><a class="dropdown-item" href="register.php">Register</a></li>
            <?php
            }
            ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>