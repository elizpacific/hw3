<?php
    print_r("Choose:\n1-cat\n0-dog\n");
    $handle = fopen ("php://stdin","r");
    $choice = fgets($handle);

    if($choice == 1){
        print_r("Meow!");
    }
    else{
        print_r("Wow!");
    }