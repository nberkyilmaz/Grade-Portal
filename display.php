<!-- Form to display courses -->
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Display Grades</title>
    <link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body class='loggedin'>
    <header class='navtop'>
        <h1>CP476 Project</h1>
    </header>
    <div class='dashboard-content'> 
        <h2>Display Grades</h2>
        <?php
            require_once "connect_db.php";
            require_once "functions.php";
            display_grade($conn);
        ?>
        <div class="button-container">
            <input type="button" class="small-button" onclick="location.href = 'index.php';" value="Back">
        </div>
    </div>
</body>
</html>
