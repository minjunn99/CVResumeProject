<?php
session_start();
include('./includes/header.php');
include('./includes/functions.php');
if(isset($_POST['btnSave'])){
    if(!empty($_POST['txtFullName']) && !empty($_POST['txtComment'])){
        $full_name = $_POST['txtFullName'];
        $comment = $_POST['txtComment'];
        if(addTestimonial($full_name, $comment, $_SESSION['user']['id'])){
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
            <form action="add_testimonial.php" method="POST">
                <div class="card" style="width: 100%">
                    <div class="card-header">Add Testimonial</div>
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label for="full_name">Full Name</label>
                            <input type="text" id="full_name" class="form-control" name="txtFullName">
                        </div>
                        <div class="form-group mb-2">
                            <label for="comment">Comment</label>
                            <textarea name="txtComment" id="comment" cols="10" class="form-control"></textarea>
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