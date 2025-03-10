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
    // $q = "create table if not exists register(
    // id int primary key auto_increment,
    // fullname char(50) not null,
    // email varchar(40) unique key,
    // password varchar(20) not null,
    // mobile bigint(10) not null,
    // state char(20) not null,
    // gender char(10) not null,
    // address varchar(100) not null,
    // hobbies char(100) not null,
    // profile_pic varchar(100) not null
    // )";
    // try {
    //     if ($con->query($q)) {
    //         // echo "Table created successfully";
    //     }
    // } catch (Exception $e) {
    //     echo "Error: Error in creating table" . $e->getMessage();
    // }
} catch (Exception $e) {
    echo "Error: Error in connection";
}


if (isset($_COOKIE['success'])) {
?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success!</strong> <?php echo $_COOKIE['success']; ?>.
    </div>
<?php
}
if (isset($_COOKIE['error'])) {
?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Error!</strong> <?php echo $_COOKIE['error']; ?>.
    </div>
<?php
}
?>