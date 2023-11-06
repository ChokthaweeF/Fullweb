<!doctype html>
<html lang="en">

<head>
    <?php
    $page = "register";
    include("htmlhead.php");
    ?>
</head>

<body>
    <div class="container bg-white p-2 my-2 ">
        <?php
        include("navbar.php");
        ?>
        <div class="d-flex justify-content-center">
        <div class="col-md-6 col-md-offset-3 ">
        <div class="panel panel-primary "> 
            <div class="panel-heading text-center">
                <h1>Registration Form</h1>
            </div>
            <div class="panel-body">
                <form action="connect.php" method="post">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="firstName"
                            name="firstName"
                        />
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="lastName"
                            name="lastName"
                        />
                    </div>
              
                    <div class="form-group">
                        <label for="email">Username</label>
                        <input
                            type="text"
                            class="form-control"
                            id="username"
                            name="username"
                        />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                        />
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" />
                </form>
            </div>
            <div class="panel-footer text-right">
                <small>&copy; Anantapron</small>
            </div>
        </div>
        </div>
        </div>
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true"></div>
        <?php
        include("footer.php");
        ?>
    </div>