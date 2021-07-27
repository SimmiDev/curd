<?php

    $conn = mysqli_connect("localhost", "root", "", "unity") or die("Connection Faild");

    $student_list = "select * from stuDetails";

    $query = mysqli_query($conn, $student_list);


    
    

    // print_r($query);


    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="student-list">
        <a href="addstudents.php"> Add Students </a>
        <table border="1">
            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> LName </th>
                <th> Course </th>
                <th> Email </th>
                <th> Password </th>
                <th> Action </th>
            </tr>

            <?php
                if(mysqli_fetch_assoc($query) > 0){
                    while($row = mysqli_fetch_assoc($query)){
                        ?>
                            <tr>
                                <td> <?php echo $row["id"] ?> </td>
                                <td> <?php echo $row["name"] ?> </td>
                                <td> <?php echo $row["lname"] ?> </td>
                                <td> <?php echo $row["course"] ?> </td>
                                <td> <?php echo $row["email"] ?> </td>
                                <td> <?php echo $row["password"] ?> </td>
                                <td>
                                    <a href="editstudentrecord.php?id=<?php echo $row['id'] ?>"> Edit </a> | 
                                    <a href="#"> Delete </a>
                                </td>
                            </tr>

                        <?php
                    }
                }
            
            ?>
            
        </table>
    </div>
</body>
</html>