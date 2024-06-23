<!-- Execution for course drop -->
<?php

if (isset($_POST["student_id"], $_POST["course_code"])) {
    $student_id = $_POST["student_id"];
    $course_code = $_POST["course_code"];

    require_once "connect_db.php";
    require_once "functions.php";
    drop_course($conn, $student_id, $course_code);

} else {
    header("location: dashboard.php?error");
    exit();
}