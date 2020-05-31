<?php 

session_start();

include ('db-connection.php');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Admins</title>
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
                            <h2 class="pageheader-title">All Admins </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php"
                                                class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">All Admins</li>
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
                                <div class="table-responsive ">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name Surname</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Operations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                    $admins_list = $db->from('admins')
                                                            ->all();

                                                    foreach ($admins_list as $admins): 
                                                ?>
                                                    <tr>
                                                        <td><?=$admins['id'];?></td>
                                                        <td><?=$admins['fullname'];?></td>
                                                        <td><?=$admins['username'];?></td>
                                                        <td>
                                                            <div class="btn-group ml-auto">
                                                                <a href="admin-edit.php?id=<?=$admins['id']?>" class="btn btn-sm btn-outline-light">Edit</a>
                                                                <a onclick="return confirm('Are you sure?')" href="admin-delete.php?id=<?=$admins['id']?>" class="btn btn-sm btn-outline-light"><i class="far fa-trash-alt"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
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
    <script src="assets/vendor/custom-js/jquery.multi-select.html"></script>
    <script src="assets/libs/js/main-js.js"></script>
</body>

</html>