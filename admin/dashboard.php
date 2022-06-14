<?php
session_start();

include(dirname(__FILE__)."/includes/header.php");
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'education';
}
?>
<main>
    <div class = "d-flex">
        <?php 
        include("./includes/sidebar.php");
        include("./${page}.php");
        ?>
    </div>
</main>

<?php include(dirname(__FILE__)."/includes/footer.php"); ?>