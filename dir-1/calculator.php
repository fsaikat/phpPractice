<?php
    $result = ' ';
    if(isset($_POST['btn']))
    {
        require_once 'Name.php';
        $calculator = new Name();
        $result = $calculator->myCalculator($_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 m-auto">
            <div class="card">
                <div class="card-body" style="background-color: #1b1e21">
                    <form action="" method="post">
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label" style="color: #005cbf;">First Number</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" value="<?php if (isset($_POST['first_number'])){echo $_POST['first_number'];} ?>" name="first_number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label" style="color: #005cbf">Second Number</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" value="<?php if (isset($_POST['second_number'])){echo $_POST['second_number'];} ?>" name="second_number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label" style="color: #005cbf">Result</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" value="<?php echo $result; ?>" id="result">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8">
                                <input type="submit" class="btn btn-success" name="btn" value="+" id="add">
                                <input type="submit" class="btn btn-success" name="btn" value="-" id="sub">
                                <input type="submit" class="btn btn-success" name="btn" value="*" id="mul">
                                <input type="submit" class="btn btn-success" name="btn" value="/" id="div">
                                <input type="submit" class="btn btn-success" name="btn" value="%" id="rem">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!--<script>-->
<!--function demo(firstName,lastName) {-->
<!--var fullName=firstName+' '+lastName;-->
<!--document.write(fullName);-->
<!--}-->

<!--demo('Faisal','Saikat')-->
<!---->
<!---->
<!--</script>-->





<script src="js/jquery-3.3.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/my-script.js"></script>
</body>
</html>
