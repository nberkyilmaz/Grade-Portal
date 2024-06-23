<!-- Execution for signup -->
<?php

if (isset($_POST["user_name"], $_POST["pass_word"])) {
    $user_name = $_POST["user_name"];
    $pass_word = $_POST["pass_word"];

    require_once "connect_db.php";
    require_once "functions.php";
    create_user($conn, $user_name, $pass_word);

} else {
    header("location: ../signup.php?error=signupfailed");
    exit("Empty");
}