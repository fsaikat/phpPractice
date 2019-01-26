<?php


//    $x = 100;
//    $y = 21;

//    echo $x++;
//
//    echo $x;

//    echo $x += $y;

    $data = [
        'name'=>'Faisal',
        'Address'=>'Nikunja',
        'Mobile'=>'01723477409'
    ];

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

    foreach ($data as $value){
        echo $value.'<br>';
    }

?>