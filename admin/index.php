<?php
session_start();
$_SESSION['user'] = [];

include(dirname(__FILE__)."/includes/header.php");

?>

<main class="form-signin">
  <?php
    if(empty($_SESSION['user'])) {
      include("./signin.php");
    } else {
      include("./dashboard.php");
    }
  ?>
</main>

<?php include(dirname(__FILE__)."/includes/footer.php"); ?>