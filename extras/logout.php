<?php
session_start();
session_destroy();
header('Location: /php-crash-course/01_output.php');
