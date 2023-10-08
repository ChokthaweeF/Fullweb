<nav class="navbar navbar-expand-lg navbar-light my-1">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="Pic/logo.png" alt="" width="50" class="d-inline-block align-text-center">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == "index") { ?>active<?php } ?>" href="index.php"><i class="bi bi-house-door"></i> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link <?php if ($page == "admin") { ?>active<?php } ?> dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-bag"></i> Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="type.php">Type of shoes</a></li>
                            <li><a class="dropdown-item" href="product_list_for_customer.php">Shop</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == "reviews") { ?>active<?php } ?>" href="reviews.php" ><i class="bi bi-bookmark-heart"></i> Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == "contact") { ?>active<?php } ?>" href="contact.php"><i class="bi bi-person-rolodex"></i> Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavRight">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link bg-dark rounded-3 text-white" href="logout.php"><i class="bi bi-person"></i>Log out</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>
    <h1 class="ca text-center container my-2">Anantapron</h1>
    <br>