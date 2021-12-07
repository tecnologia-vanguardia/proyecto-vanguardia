<?php
session_start();
unset ($SESSION['Email']);
session_destroy();

header('Location: http://localhost/proyecto-vanguardia/sourcecode/views/Login.php');

?>