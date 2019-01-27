<?php

    require_once 'vendor/autoload.php';
    use App\classes\Name;
    $result=' ';
    if(isset($_POST['btn'])){
//        $fullName = new App\classes\ Name();
        $result = Name::makeFullName($_POST['first_name'],$_POST['last_name']);
    }
?>

<div class="col-sm-8">
    <form action="" method="post">
        <div class="form-group row">
            <label class="col-sm-4">First Name</label>
            <div class="col-sm-4">
                <input type="text" name="first_name" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4">Last Name</label>
            <div class="col-sm-4">
                <input type="text" name="last_name" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4">Full Name</label>
            <div class="col-sm-4">
                <input type="text" value="<?php echo $result; ?>" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4"></label>
            <div class="col-sm-4">
                <input type="submit" name="btn" value="Submit" class="form-control">
            </div>
        </div>
    </form>
</div>

