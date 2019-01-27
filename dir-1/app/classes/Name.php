<?php
namespace App\classes;

class Name
{
    function makeFullName($firstName,$lastName){
        $fullName = $firstName.' '.$lastName;
        return $fullName;
    }

    function myCalculator($data)
    {
//        echo '<pre>';
//        print_r($data);
        switch ($data['btn'])
        {
            case '+':
                $result = $data['first_number'] + $data['second_number'];
                break;
            case '-':
                $result = $data['first_number'] - $data['second_number'];
                break;
            case '*':
                $result = $data['first_number'] * $data['second_number'];
                break;
            case '/':
                $result = $data['first_number'] / $data['second_number'];
                break;
            case '%':
                $result = $data['first_number'] % $data['second_number'];
                break;
        }
        return $result;
    }
}