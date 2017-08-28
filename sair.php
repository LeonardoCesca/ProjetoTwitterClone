<?php

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['email']);
header('refresh:2,url=index.php');

echo 'Esperamos você de volta em breve!!!'


?>