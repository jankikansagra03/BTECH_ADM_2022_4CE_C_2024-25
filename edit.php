 <link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/bootstrap.bundle.min.js"></script>
 <?php
    include_once("connection.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $q = "select * from register where id=$id";
        $result = $con->query($q);
        $row = mysqli_fetch_assoc($result);
        $h = explode(",", $row['hobbies']);
    ?>
     <div class="container">
         <form action="edit.php" method="post" enctype="multipart/form-data">
             <div class="mb-3 mt-3">
                 <input type="hidden" class="form-control" id="id1" placeholder="Enter Name" name="id1" value="<?php echo $row['id']; ?>">
             </div>
             <div class="mb-3 mt-3">
                 <label for="fullname" class="form-label">Fullname:</label>
                 <input type="text" class="form-control" id="fullname" placeholder="Enter Name" name="fullname" value="<?php echo $row['fullname']; ?>">
             </div>
             <div class="mb-3 mt-3">
                 <label for="email" class="form-label">Email:</label>
                 <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row['email']; ?>" readonly>
             </div>
             <div class="mb-3">
                 <label for="pwd" class="form-label">Password:</label>
                 <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" value="<?php echo $row['password']; ?>">
             </div>
             <div class="mb-3">
                 <label for="mobile" class="form-label">Mobile:</label>
                 <input type="number" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" value="<?php echo $row['mobile']; ?>">
             </div>
             <div class="mb-3">
                 <label for="state" class="form-label">State:</label>
                 <select name="state" id="state" class="form-control">
                     <option value="gujarat" <?php echo $row['state'] == "gujarat" ? "selected" : ""; ?>>Gujarat</option>
                     <option value="maharashtra" <?php echo $row['state'] == "maharashtra" ? "selected" : ""; ?>>Maharashtra</option>
                     <option value="rajasthan" <?php echo $row['state'] == "rajasthan" ? "selected" : ""; ?>>Rajasthan</option>
                     <option value="punjab" <?php echo $row['state'] == "punjab" ? "selected" : ""; ?>>Punjab</option>
                     <option value="kerala" <?php echo $row['state'] == "kerala" ? "selected" : ""; ?>>Kerala</option>
                     <option value="tamilnadu" <?php echo $row['state'] == "tamilnadu" ? "selected" : ""; ?>>Tamilnadu</option>
                 </select>
             </div>
             <div class="mb-3">
                 <label for="gender">Select Gender</label>
                 <br>
                 <input type="radio" name="gender" id="" value="Male" <?php echo $row['gender'] == 'Male' ? "checked" : ""; ?>>Male
                 <input type="radio" name="gender" id="" value="Female" <?php echo $row['gender'] == 'Female' ? "checked" : ""; ?>>Female
             </div>
             <div class="mb-3 mt-3">
                 <label for="address" class="form-label">Address:</label>
                 <textarea name="address" id="address" class="form-control">
                    <?php echo $row['address']; ?>
                 </textarea>
             </div>
             <div class="mb-3">
                 <label for="hobbies">Select Hobbies</label>
                 <br>
                 <input type="checkbox" name="hobbies[]" id="" value="Reading" <?php echo in_array("Reading", $h) ? "checked" : ""; ?>>Reading
                 <input type="checkbox" name="hobbies[]" id="" value="Writing" <?php echo in_array("Writing", $h) ? "checked" : ""; ?>>Writing
                 <input type="checkbox" name="hobbies[]" id="" value="Playing" <?php echo in_array("Playing", $h) ? "checked" : ""; ?>>Playing
                 <input type="checkbox" name="hobbies[]" id="" value="Singing" <?php echo in_array("Singing", $h) ? "checked" : ""; ?>>Singing
                 <input type="checkbox" name="hobbies[]" id="" value="Dancing" <?php echo in_array("Dancing", $h) ? "checked" : ""; ?>>Dancing
             </div>
             <div class="mb-3">
                 <img src="images/profile_pictures/<?php echo $row['profile_pic']; ?>" alt="" width="100px">
                 <br>
                 <label for="profile_pic" class="form-label">Profile Picture:</label>
                 <input type="file" class="form-control" id="profile_pic" name="profile_pic">
             </div>
             <button type="submit" class="btn btn-primary" name="edit_btn">Submit</button>
         </form>
     </div>
 <?php
    }


    if (isset($_POST['edit_btn'])) {
        $fullname = $_POST['fullname'];
        $id = $_POST['id1'];
        $password = $_POST['pswd'];
        $mobile = $_POST['mobile'];
        $state = $_POST['state'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $hobbies = implode(",", $_POST['hobbies']);

        $update = "UPDATE `register` SET `fullname`='$fullname',`password`='$password',`mobile`=$mobile,`state`='$state',`gender`='$gender',`address`='$address',`hobbies`='$hobbies'";
        if ($_FILES['profile_pic']['name'] != "") {
            $profile_pic = uniqid() . $_FILES['profile_pic']['name'];
            $update = $update . ",`profile_pic`='$profile_pic'";
            $q1 = "select * from register where id=$id";
            $result = mysqli_fetch_assoc($con->query($q1));
            $pic = $result['profile_pic'];
        }
        $update = $update . " where id=$id";

        if ($con->query($update)) {
            if ($_FILES['profile_pic']['name'] != "") {
                unlink("images/profile_pictures/" . $pic);
                move_uploaded_file($_FILES['profile_pic']['tmp_name'], "images/profile_pictures/" . $profile_pic);
            }
            setcookie('success', 'Profile updated successfully', time() + 5);
        } else {
            setcookie('error', 'Error in updating profile', time() + 5);
        }
    ?>
     <script>
         window.location.href = "fetch_data.php";
     </script>
 <?php
    }

    ?>