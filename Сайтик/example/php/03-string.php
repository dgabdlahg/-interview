<?php
    if (isset($_POST['email'])){
        $em = trim($_POST['email']);

        $em_length = strlen($em);
        if (($em_length >= 8) && (filter_var($em, FILTER_VALIDATE_EMAIL))){
            print "Эл. адрес, " . $em . "корректен!";
        }
        else
        {
            print "Эл. адрес, " . $em . "Некорректно введен email :(";
        }
    }
        else
    {
        include 'string.php';
    }
?>