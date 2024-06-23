<!-- Form to intiate grade update -->
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Update Marks</title>
    <link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body class='loggedin'>
    <header class='navtop'>
        <h1>CP476 Project</h1>
    </header>
    <div class='content'>
        <h1>Update Marks</h1>
        <div class='update'>
            <form id="updateForm" action='update_ex.php' method='post'>
                <div class='box'>
                    <label for='student_id'>Student ID</label>
                    <input type='text' name='student_id' required>
                </div>
                <div class='box'>
                    <label for='course_code'>Course Code</label>
                    <input type='text' name='course_code' required>
                </div>
                <div class='box'>
                    <label for='mark1'>Mark 1:</label>
                    <input type='number' name='mark1' required>
                </div>
                <div class='box'>
                    <label for='mark2'>Mark 2:</label>
                    <input type='number' name='mark2' required>
                </div>
                <div class='box'>
                    <label for='mark3'>Mark 3:</label>
                    <input type='number' name='mark3' required>
                </div>
                <div class='box'>
                    <label for='mark4'>Final:</label>
                    <input type='number' name='mark4' required>
                </div>
                <!-- Button container -->
                <div class="button-container">
                    <input type="button" class="small-button" onclick="document.getElementById('updateForm').submit();" value="Submit Marks">
                    <input type="button" class="small-button" onclick="location.href = 'index.php';" value="Back">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
