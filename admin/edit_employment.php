<?php 
include('./includes/header.php');
include('./includes/functions.php'); //cho thằng này hiểu dược addPost là gì

//Nhận $id từ manage_post gửi sang"
if(isset($_GET['id']) && !empty($_GET['id'])){
    $gid = $_GET['id'];
    $employment = getEmploymentByID($gid);
}

if(isset($_POST['btnSave'])){
    if(!empty($_POST['txtUndertake']) && !empty($_POST['txtDetail']) && !empty($_POST['txtDescription']) && !empty($_POST['txtDateStart']) && !empty($_POST['txtDateEnd'])){
        $undertake = $_POST['txtUndertake'];
        $detail = $_POST['txtDetail'];
        $description = $_POST['txtDescription'];
        $date_start  = $_POST['txtDateStart'];
        $date_end  = $_POST['txtDateEnd'];
        if(addEmployment($gid, $undertake, $detail, $description, $date_start, $date_end)){
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
            <form action="edit_employment.php?id=<?php echo $employment['id']; ?>" method="POST">
                <div class="card" style="width: 100%">
                    <div class="card-header">Update Employment</div>
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label for="undertake">Undertake</label>
                            <input type="text" class="form-control" name="txtUndertake" value = "<?php echo $employment['undertake']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="detail">Detail</label>
                            <input type="text" class="form-control" name="txtDetail" value = "<?php echo $employment['detail']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" name="txtDescription" value = "<?php echo $employment['description']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="date_start">Date Start</label>
                            <input type="text" class="form-control" name="txtDateStart" value = "<?php echo $employment['date_start']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="date_end">Date End</label>
                            <input type="text" class="form-control" name="txtDateEnd" value = "<?php echo $employment['date_end']; ?>">
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