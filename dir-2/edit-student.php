<?php
    require_once 'vendor/autoload.php';
    use App\classes\Student;

    $id = $_GET['id'];
    $result = Student::getStudentByID($id);
    $res = mysqli_fetch_assoc($result);
    $message = ' ';

    if (isset($_POST['update']))
    {
        $message = Student::updateStudent($_POST);
    }

?>

<a href="add-student.php">Add Student</a>
<a href="view-student.php">View Student</a>

<h1><?php echo $message; ?></h1>

<form action="" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td> <input type="text" name="name" value="<?php echo $res['name'] ?>">
                 <input type="hidden" name="id" value="<?php echo $res['id'] ?>">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?php echo $res['email'] ?>"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="number" name="phone" value="<?php echo $res['phone'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
