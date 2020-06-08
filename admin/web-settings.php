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
    <title>Website Settings</title>
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
                            <h2 class="pageheader-title">Website Settings </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php"
                                                class="breadcrumb-link">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Website Settings</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    if(isset($_POST['send'])){
                                    
                        $id = $_GET['id'];

                        $title                  = $_POST["title"];
                        $author 		        = $_POST["author"];
                        $description 			= $_POST["description"];
                        $keywords 			    = $_POST["keywords"];
                        $address 			    = $_POST["address"];
                        $phone 			        = $_POST["phone"];
                        $email 			        = $_POST["email"];
                        $facebook 			    = $_POST["facebook"];
                        $instagram 			    = $_POST["instagram"];
                        $twitter 			    = $_POST["twitter"];
                        $linkedin 			    = $_POST["linkedin"];
                        $pinterest 			    = $_POST["pinterest"];


                        $settings = $db->update('setting')
                                        ->where('id', 1)
                                        ->set(array(
                                            'title'         => $title,
                                            'author'        =>  $author,
                                            'description'   => $description,
                                            'keywords'      => $keywords,
                                            'address'       => $address,
                                            'phone'         => $phone,
                                            'email'         => $email,
                                            'facebook'      => $facebook,
                                            'instagram'     => $instagram,
                                            'twitter'       => $twitter,
                                            'linkedin'      => $linkedin,
                                            'pinterest'     => $pinterest,
                                        ));

                        if($settings){
                            echo '<div class="alert alert-success">Website settings are successfully edit.</div>';
                        } else {
                            echo '<div class="alert alert-danger">An unexpected error occurred.</div>';
                        }
                    }

                    $setting = $db->from('setting')
                                    ->first();
                ?>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                        <div class="tab-outline">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab-outline-one" data-toggle="tab" href="#general" role="tab" aria-controls="home" aria-selected="true">
                                        General Settings
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-outline-two" data-toggle="tab" href="#contact" role="tab" aria-controls="profile" aria-selected="false">
                                        Contact Information
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-outline-three" data-toggle="tab" href="#social" role="tab" aria-controls="contact" aria-selected="false">
                                        Social Media
                                    </a>
                                </li>
                            </ul>
                                
                        <form action="" method="post">
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="tab-outline-one">
                                    
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Title</label>
                                            <input id="inputText3" name="title"  value="<?=$setting['title']?>" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText2" class="col-form-label">Author</label>
                                            <input id="inputText2" name="author"  value="<?=$setting['author']?>" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" name="description" id="description" rows="3"><?=$setting['description']?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="keywords">Keywords</label>
                                            <textarea class="form-control" name="keywords" id="keywords" rows="3"><?=$setting['keywords']?></textarea>
                                        </div>

                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="tab-outline-two">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <textarea class="form-control" name="address" id="address" rows="3"><?=$setting['address']?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone <small class="text-muted">0 (999) 999-9999</small></label>
                                            <input type="text" name="phone" value="<?=$setting['phone']?>" class="form-control phone" id="phone" >
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">E-Mail</label>
                                            <input id="inputEmail" type="email" name="email" value="<?=$setting['email']?>" class="form-control">
                                        </div>
                                </div>
                                <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="tab-outline-three">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Facebook</label>
                                            <input id="inputText3" type="text" name="facebook" value="<?=$setting['facebook']?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Instagram</label>
                                            <input id="inputText3" type="text" name="instagram" value="<?=$setting['instagram']?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Twitter</label>
                                            <input id="inputText3" type="text" name="twitter" value="<?=$setting['twitter']?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Likedin</label>
                                            <input id="inputText3" type="text" name="linkedin" value="<?=$setting['linkedin']?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Pinterest</label>
                                            <input id="inputText3" type="text" name="pinterest" value="<?=$setting['pinterest']?>" class="form-control">
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
    <!-- <script>
        $(function (e) {
            "use strict";
                $(".phone-inputmask").inputmask("(999) 999-9999"),
                $(".international-inputmask").inputmask("+99 (999) 999-9999"),
               
                $(".email-inputmask").inputmask({
                    mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
                    greedy: !1,
                    onBeforePaste: function (n, a) {
                        return (e = e.toLowerCase()).replace("mailto:", "")
                    },
                    definitions: {
                        "*": {
                            validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
                            cardinality: 1,
                            casing: "lower"
                        }
                    }
                })
        });
    </script> -->

    <script>
        $(document).ready(function(){
            $('.phone').mask('# (000) 000 0000', {translation:  {'#': {pattern: /0/, fallback: '0'}}});
        });
    </script>
</body>

</html>