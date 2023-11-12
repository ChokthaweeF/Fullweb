<?php 

    session_start();
    require_once 'config/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
    $page = "register";
    include("htmlhead.php");
    ?>
</head>
<body>

    <div class="container bg-white p-2 my-2">
        <?php
        include("navbar.php");
        ?>
        <h2 class="cv" style="text-align: center;">สมัครสมาชิก</h2>
        
        <form action="signup_db.php" method="post">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php 
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
                </div>
            <?php } ?>

            <div class="form_panel rounded-3">
            <div class="form-group">
                <label for="firstname" class="form-label text-white">First name</label>
                <input type="text" class="form-control" placeholder="กรุณาใส่ชื่อ" name="firstname" aria-describedby="firstname">
            </div>
            <div class="form-group">
                <label for="lastname" class="form-label text-white">Last name</label>
                <input type="text" class="form-control" placeholder="กรุณาใส่นามสกุล" name="lastname" aria-describedby="lastname">
            </div>
            <div class="form-group">
                <label for="email" class="form-label text-white">Email</label>
                <input type="email" class="form-control" placeholder="กรุณาใส่อีเมล" name="email" aria-describedby="email">
            </div>
            <div class="form-group">
                <label for="password" class="form-label text-white">Password</label>
                <input type="password" class="form-control" placeholder="กรุณาใส่รหัสผ่าน" name="password">
            </div>
            <div class="form-group">
                <label for="confirm password" class="form-label text-white">Confirm Password</label>
                <input type="password" class="form-control" placeholder="กรุณายืนยันรหัสผ่าน" name="c_password">
            </div>
            </div>
            <div class="container mt-3 text-center">
            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
            </div>
            <div class="container mt-3 text-center">
            <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ <a href="signin.php">เข้าสู่ระบบ</a></p>
            </div>
        </form>
        <br>
        
    </div>
    
</body>
</html>