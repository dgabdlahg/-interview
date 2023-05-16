<?php

    //Получение данных с элементов формы

    $service = $_POST['service'];
    $sname = $_POST['sname'];
    $name = $_POST['name'];
    $mname = $_POST['mname'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    
    //Обработка полученых данных
    
    $service = htmlspecialchars($service);
    $sname = htmlspecialchars($sname);
    $name = htmlspecialchars($name);
    $mname = htmlspecialchars($mname);
    $phone = htmlspecialchars($phone);
    $date = htmlspecialchars($date);
     
    $service = urldecode($service);
    $sname = urldecode($sname);
    $name = urldecode($name);
    $mname = urldecode($mname);
    $phone = urldecode($phone);
    $date = urldecode($date);
    
    $service = trim($service);
    $sname = trim($sname);
    $name = trim($name);
    $mname = trim($mname);
    $phone = trim($phone);
    $date = trim($date);
    
    //Отправляем данные на почту
    
    if (mail("danya.miller.99@bk.ru",
        "Новая запись",
        "Услуга: ".$service."\n".
        "Фамилия: ".$sname."\n".
        "Имя: ".$name."\n".
        "Отчество: ".$mname."\n".
        "Номер телефона: ".$phone."\n".
        "Дата: ".$date)
        )    {
            echo(':)');
        }
        
        else {
            echo('!!!!!');
        }
    
?>