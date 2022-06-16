<?php 
include('./includes/header.php');
include('./includes/functions.php'); //cho thằng này hiểu dược addPost là gì

//Nhận $id từ manage_post gửi sang"
if(isset($_GET['id']) && !empty($_GET['id'])){
    $gid = $_GET['id'];
    $testimonial = getTestimonialByID($gid);
}

if(isset($_POST['btnSave'])){
    if(!empty($_POST['txtFullName']) && !empty($_POST['txtComment'])){
        $full_name = $_POST['txtFullName'];
        $comment = $_POST['txtComment'];
        if(editTestimonial($gid, $full_name, $comment)){
            header('location: dashboard.php?page=testimonial');
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
            <form action="edit_testimonial.php?id=<?php echo $testimonial['id']; ?>" method="POST">
                <div class="card" style="width: 100%">
                    <div class="card-header">Update Testimonial</div>
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label for="full_name">Full Name</label>
                            <input type="text" class="form-control" name="txtFullName" value = "<?php echo $testimonial['full_name']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="comment">Comment</label>
                            <input type="text" class="form-control" name="txtComment" value = "<?php echo $testimonial['comment']; ?>">
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