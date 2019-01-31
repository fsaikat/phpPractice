<?php
    require_once "vendor/autoload.php";
    use App\classes\EvenOdd;
    $result = EvenOdd::e();

?>
<html>
    <head>
        <title>Even Odd</title>
    </head>
    <body>
        <form action="" method="post">
            <table border="1px solid">
                <tr>
                    <td>Starting Number</td>
                    <td><input type="text" name="starting_num"></td>
                </tr>
                <tr>
                    <td>Ending Number</td>
                    <td><input type="text" name="ending_num"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="radio" name="check" value="Odd">Odd
                        <input type="radio" name="check" value="Even">Even
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea type="text" name="result" rows="5" cols="38">
                            <?php echo $result; ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
