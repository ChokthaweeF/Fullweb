<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
    $page = "admin";
    include("htmlhead.php");
    ?>
</head>
<body>

    <div class="container bg-white p-2 my-2">
        <?php
        include("navbar.php");
        ?>
        <h2 class="cv" style="text-align: center;">Login</h2>

        <form action="signin_db.php" method="post">
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
            <div class="form_panel rounded-3">
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="email">
            </div>
            <br>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <br>
            </div>
            <div class="container mt-3 text-center">
            <button type="submit" class="bg-dark rounded-3 text-white btn" name="signin">Sign In</button><br>
            </div>
            <div class="container mt-3 text-center">
            <p>ยังไม่เป็นสมาชิกใช่ไหม คลิ๊กที่นี่เพื่อ <a href="register.php">สมัครสมาชิก</a></p>
            </div>
        </form>
        <?php
        include("footer.php");
        ?>
    </div>
    
</body>
</html>