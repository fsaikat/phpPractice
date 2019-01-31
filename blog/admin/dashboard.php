<?php
    session_start();
    require_once '../vendor/autoload.php';
    $logout = new \App\classes\Login();

    if ($_SESSION['id']== null)
    {
        header('Location: index.php');
    }
    if (isset($_GET['logout']))
    {
        $logout->adminLogout();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    </head>
    <body>
        <?php include_once 'includes/menu.php'; ?>



        <script src="../assets/js/jquery-3.3.1.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
