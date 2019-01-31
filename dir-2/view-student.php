<?php
    require_once 'vendor/autoload.php';
    use App\classes\Student;

    $result = Student::showStudentInfo();
    $message = ' ';

    if(isset($_GET['delete']))
    {
        $id = $_GET['id'];
        $message = Student::deleteStudent($id);
    }
?>

<a href="add-student.php">Add Student</a>
<a href="view-student.php">View Student</a>

<h1><?php echo $message; ?></h1>
<table border="1px solid">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    <?php while ($res = mysqli_fetch_assoc($result)) {?>
    <tr>
        <td><?php echo $res['id']; ?></td>
        <td><?php echo $res['name']; ?></td>
        <td><?php echo $res['email']; ?></td>
        <td><?php echo $res['phone']; ?></td>
        <td>
            <a href="edit-student.php?id=<?php echo $res['id']; ?>" >Edit</a>
            <a href="?delete=true&id=<?php echo $res['id']; ?>" >Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
