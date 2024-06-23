<!-- Form to intiate course drop -->
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Drop Course</title>
    <link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body class='loggedin'>
    <header class='navtop'>
        <h1>CP476 Project</h1>
    </header>
    <div class='content'>
        <h1>Drop Course</h1>
        <div class='update'>
            <form id="deleteForm" action='delete_ex.php' method='post'>
                <div class='box'>
                    <label for='student_id'>Student ID</label>
                    <input type='text' name='student_id' required>
                </div>
                <div class='box'>
                    <label for='course_code'>Course Code</label>
                    <input type='text' name='course_code' required>
                </div>
                <!-- Button container -->
                <div class="button-container">
                    <input type="button" class="small-button" onclick="document.getElementById('deleteForm').submit();" value="Drop Course">
                    <input type="button" class="small-button" onclick="location.href = 'index.php';" value="Back">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
