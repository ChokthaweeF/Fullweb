<!doctype html>
<html lang="en">

<head>
    <?php
    $page = "product_list_for_customer";
    include "htmlhead.php";
    ?>
</head>

<body>
    <div class="container bg-white p-2 my-2">
        <?php
        include "navbar.php";
        ?>


        <?php
        require_once "connect_db.php";
        $pid = $_GET['pid'];
        $sql = "SELECT * FROM product WHERE p_id = '$pid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result)
        ?>

        <h4 style="text-align: center;">รายละเอียดสินค้า</h4>
        <br>

        <div class="card mx-auto d-block" style="width: 70%; max-width: 500px">
            <img src="<?php echo "product_images/" . $row["p_image"]; ?>" class="card-img-top" alt="product">
           
            <div class="text-center card-body bg-white">
                <h5 class="card-title"><?= $row["p_name"]; ?></h5> <br>
                <p class="card-text">รายละเอียด : <?= $row["p_detail"]; ?></p> <br>
                <p class="card-text">ราคา : <?= $row["p_price"]; ?></p><br>
                <a class="bg-danger rounded-3 text-white p-2" href="" ><i class="bi bi-heart-fill"></i></a><br>
                <?php 
                include "shop.php";
                ?>
            </div>
        </div>
        <br>
        <button type="button" class="btn btn-primary d-block m-auto" onclick="window.location.href='product_list_for_customer.php'">กลับหน้าเลือกสินค้า</button>

        <br>

        <?php
        include "footer.php";
        ?>

    </div>

    </div>


</body>

</html>