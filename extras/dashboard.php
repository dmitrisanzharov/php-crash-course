<?php

session_start();

if (isset($_SESSION['name'])) {
    echo '<h1>Hello: ' . $_SESSION['name'] . '</h1>';
    echo "<a href='/php-crash-course/extras/logout.php'>logout</a>";
} else {
    echo "<h1>Hello Guest</h1>";
    echo "<a href='/php-crash-course/01_output.php'>home</a>";
}
