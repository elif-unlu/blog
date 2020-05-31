<?php 

    ob_start();
    session_start();

    include ('db-connection.php');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add New Admin</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<body> 
    <div class="dashboard-main-wrapper">

        <?php include ('header.php'); ?>

        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Add New Admin </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Add New Admin</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">

                            <?php
                                if(isset($_POST['add'])){

                                    $fullname          = $_POST["fullname"];
                                    $username          = $_POST["username"];
                                    $password 		   = md5($_POST["password"]);

                                    $admin_add = $db->insert('admins')
                                                    ->set(array(
                                                        'fullname' => $fullname,
                                                        'username' => $username,
                                                        'password' => $password,
                                                    ));
                        
                                    if ( !$admin_add ){
                                        echo '<div class="alert alert-danger">An unexpected error occurred.</div>';
                                    } else {
                                        echo '<script language="Javascript">window.location.href="admin-list.php"</script>';
                                    }
                                }
                            ?>
                                <form method="post" action="" id="validationform" data-parsley-validate="" novalidate="">
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Name Surname</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="fullname" required  placeholder="Name Surname" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Username</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="username" required  placeholder="Username" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Password</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input id="pass2" type="password"  name="password" required placeholder="Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row text-right">
                                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                            <button type="submit" name="add" class="btn btn-space btn-primary">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include ('footer.php'); ?>

        </div>
    </div>

    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/parsley/parsley.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script>
        $('#form').parsley();
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>