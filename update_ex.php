<!-- EXxecution to update grades -->
<?php

if (isset($_POST["student_id"], $_POST["course_code"],$_POST["mark1"],$_POST["mark2"],$_POST["mark3"],$_POST["mark4"])) {
    $student_id = $_POST["student_id"];
    $course_code = $_POST["course_code"];
    $mark1 = $_POST["mark1"];
    $mark2 = $_POST["mark2"];
    $mark3 = $_POST["mark3"];
    $mark4 = $_POST["mark4"];

    require_once "connect_db.php";
    require_once "functions.php";
    update_marks($conn, $student_id, $course_code, $mark1, $mark2, $mark3, $mark4);

} else {
    header("location: dashboard.php?error=update_failed_functionneveran");
    exit();
}