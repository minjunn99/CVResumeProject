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

function addEducation($name, $detail, $date_start, $date_end, $id_member){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "INSERT INTO education (name, detail, date_start, date_end, id_member) VALUES ('$name', '$detail', '$date_start','$date_end', '$id_member')";
    if(mysqli_query($conn, $sql)){
        //Trường hợp thực hiện lệnh khác SELECT > Kết quả trả về TRUE ko?
        return true;
    }else{
        return false;
    }

    // 3. Dong ket noi
    mysqli_close($conn);
}

function getEducationByID($id){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "SELECT * FROM education WHERE id = '$id'"; //Vì nó là câu lệnh SELECT
    //mysqli_query trả về 1 tập kết quả
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_assoc($result);
        //Lấy ra từng bản ghi từ TẬP KẾT QUẢ và lưu tạm vào $row
    // 3. Dong ket noi
    mysqli_close($conn);
    return $rows; //Trả về 1 mảng
}

function editEducation($id, $name, $detail, $date_start, $date_end){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "UPDATE education SET name = '$name',  detail = '$detail', date_start = '$date_start', date_end = '$date_end' WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){
        //Trường hợp thực hiện lệnh khác SELECT > Kết quả trả về TRUE ko?
        return true;
    }else{
        return false;
    }

    // 3. Dong ket noi
    mysqli_close($conn);
}

function deleteEducation($id){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "DELETE FROM education WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
        //Trường hợp thực hiện lệnh khác SELECT > Kết quả trả về TRUE ko?
        return true;
    }else{
        return false;
    }

    // 3. Dong ket noi
    mysqli_close($conn);
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

function addEmployment($undertake, $detail, $description, $date_start, $date_end, $id_member){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "INSERT INTO employment (undertake, detail, description, date_start, date_end, id_member) VALUES ('$undertake', '$detail', '$description' '$date_start','$date_end', '$id_member')";
    if(mysqli_query($conn, $sql)){
        //Trường hợp thực hiện lệnh khác SELECT > Kết quả trả về TRUE ko?
        return true;
    }else{
        return false;
    }

    // 3. Dong ket noi
    mysqli_close($conn);
}

function getEmploymentByID($id){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "SELECT * FROM employment WHERE id = '$id'"; //Vì nó là câu lệnh SELECT
    //mysqli_query trả về 1 tập kết quả
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_assoc($result);
        //Lấy ra từng bản ghi từ TẬP KẾT QUẢ và lưu tạm vào $row
    // 3. Dong ket noi
    mysqli_close($conn);
    return $rows; //Trả về 1 mảng
}

function editEmployment($id, $undertake, $detail, $description, $date_start, $date_end){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "UPDATE employment SET undertake = '$undertake',  detail = '$detail', description = '$description', date_start = '$date_start', date_end = '$date_end' WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){
        //Trường hợp thực hiện lệnh khác SELECT > Kết quả trả về TRUE ko?
        return true;
    }else{
        return false;
    }

    // 3. Dong ket noi
    mysqli_close($conn);
}

function deleteEmployment($id){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "DELETE FROM employment WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
        //Trường hợp thực hiện lệnh khác SELECT > Kết quả trả về TRUE ko?
        return true;
    }else{
        return false;
    }

    // 3. Dong ket noi
    mysqli_close($conn);
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

function addProject($title, $description, $date, $image, $demo, $id_member){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "INSERT INTO project (title, description, date, image, demo, id_member) VALUES ('$title', '$description', '$date', '$image', '$demo', '$id_member')";
    if(mysqli_query($conn, $sql)){
        //Trường hợp thực hiện lệnh khác SELECT > Kết quả trả về TRUE ko?
        return true;
    }else{
        return false;
    }

    // 3. Dong ket noi
    mysqli_close($conn);
}

function getProjectByID($id){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "SELECT * FROM project WHERE id = '$id'"; //Vì nó là câu lệnh SELECT
    //mysqli_query trả về 1 tập kết quả
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_assoc($result);
        //Lấy ra từng bản ghi từ TẬP KẾT QUẢ và lưu tạm vào $row
    // 3. Dong ket noi
    mysqli_close($conn);
    return $rows; //Trả về 1 mảng
}

function editProject($id, $title, $description, $date, $image, $demo){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "UPDATE project SET title = '$title',  description = '$description', date = '$date', image = '$image', demo = '$demo' WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){
        //Trường hợp thực hiện lệnh khác SELECT > Kết quả trả về TRUE ko?
        return true;
    }else{
        return false;
    }

    // 3. Dong ket noi
    mysqli_close($conn);
}

function deleteProject($id){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "DELETE FROM project WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
        //Trường hợp thực hiện lệnh khác SELECT > Kết quả trả về TRUE ko?
        return true;
    }else{
        return false;
    }

    // 3. Dong ket noi
    mysqli_close($conn);
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

function addTestimonial($full_name, $comment, $id_member){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "INSERT INTO testimonial (full_name, comment, id_member) VALUES ('$full_name', '$comment', '$id_member')";
    if(mysqli_query($conn, $sql)){
        //Trường hợp thực hiện lệnh khác SELECT > Kết quả trả về TRUE ko?
        return true;
    }else{
        return false;
    }

    // 3. Dong ket noi
    mysqli_close($conn);
}

function getTestimonialByID($id){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "SELECT * FROM testimonial WHERE id = '$id'"; //Vì nó là câu lệnh SELECT
    //mysqli_query trả về 1 tập kết quả
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_assoc($result);
        //Lấy ra từng bản ghi từ TẬP KẾT QUẢ và lưu tạm vào $row
    // 3. Dong ket noi
    mysqli_close($conn);
    return $rows; //Trả về 1 mảng
}

function editTestimonial($id, $full_name, $comment){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "UPDATE testimonial SET full_name = '$full_name',  comment = '$comment' WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){
        //Trường hợp thực hiện lệnh khác SELECT > Kết quả trả về TRUE ko?
        return true;
    }else{
        return false;
    }

    // 3. Dong ket noi
    mysqli_close($conn);
}

function deleteTestimonial($id){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "cvresume");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "DELETE FROM testimonial WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
        //Trường hợp thực hiện lệnh khác SELECT > Kết quả trả về TRUE ko?
        return true;
    }else{
        return false;
    }

    // 3. Dong ket noi
    mysqli_close($conn);
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