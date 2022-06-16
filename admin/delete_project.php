<?php
    include('./includes/functions.php');
    // delete_post nhận dữ liệu từ manage_post.php gửi sang theo phương thức GET
    // Thằng này delete_post sẽ nhận từ $_GET

    // Nhận id cần xóa: 
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        if(deleteProject($id)){
            header("location: dashboard.php?page=project");
        }else{
            echo 'Co loi';
        }
    }
?>