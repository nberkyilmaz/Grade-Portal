<!-- Homepage for login and signup -->
<?php
session_start();

// Redirect to "logged_in.php" if the session "user_name" is set.
if (isset($_SESSION["user_name"])) {
    header("location: ../dashboard.php"); 
    exit(); 
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<div class="content">
<body class="index">
        <h2>Login/Signup:</h2>
        <br>

        <!-- sets up navigation -->
        <form class="index_options">
            <input type="button" onclick="location.href = 'login.php';" value="Login"><br>
            <br>
            <input type="button" onclick="location.href = 'signup.php';" value="Signup"><br>
            <br>
        </form>
    </div>
</body>

<?php
if(isset($_GET["error"])){
    if($_GET["error"] == "signedup"){
        echo "Account succesfully created.";
    }
    else if($_GET["error"] == "usernameincorrect"){
        echo "Username incorrect.";
    }
    else if($_GET["error"] == "passwordincorrect"){
        echo "Password incorrect.";
    }
    else if($_GET["error"] == "signupfailed"){
        echo "Signup failed, try again.";
}
else if($_GET["error"] == "loginfailed"){
    echo "Login failed, try again.";
}
else if($_GET["error"] == "usernameexists"){
    echo "Username chosen already exists!";
}
else{
    echo "";
}
}
?>