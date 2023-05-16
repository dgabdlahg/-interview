<?php
    $month = 1;
    $day = 14;
    $year = 2023;
    printf("Старый новый год <br> %d.%02d.%d",
    $day,$month,$year);
    $min = -40;
    $max = +40;
    printf ("<br>");
    printf ("Компьютер может работать при температуре от %+d до %+d градусов Цельсия.",
        $min, $max);
    printf ("<br> Сгенерировать пароль из 8 символов: ");
    include 'password.php';




    
    $url = "http://asu.ru/students/index.html";
    $pos = strrchr($url,"/");
    $name = substr($pos, 1);
    printf("<br>Упражнение 1: $name");




    $s1 = 45.36;
    $s2 = 39.12;
    $s3 = $s1 + $s2;
    printf("<br>Упражнение 2: $s3 руб.");



    $email = "super-admin@college.asu.ru";
    $q = strstr($email,'@');
    $z = substr($q, 1);
    printf("<br>Упражнение 3: $z");
?>