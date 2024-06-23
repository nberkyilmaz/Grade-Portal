<!-- Execution for login -->
<?php

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (isset($_POST['user_name'], $_POST['pass_word'])) {
    $user_name = $_POST["user_name"];
    $pass_word = $_POST["pass_word"];

    require_once "connect_db.php";
    require_once "functions.php";

    login_user($conn, $user_name, $pass_word);

}
else {
    header("location: index.php?error=loginfailed");
    exit();
}