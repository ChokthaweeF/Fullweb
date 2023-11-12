<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['admin_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

?>
<!doctype html>
<html lang="en">

<head>
    <?php
    $page = "admin";
    include "htmlhead.php";
    ?>
</head>

<body>
    <div class="container bg-light p-2 my-2">

        <?php
        include "navbarafter.php";
        ?>

        <div class="form_panel rounded-3 ">
            <h4 style="text-align: center;" class="text-white">เพิ่มรายการสินค้า</h4>
            <hr>


            <form action="product_add_save.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">

                <div class="mb-2">
                    <label for="pid" class="form-label text-white">รหัสสินค้า :</label>
                    <input type="text" class="form-control" id="pid" name="pid" placeholder=" จำนวน 4 หลัก" required>
                </div>

                <div class="mb-2">
                    <label for="pname" class="form-label text-white">ชื่อสินค้า :</label>
                    <input type="text" class="form-control" id="pname" placeholder=" ชื่อสินค้า" name="pname" required>
                </div>

                <div class="mb-2">
                    <label for="pdetail" class="form-label text-white">รายละเอียดสินค้า :</label>
                    <textarea class="form-control" id="pdetail" rows="3" placeholder="รายละเอียดสินค้า" name="pdetail" required></textarea>
                </div>
                <div class="mb-2">
                    <label for="pprice" class="form-label text-white">ราคา :</label>
                    <input type="text" class="form-control" id="pprice" placeholder="ราคาสินค้า" name="pprice" required>
                </div>

                <div class="mb-3">
                    <label for="filename" class="form-label text-white">ภาพสินค้า</label>
                    <input class="form-control" type="file" id="filename" name="filename">
                </div>


                <button type="submit" class="btn btn-primary mx-auto d-block">บันทึก</button>

            </form>

        </div>

        <?php
        include("footer.php");
        ?>


    </div>



</body>

</html>