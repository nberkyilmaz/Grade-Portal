<!-- Form to intiate signup -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<div class="content_signup">
<body class="signup">
        <h2>Signup:</h2>

        <form action="signup_ex.php" method="post">

        <label for="html">USERNAME:</label>
        <input type="text" name="user_name"><br>

        <label for="html">PASSWORD:</label>
        <input type="password" name="pass_word"><br>

        <button type="submit" name="signup">Signup</button>
      </form>
</body>
</div>
<form class="back">
    <br>
    <input type="button" onclick="location.href = 'index.php';"
        value="Back"><br>
    <br>
</form>
</html>
