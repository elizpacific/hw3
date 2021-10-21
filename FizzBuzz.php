<?php
    $handle = fopen ("php://stdin","r");
    $fizz = fgets($handle);
    $buzz = fgets($handle);
    $number3 = fgets($handle);

    $check = 1;
    while($number3 >= $check){
        if($check % $fizz == 0){
            print_r("F");
            if($check % $buzz ==0){
                print_r("B");
            }
        }
        if($check % $buzz == 0){
            print_r("B");
        }
        if($check % $fizz != 0 && $check % $buzz != 0){
            echo $check;
        }
        $check++;
    }
