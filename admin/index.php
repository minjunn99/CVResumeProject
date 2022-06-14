<?php
session_start();
$_SESSION['user'] = [];

include(dirname(__FILE__)."/includes/header.php");

?>

<?php
  if(empty($_SESSION['user'])) {
    include("./signin.php");
  } else {
    include("./dashboard.php");
  }
?>

<?php include(dirname(__FILE__)."/includes/footer.php"); ?>