<?php


namespace App\classes;


class Student
{
    private function dbConnection()
    {
        $localhost = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'crud';
        $link = mysqli_connect($localhost,$username,$password,$dbname);
        return $link;
    }
    public function saveStudent($data)
    {
        $sql = "INSERT INTO student (name,email,phone) VALUES ('$data[name]','$data[email]','$data[phone]')";

        if (mysqli_query(Student::dbConnection(),$sql)){
            $message = 'Saved Successfully';
            return $message;
        }
        else{
            die('Query Problem'.mysqli_error(Student::dbConnection()));
        }

    }

    public function showStudentInfo()
    {
        $sql = "SELECT * FROM student";
        if (mysqli_query(Student::dbConnection(),$sql)){
            $result = mysqli_query(Student::dbConnection(),$sql);
            return $result;
        }
        else{
            die('Query Problem'.mysqli_error(Student::dbConnection()));
        }
    }

    public function getStudentByID($id)
    {
        $sql = "SELECT * FROM student WHERE id=$id";
        if (mysqli_query(Student::dbConnection(),$sql)){
            $result = mysqli_query(Student::dbConnection(),$sql);
            return $result;
        }
        else{
            die('Query Problem'.mysqli_error(Student::dbConnection()));
        }
    }

    public  function updateStudent($data)
    {
        $sql = "UPDATE student SET name='$data[name]', email='$data[email]', phone='$data[phone]' WHERE id = '$data[id]' ";
        if (mysqli_query(Student::dbConnection(),$sql)){
            header('Location: view-student.php');
            $message = 'Updated Successfully';
            return $message;
        }
        else{
            die('Query Problem'.mysqli_error(Student::dbConnection()));
        }
    }

    public function deleteStudent($id)
    {
        $sql = "DELETE FROM student WHERE id = $id";
        if (mysqli_query(Student::dbConnection(),$sql)){
            header('Location: view-student.php');
            $message = 'Deleted Successfully';
            return $message;
        }
        else{
            die('Query Problem'.mysqli_error(Student::dbConnection()));
        }
    }
}