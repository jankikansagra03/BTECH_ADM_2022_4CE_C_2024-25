<?php
include_once("connection.php");
?>
<link rel="stylesheet" href="bootstrap.min.css">
<script src="bootstrap.bundle.min.js"></script>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "<h1>" . $id . "</h1>";

    $q = "select * from register where id=$id";
    $result = mysqli_fetch_assoc($con->query($q));
?>
    <div class="card" style="width:400px">
        <img class="card-img-top" src="images/profile_pictures/<?php echo $result['profile_pic']; ?>" alt="Card image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title"><?php echo $result['fullname'] ?></h4>
            <p class="card-text">
                Email : <?php echo $result['email'] ?><br>
                Mobile : <?php echo $result['mobile'] ?><br>
                State : <?php echo $result['state'] ?><br>
                Password : <?php echo $result['password'] ?><br>
                Gender : <?php echo $result['gender'] ?><br>
                Address : <?php echo $result['address'] ?><br>
                Hobbies : <?php echo $result['hobbies'] ?><br>
            </p>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>
<?php


}
