<?php
session_start();
include('./includes/header.php');
include('./includes/functions.php');
if(isset($_POST['btnSave'])){
    if(!empty($_POST['txtTitle']) && !empty($_POST['txtDescription']) && !empty($_POST['txtDate']) && !empty($_POST['txtImage']) && !empty($_POST['txtDemo'])){
        $title = $_POST['txtTitle'];
        $description = $_POST['txtDescription'];
        $date  = $_POST['txtDate'];
        $image  = $_POST['txtImage'];
        $demo  = $_POST['txtDemo'];
        if(addProject($title, $description, $date, $image, $demo, $_SESSION['user']['id'])){
            header('location: dashboard.php?page=project');
        }else{
            echo "<h3 class='bg-dark text-white'>Không thành công</h3>";
        }
    }else{
        echo "<h3 class='bg-dark text-white'>Bạn chưa nhập dữ liệu</h3>";
    }
}
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="add_project.php" method="POST">
                <div class="card" style="width: 100%">
                    <div class="card-header">Add Project</div>
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label for="title">Title</label>
                            <input type="text" id="title" class="form-control" name="txtTitle">
                        </div>
                        <div class="form-group mb-2">
                            <label for="description">Description</label>
                            <textarea name="txtDescription" id="description" cols="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label for="date">Date</label>
                            <input type="date" id="date" class="form-control" name="txtDate">
                        </div>
                        <div class="form-group mb-2">
                            <label for="image">Image</label>
                            <input type="text" id="image" class="form-control" name="txtImage">
                        </div>
                        <div class="form-group mb-2">
                            <label for="demo">Demo</label>
                            <input type="text" id="demo" class="form-control" name="txtDemo">
                        </div>
                        <div class="form-group mb-2 mt-3">
                            <button type="submit" name="btnSave" class="btn btn-primary w-25">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
    include('./includes/footer.php');
?>