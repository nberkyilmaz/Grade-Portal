<!-- Form to intiate login -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<div class="content_login">
<body class="login">
        <h2>Login:</h2>

        <form action="login_ex.php" method="post">
        <label for="html">USERNAME:</label>
        <input type="text" name="user_name"><br>

        <label for="html">PASSWORD:</label>
        <input type="password" name="pass_word"><br>

        <button type="submit" name="login">Login</button>
      </form>
</body>
<form class="back">
    <br>
    <input type="button" onclick="location.href = 'index.php';"
        value="Back"><br>
    <br>
</form>