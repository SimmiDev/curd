<?php

$conn = mysqli_connect("localhost", "root", "", "unity") or die("Connection Faild");

if (isset($_POST["updatestudent"])) {
    $stu_id = $_POST["id"];
    $stu_name = $_POST["sname"];
    $stu_lname = $_POST["lname"];
    $stu_course = $_POST["course"];
    $stu_email = $_POST["email"];
    $stu_password = $_POST["password"];


    // $qry = "select * from stuDetails where id = $id";
    $qry = "update stuDetails set name = '$stu_name', lname = '$stu_lname', course = '$stu_course', email = '$stu_email', password = '$stu_password' where id = $stu_id";

    echo $qry;
    $action = mysqli_query($conn, $qry);

    mysqli_close($conn);
    header("Location: studentlist.php");
}

