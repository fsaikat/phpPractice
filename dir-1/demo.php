<?php


//    $x = 100;
//    $y = 21;

//    echo $x++;
//
//    echo $x;

//    echo $x += $y;

//    $data = [
//        'name'=>'Faisal',
//        'Address'=>'Nikunja',
//        'Mobile'=>'01723477409'
//    ];

//    $data[1]=10;
//    $data[2]=30;
//    $data[15]=50;
//
//    echo $data[2];
////    echo <br/>;
//    $data['name']='Faisal';
//    $data['Address']='Nikunja';
//    $data['Mobile']='01723477409';
//
//    echo $data['name'];

//    foreach ($data as $value){
//        echo $value.'<br>';
//    }



    $data = [];

    $data[0][0]=10;
    $data[0][1]=20;
    $data[0][2]=30;

    $data[1][0]=40;
    $data[1][1]=50;
    $data[1][2]=60;

    foreach ($data as $value)
    {
//        echo $value[0].$value[1].$value[2];
        foreach ($value as $x)
        {
            echo $x.'<br>';
        }
    }
?>