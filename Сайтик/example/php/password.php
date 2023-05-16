<?php
    $data = '1234567890ABCDEFGHIJKLMNOPRSTUVWXYZabcdefghijklmnoprstuvwxyz';
    echo substr(str_shuffle($data), 0, 8);
?>