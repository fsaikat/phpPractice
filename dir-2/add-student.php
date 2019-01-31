<?php
require_once 'vendor/autoload.php';
use App\classes\Student;

$message=' ';
if (isset($_POST['submit']))
{
    $message = Student::saveStudent($_POST);
}

?>
<a href="add-student.php">Add Student</a>
<a href="view-student.php">View Student</a>

<h1><?php echo $message; ?></h1>
<form action="" method="post">
    <table>
       <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="number" name="phone"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>
