<?php

$conn = mysqli_connect("localhost", "root", "", "unity") or die("Connection Faild");

$id = $_GET["id"];

$qry = "select * from stuDetails where id = $id";


$qryrs = mysqli_query($conn, $qry);





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
        <?php
        if (mysqli_num_rows($qryrs) > 0) {
            while ($row = mysqli_fetch_assoc($qryrs)) {
        ?>
                <form class="form" method="POST" action="updatestudent.php">
                    <input type="text" name="id" id="sid" hidden value="<?php echo $row["id"] ?>">
                    <label for="sname">Student name</label>
                    <input type="text" name="sname" id="sname" value="<?php echo $row["name"] ?>">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $row["lname"] ?>">

                    <label for=" course">Course</label>
                    <input type="text" name="course" id="course" value="<?php echo $row["course"] ?>">

                    <label for=" email">Student Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $row["email"] ?>">

                    <label for="password">Student password</label>
                    <input type="password" name="password" id="password" value="<?php echo $row["password"] ?>">

                    <input type="submit" value="Update Record" name="updatestudent">
                </form>

        <?php
            }
        }
        ?>
        <a href="studentlist.php">Student List </a>
    </div>
</body>

</html>