<!doctype html>
<html lang="en">

<head>
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
        
            <form action="checklogin.php" method="POST">
            <div class="form_panel rounded-3">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="อีเมล" id="username" name="username">
                </div>
                <br>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="รหัสผ่าน" id="pwd" name="password">
                </div>
                <br>
                </div>
                <div class="container mt-3 text-center">
                    <button type="submit" class="bg-dark rounded-3 text-white btn">เข้าสู่ระบบ</button><br>
                    <br><a class="mt-2 ss container text-center" href="register.php">ยังไม่เป็นสมาชิก? สมัครสมาชิก</a>
                </div>
                <br>
            </form>
        <?php
        
        include("footer.php");
        ?>
    </div>
    

    


</body>

</html>