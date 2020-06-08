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
    <title>Custom Texts</title>
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
                            <h2 class="pageheader-title">Custom Texts</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Dashboard</a> </li>
                                        <li class="breadcrumb-item active" aria-current="page">Custom Texts</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    if(isset($_POST['send'])){
                                    
                        $id = $_GET['id'];

                        $custom1                = $_POST["custom1"];
                        $custom2 		        = $_POST["custom2"];
                        $custom3                = $_POST["custom3"];
                        $custom4 		        = $_POST["custom4"];
                       

                        $customs = $db->update('customtext')
                                        ->where('id', 1)
                                        ->set(array(
                                            'custom1'       => $custom1,
                                            'custom2'       => $custom2,
                                            'custom3'       => $custom3,
                                            'custom4'       => $custom4,
                                        ));


                        if($customs){
                            echo '<div class="alert alert-success">Custom texts are successfully edit.</div>';
                        } else {
                            echo '<div class="alert alert-danger">An unexpected error occurred.</div>';
                        }
                    }

                    $custom = $db->from('customtext')
                                    ->first();


                ?>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                        <div class="tab-outline">
                                
                        <form action="" method="post">
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="tab-outline-one">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="custom1" class="col-form-label">Custom Text 1</label>
                                                <input id="custom1" name="custom1"  value="<?=$custom['custom1']?>" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="custom2" class="col-form-label">Custom Text 2</label>
                                                <input id="custom2" name="custom2"  value="<?=$custom['custom2']?>" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="custom3" class="col-form-label">Custom Text 3</label>
                                                <input id="custom3" name="custom3"  value="<?=$custom['custom3']?>" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="custom4" class="col-form-label">Custom Text 4</label>
                                                <input id="custom4" name="custom4"  value="<?=$custom['custom4']?>" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-secondary btn-space" name="send" type="submit"> Save</button>
                                </div>
                            </div>
                        </form>

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
    <script src="assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
    <script src="assets/vendor/inputmask/js/jquery.mask.js"></script>

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