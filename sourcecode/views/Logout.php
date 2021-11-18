<?php
session_start();
unset ($SESSION['Email']);
session_destroy();

header('Location: http://localhost/cocos_sportfishing/Login.php');

?>