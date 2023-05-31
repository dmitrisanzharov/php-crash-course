<?php

session_start(); // need this

if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];

    if ($name === 'Dimi' && $password === 'password') {
        $_SESSION['name'] = $name;
        header('Location: /php-crash-course/extras/dashboard.php');
    } else {
        echo 'wrong name and pass';
    }
}


?>


<!-- <a href="<?php $_SERVER['PHP_SELF'] ?>?name=Dmitri&age=30">Click</a> -->


<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='POST'>
    <div>
        <label>Name: </label>
        <input type="text" name="name">
    </div>
    <br>
    <div>
        <label>password: </label>
        <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>