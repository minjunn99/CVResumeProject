<?php
    include(dirname(__FILE__)."/includes/header.php");
?>

<main>
    <?php 
        require("./Core/Database.php");
        require("./Models/BaseModel.php");
        require("./Controllers/BaseController.php");

        if(isset($_REQUEST['controller'])) {
            $controllerName = ucfirst(strtolower($_REQUEST['controller'])) . 'Controller';
        } else {
            $controllerName = "HomeController";
        }

        $actionName = $_REQUEST['action'] ?? 'index';

        require("./Controllers/${controllerName}.php");

        $controllerObj = new $controllerName;
        $controllerObj->$actionName();
    ?>
</main>

<?php include(dirname(__FILE__)."/includes/footer.php"); ?>