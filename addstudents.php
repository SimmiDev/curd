<?php

    $conn = mysqli_connect("localhost", "root", "", "unity") or die("Connection Faild");

    $studentDetails = "create table if not exists stuDetails(
        id int primary key auto_increment, 
        name varchar(40), 
        lname varchar(40),
        course varchar(40),
        email varchar(60) unique,
        password varchar(32))
        ";
    
        $tbl = mysqli_query($conn, $studentDetails);
    
        if($tbl != 1){
            echo "error in table creation";
        }


    if(isset($_POST["add_student"])){
        $stu_name = $_POST["sname"];
        $stu_lname = $_POST["lname"];
        $stu_course = $_POST["course"];
        $stu_email = $_POST["email"];
        $stu_pass = $_POST["password"];

        $insert_records = "insert into stuDetails(name, lname, course, email, password) values('$stu_name', '$stu_lname', '$stu_course', '$stu_email', '$stu_pass')";

        $query = mysqli_query($conn, $insert_records);


        if($query == 1){
            echo "Student Added";
        }else{
            echo "Error in Student Add";
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Students</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <div class="add-student">
        <h2 style="text-align:center;">Add Record </h2>
        <form class="form" method="POST">
            <label for="sname">Student name</label>
            <input type="text" name="sname" id="sname">

            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname">

            <label for="course">Course</label>
            <input type="text" name="course" id="course">

            <label for="email">Student Email</label>
            <input type="email" name="email" id="email">

            <label for="password">Student password</label>
            <input type="password" name="password" id="password">

            <input type="submit" value="Add Student" name="add_student">
        </form>

        <a href="studentlist.php">Student List </a>
    </div>
</body>
</html>