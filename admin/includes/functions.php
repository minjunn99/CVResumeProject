<?php
function getEducationInfo($id){
    // B1. Ket noi CSDL
    $conn = mysqli_connect('localhost','root','','cvresume');
    if(!$conn){
        die("Ko the ket noi");
    }
    // B2. Truy van
    $sql = "SELECT * FROM education WHERE id_member='$id'";
    $result = mysqli_query($conn,$sql);

    // B3. Xu ly ket qua
    $arr=[];
    while($row = mysqli_fetch_assoc($result)){
        array_push($arr,$row);
    }

    // B4. Dong ket noi
    mysqli_close($conn);
    return $arr;
}

function getEmploymentInfo($id){
    // B1. Ket noi CSDL
    $conn = mysqli_connect('localhost','root','','cvresume');
    if(!$conn){
        die("Ko the ket noi");
    }
    // B2. Truy van
    $sql = "SELECT * FROM employment WHERE id_member='$id'";
    $result = mysqli_query($conn,$sql);

    // B3. Xu ly ket qua
    $arr=[];
    while($row = mysqli_fetch_assoc($result)){
        array_push($arr,$row);
    }

    // B4. Dong ket noi
    mysqli_close($conn);
    return $arr;
}

function getProjectInfo($id){
    // B1. Ket noi CSDL
    $conn = mysqli_connect('localhost','root','','cvresume');
    if(!$conn){
        die("Ko the ket noi");
    }
    // B2. Truy van
    $sql = "SELECT * FROM project WHERE id_member='$id'";
    $result = mysqli_query($conn,$sql);

    // B3. Xu ly ket qua
    $arr=[];
    while($row = mysqli_fetch_assoc($result)){
        array_push($arr,$row);
    }

    // B4. Dong ket noi
    mysqli_close($conn);
    return $arr;
}

function getTestimonialInfo($id){
    // B1. Ket noi CSDL
    $conn = mysqli_connect('localhost','root','','cvresume');
    if(!$conn){
        die("Ko the ket noi");
    }
    // B2. Truy van
    $sql = "SELECT * FROM testimonial WHERE id_member='$id'";
    $result = mysqli_query($conn,$sql);

    // B3. Xu ly ket qua
    $arr=[];
    while($row = mysqli_fetch_assoc($result)){
        array_push($arr,$row);
    }

    // B4. Dong ket noi
    mysqli_close($conn);
    return $arr;
}

function getContactInfo($id){
    // B1. Ket noi CSDL
    $conn = mysqli_connect('localhost','root','','cvresume');
    if(!$conn){
        die("Ko the ket noi");
    }
    // B2. Truy van
    $sql = "SELECT * FROM contact WHERE id_member='$id'";
    $result = mysqli_query($conn,$sql);

    // B3. Xu ly ket qua
    $arr=[];
    while($row = mysqli_fetch_assoc($result)){
        array_push($arr,$row);
    }

    // B4. Dong ket noi
    mysqli_close($conn);
    return $arr;
}
?>