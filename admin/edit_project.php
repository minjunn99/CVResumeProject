<?php 
include('./includes/header.php');
include('./includes/functions.php'); //cho thằng này hiểu dược addPost là gì

//Nhận $id từ manage_post gửi sang"
if(isset($_GET['id']) && !empty($_GET['id'])){
    $gid = $_GET['id'];
    $project = getProjectByID($gid);
}

if(isset($_POST['btnSave'])){
    if(!empty($_POST['txtTitle']) && !empty($_POST['txtDescription']) && !empty($_POST['txtDate']) && !empty($_POST['txtImage']) && !empty($_POST['txtDemo'])){
        $title = $_POST['txtTitle'];
        $description = $_POST['txtDescription'];
        $date  = $_POST['txtDate'];
        $image  = $_POST['txtImage'];
        $demo  = $_POST['txtDemo'];
        if(editProject($gid, $title, $description, $date, $image, $demo)){
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
            <form action="edit_project.php?id=<?php echo $project['id']; ?>" method="POST">
                <div class="card" style="width: 100%">
                    <div class="card-header">Update Project</div>
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="txtTitle" value = "<?php echo $project['title']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" name="txtDescription" value = "<?php echo $project['description']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" name="txtDate" value = "<?php echo $project['date']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="image">Image</label>
                            <input type="text" class="form-control" name="txtImage" value = "<?php echo $project['image']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="demo">Demo</label>
                            <input type="text" class="form-control" name="txtDemo" value = "<?php echo $project['demo']; ?>">
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