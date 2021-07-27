<?php

$conn = mysqli_connect("localhost", "root", "", "unity") or die("Connection Faild");

if(!$conn){
    print_r($conn);
}

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
?>