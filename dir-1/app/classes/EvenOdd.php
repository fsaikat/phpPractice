<?php

namespace App\classes;


class EvenOdd
{
    function e (){

        if (isset($_POST['submit']))
        {
            $startingNum = $_POST['starting_num'];
            $endingNum = $_POST['ending_num'];
            $result = ' ';
            if ($startingNum<$endingNum)
            {
                for($i=$startingNum;$i<=$endingNum;$i++)
                {
                    if ($i%2!=0 && $_POST['check']=='Odd')
                    {
                        $result .= $i.' ';
                    }
                    if ($i%2==0 && $_POST['check']=='Even')
                    {
                        $result .= $i.' ';
                    }
                }
            }
            return $result;
        }
    }
}