<!-- Dashboard for navigation and actions -->
<?php
session_start();

// Redirect to login page if not logged in
if (!isset($_SESSION["user_name"])) {
    header("location: login.php");
    exit();
}

// Require database connection and functions
require_once "connect_db.php";
require_once "functions.php";


// You can perform database queries here to fetch dashboard data
// For example, fetch user-specific data or general stats

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body class="dashboard">
    <div class="dashboard-header">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION["user_name"]); ?>!</h1>
        <a href="logout_ex.php">Logout</a>
    </div>
    <div class="dashboard-content">
    <?php
    if (isset($_SESSION['update_success'])) {
        echo '<p class="success-message">' . $_SESSION['update_success'] . '</p>';
        unset($_SESSION['update_success']);
    }

    if (isset($_SESSION['drop_success'])) {
        echo '<p class="drop-message">' . $_SESSION['drop_success'] . '</p>';
        unset($_SESSION['drop_success']);
    }
    ?>
    <h2>Here are your options:</h2>

<!-- sets up navigation -->
<form class="options">
    <input type="button" onclick="location.href = 'update.php';"
        value="Update Student Mark Information"><br>
    <br>
    <input type="button" onclick="location.href = 'delete.php';"
        value="Drop student from course"><br>
    <br>
    <input type="button" onclick="location.href = 'display.php';"
        value="Display Output"><br>
    <br>

    <input type="button" onclick="location.href = 'logout_ex.php';" value="Logout">
</form>
    </div>
</body>
</html>
