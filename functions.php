<!-- Functions required for execution -->
<?php
// Create user
function create_user($conn, $user_name, $pass_word)
{
    $user_name_exists = uid_exists($conn, $user_name);
    if ($user_name_exists == true) {
        header("location: ../index.php?error=usernameexists");
        exit();
    }
    $sql = "INSERT INTO users (user_name, pass_word) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=signupfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $user_name, $pass_word);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=signedup");
    exit();
}
// Check if user already exists for signup
function uid_exists($conn, $user_name)
{
    $sql = "SELECT * FROM users WHERE user_name = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $user_name);
    mysqli_stmt_execute($stmt);
    $resultd = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    if ($row = mysqli_fetch_assoc($resultd)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
}
// Login user
function login_user($conn, $user_name, $pass_word)
{
    $user_name_exists = uid_exists($conn, $user_name);
    if ($user_name_exists == false) {
        header("location: ../index.php?error=usernameincorrect");
        exit();
    }
    $pw_match = $user_name_exists["pass_word"];

    if ($pass_word != $pw_match) {
        header("location: ../index.php?error=passwordincorrect");
        exit();
    } else if ($pass_word == $pw_match) {
        session_start();
        $_SESSION["uid"] = $user_name_exists["id"];
        $_SESSION["user_name"] = $user_name_exists["user_name"];
        echo"Login Succesful";
        header("location: ../dashboard.php");
        exit();
    }
}
// Update marks
function update_marks($conn, $student_id, $course_code, $mark1, $mark2, $mark3, $mark4)
{
    $sql = "UPDATE marks SET mark1 = ?, mark2 = ?, mark3 = ?, mark4 = ? WHERE student_id = ? AND course_code = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location; ../update.php?error");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "iiiiss", $mark1, $mark2, $mark3, $mark4, $student_id, $course_code,);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    session_start();
    $_SESSION['update_success'] = "Marks updated successfully!";

    header("location: ../dashboard.php");
    exit();
}
// Drop course
function drop_course($conn, $student_id, $course_code)
{
    $sql = "DELETE FROM marks WHERE student_id = ? AND course_code = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location; ../update.php?error");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $student_id, $course_code,);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    session_start();
    $_SESSION['drop_success'] = "Course dropped successfully!";
    header("location: ../dashboard.php");
    exit();
}
// Display grade
function display_grade($conn)
{
    $sql = "SELECT DISTINCT students.student_id, students.name, marks.course_code, ROUND((marks.mark1 * 0.2 + marks.mark2 * 0.2 + marks.mark3 * 0.2 + marks.mark4 * 0.4), 1) AS final_grade FROM students JOIN marks ON students.student_id = marks.student_id";
    $rs = mysqli_query($conn, $sql);
    print "
  <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
   <tr>
   <td width=100>ID</td> 
  <td width=100>Name</td> 
  <td width=100>Course</td> 
  <td width=100>Final Grade</td> 
  </tr>"; 
    while($row = mysqli_fetch_array($rs))
    { 
        print "<tr>"; 
        print "<td>" . $row['student_id'] . "</td>"; 
        print "<td>" . $row['name'] . "</td>"; 
        print "<td>" . $row['course_code'] . "</td>"; 
        print "<td>" . $row['final_grade'] . "</td>"; 
        print "</tr>"; 
} 
        print "</table>"; 

  }
