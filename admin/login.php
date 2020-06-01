<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><img class="logo-img" src="assets/images/login.png" alt="logo"><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <?php 
                ob_start();
                session_start();
                include ('db-connection.php');

                    if(isset($_POST["signin"])) {
                        $user = $db->from('admins')
                            ->where('username', $_POST["name"])
                            ->where('password', md5($_POST["password"]))
                            ->first();

                        if (!$user) {
                            echo '<div class="alert alert-danger">Your username or password is incorrect!</div>';
                        } else {
                            $_SESSION["login"] = true;
                            $_SESSION["username"] = $user['username'];
                            $_SESSION["fullname"] = $user['fullname'];
                            echo '<script language="Javascript">window.location.href="index.php"</script>';
                        }
                    }
                ?>
        
                <form method="post" action="" style="margin-bottom:20px;">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" name="name" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Password">
                    </div>
                    
                    <button type="submit" name="signin" class="btn btn-primary btn-lg btn-block">Sign In</button>
                </form>
            </div>
           
        </div>
    </div>

    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>