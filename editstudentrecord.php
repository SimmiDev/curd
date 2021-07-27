<?php

    $conn = mysqli_connect("localhost", "root", "", "unity") or die("Connection Faild");

    echo $id = $_GET["id"];

    $qry = "select * from stuDetails where id = $id";
    

    $qryrs = mysqli_query($conn, $qry);

    // will continue


    // print_r(mysqli_fetch_assoc($qryrs));


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
        <h2 style="text-align:center;">Edit Record </h2>
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

            <input type="submit" value="Update Record" name="add_student">
        </form>

        <a href="studentlist.php">Student List </a>
    </div>
</body>
</html>