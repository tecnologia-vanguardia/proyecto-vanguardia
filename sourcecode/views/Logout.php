<?php
session_start();
unset ($SESSION['Email']);
session_destroy();

header('Location: http://almar.site/views/login.php');

?>