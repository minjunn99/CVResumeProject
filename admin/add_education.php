<?php
session_start();
include('./includes/header.php');
include('./includes/functions.php');
if(isset($_POST['btnSave'])){
    if(!empty($_POST['txtName']) && !empty($_POST['txtDetail']) && !empty($_POST['txtDateStart']) && !empty($_POST['txtDateEnd'])){
        $name = $_POST['txtName'];
        $detail = $_POST['txtDetail'];
        $date_start  = $_POST['txtDateStart'];
        $date_end  = $_POST['txtDateEnd'];
        if(addEducation($name, $detail, $date_start, $date_end, $_SESSION['user']['id'])){
            header('location: dashboard.php');
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
            <form action="add_education.php" method="POST">
                <div class="card" style="width: 100%">
                    <div class="card-header">Add Education</div>
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" name="txtName">
                        </div>
                        <div class="form-group mb-2">
                            <label for="detail">Detail</label>
                            <textarea name="txtDetail" id="detail" cols="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label for="date_start">Date Start</label>
                            <input type="text" id="date_start" class="form-control" name="txtDateStart">
                        </div>
                        <div class="form-group mb-2">
                            <label for="date_end">Date End</label>
                            <input type="text" id="date_end" class="form-control" name="txtDateEnd">
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