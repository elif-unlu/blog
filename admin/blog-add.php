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
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/select2/css/select2.css">
    <link rel="stylesheet" href="assets/vendor/summernote/css/summernote-bs4.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <title>Blog Add</title>
</head>

<body>
    <div class="dashboard-main-wrapper">

        <?php include ('header.php'); ?>

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header" id="top">
                            <h2 class="pageheader-title">Blog Add </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php"
                                                class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item">Blog</li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog Add</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="email-compose-fields">
                    <?php
                        if(isset($_POST['send'])){

                            $title                  = $_POST["title"];
                            $short_description 		= $_POST["short_description"];
                            $text 			        = $_POST["text"];

                            $blog_add = $db->insert('blog')
                                            ->set(array(
                                                'title' => $title,
                                                'short_description' =>  $short_description,
                                                'text' => $text,
                                                'writer' => $_SESSION['username'],
                                            ));
                
                            if ( !$blog_add ){
                                echo '<div class="alert alert-danger">An unexpected error occurred.</div>';
                            } else {
                                echo '<script language="Javascript">window.location.href="blog-list.php"</script>';
                            }
                        }
                    ?>
                    <form method="post" action="">
                        <!-- <div class="form-group">
                            <label for="inputImage" class="col-form-label">Select Image</label>
                            <input type="file" id="inputImage" name="file" class="form-control" accept="image/*">
                        </div> -->
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Title</label>
                            <input id="inputText3" type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Short Description</label>
                            <input id="inputText3" type="text" name="short_description" class="form-control">
                        </div>
                        <!-- <div class="form-group">
                            <label for="inputText3" class="col-form-label">Date</label>
                            <input id="inputText3" type="date" name="date" class="form-control">
                        </div> -->
                        <div class=" editor">
                            <div class="col-md-12 p-0">
                                <div class="form-group">
                                    <label class="control-label sr-only" for="summernote">Descriptions </label>
                                    <textarea class="form-control" id="summernote" name="text" rows="6" placeholder="Write Descriptions"></textarea>
                                </div>
                            </div>
                            <div class=" action-send">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-space" name="send" type="submit"><i class="icon s7-mail"></i> Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
           
            <?php include ('footer.php'); ?>
         
        </div>
    </div>

    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/select2/js/select2.min.js"></script>
    <script src="assets/vendor/summernote/js/summernote-bs4.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script>
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2({
                tags: true
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#summernote').summernote({
                height: 300

            });
        });
    </script>
</body>

</html>