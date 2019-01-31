<?php
    session_start();
    require_once '../vendor/autoload.php';
    $login = new \App\classes\Login();
    $message = ' ';
    if (isset($_SESSION['id']))
    {
        header('Location: dashboard.php');
    }
    if (isset($_POST['btn']))
    {
        $message = $login->adminLogin($_POST);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Login</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top: 200px;">
                <div class="col-sm-5 mx-auto">
                    <div class="card" style="background-color: #6c757d">
                        <h3><?php echo $message; ?></h3>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary btn-block" name="btn">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>

</html>