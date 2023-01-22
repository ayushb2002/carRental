<?php

if(!isset($_SESSION))
{
  session_start();
}
session_unset();
session_destroy();

?>

<script>
    window.onload = () =>{
        setTimeout(() => {
            console.log('Logged out!');
        }, 1000);
    }
</script>

<?php

header('Location: ../login.php');

?>