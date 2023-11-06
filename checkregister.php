<?php
session_start();

include 'connect_db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result)

?>

<?php

// ตรวจสอบรหัสผ่าน
if ($password != $confirm_password) {
    echo "รหัสผ่านไม่ตรงกัน";
    exit();
}

// ทำการเพิ่มข้อมูลลงในฐานข้อมูล (ถ้ามี)

// สามารถใส่โค้ดเพื่อเพิ่มข้อมูลลงในฐานข้อมูลต่อไปนี้


// ตรวจสอบคำสั่ง SQL ว่าสำเร็จหรือไม่
if ($result) {
    echo "ลงทะเบียนเรียบร้อยแล้ว";
    $_SESSION["username_id"] = $row["username_id"];
    $_SESSION["username"] = $row["username"];

    session_write_close();

} else {
    echo "มีบางอย่างผิดพลาด";
}

?>
<?php

mysqli_close($conn);

?>


