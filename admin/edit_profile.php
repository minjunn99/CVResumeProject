<?php
session_start();

include('./includes/functions.php');
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $user_id = $_GET['id'];
}

if(!empty($_POST['full_name']) && !empty($_POST['description']) && !empty($_POST['image'])) {
    $full_name = $_POST['full_name'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    if(editMember($user_id, $full_name, $description, $image)){
        $_SESSION['user'] = getMemberByID($user_id);
        header('location: dashboard.php?page=profile');
    }else{
        echo "<h3 class='bg-dark text-white'>Không thành công</h3>";
    }
} else {
    echo "<h3 class='bg-dark text-white'>Bạn chưa nhập dữ liệu</h3>";
}