<?php
print <<<_HTML_
<html><head><meta charset="utf-8"></head>
    <body>
        <form method='POST' action='$_SERVER[PHP_SELF]'>
        Укажите электронный адрес: <input type='text' name='email' />
        <button type="submit">Отправить</button>
        </form>
    </body>
</html>
_HTML_;
?>