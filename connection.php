<?php
try {
    $con = @mysqli_connect("localhost", "root", "");
    try {
        if ($con) {
            $con->select_db("2025_4CEC");
        }
    } catch (Exception $e) {
        echo "Error: Error in selecting database";
    }
    // $q = "create database 2025_4DCE";
    // try {
    //     if ($con->query($q)) {
    //         echo "Database created successfully";
    //     }
    // } catch (Exception $e) {
    //     echo "Error: Error in creating database";
    // }
    $q = "create table if not exists register(
    id int primary key auto_increment,
    fullname char(50) not null,
    email varchar(40) unique key,
    password varchar(20) not null,
    mobile bigint(10) not null,
    state char(20) not null,
    gender char(10) not null,
    address varchar(100) not null,
    hobbies char(100) not null,
    profile_pic varchar(100) not null
    )";
    try {
        if ($con->query($q)) {
            // echo "Table created successfully";
        }
    } catch (Exception $e) {
        echo "Error: Error in creating table" . $e->getMessage();
    }
} catch (Exception $e) {
    echo "Error: Error in connection";
}
