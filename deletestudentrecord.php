<?php

$conn = mysqli_connect("localhost", "root", "", "unity") or die("Connection Faild");
$id = $_GET["id"];
$student_list = "delete from stuDetails where id = $id";

$query = mysqli_query($conn, $student_list);

mysqli_close($conn);

header("Location: studentlist.php");

?>