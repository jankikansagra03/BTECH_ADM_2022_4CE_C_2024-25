<?php
require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
   
    <div class="container">
        <form action="registration_form.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="fullname" class="form-label">Fullname:</label>
                <input type="text" class="form-control" id="fullname" placeholder="Enter Name" name="fullname">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile:</label>
                <input type="number" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
            </div>
            <div class="mb-3">
                <label for="state" class="form-label">State:</label>
                <select name="state" id="state" class="form-control">
                    <option value="gujarat">Gujarat</option>
                    <option value="maharashtra">Maharashtra</option>
                    <option value="rajasthan">Rajasthan</option>
                    <option value="punjab">Punjab</option>
                    <option value="kerala">Kerala</option>
                    <option value="tamilnadu">Tamilnadu</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="gender">Select Gender</label>
                <br>
                <input type="radio" name="gender" id="" value="Male">Male
                <input type="radio" name="gender" id="" value="Female">Female
            </div>
            <div class="mb-3 mt-3">
                <label for="address" class="form-label">Address:</label>
                <textarea name="address" id="address" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="hobbies">Select Hobbies</label>
                <br>
                <input type="checkbox" name="hobbies[]" id="" value="Reading">Reading
                <input type="checkbox" name="hobbies[]" id="" value="Writing">Writing
                <input type="checkbox" name="hobbies[]" id="" value="Playing">Playing
                <input type="checkbox" name="hobbies[]" id="" value="Singing">Singing
                <input type="checkbox" name="hobbies[]" id="" value="Dancing">Dancing
            </div>
            <div class="mb-3">
                <label for="profile_pic" class="form-label">Profile Picture:</label>
                <input type="file" class="form-control" id="profile_pic" name="profile_pic">
            </div>
            <button type="submit" class="btn btn-primary" name="reg_btn">Submit</button>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['reg_btn'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    $mobile = $_POST['mobile'];
    $state = $_POST['state'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $hobbies = implode(",", $_POST['hobbies']);
    $profile_pic = uniqid() . $_FILES['profile_pic']['name'];

    $insert = "INSERT INTO `register`(`fullname`, `email`, `password`, `mobile`, `state`, `gender`, `address`, `hobbies`, `profile_pic`) VALUES ('$fullname','$email','$password','$mobile','$state','$gender','$address','$hobbies','$profile_pic')";
    try {
        if ($con->query($insert)) {
            if (!is_dir("images/profile_pictures")) {
                mkdir("images/profile_pictures");
            }
            move_uploaded_file($_FILES['profile_pic']['tmp_name'], "images/profile_pictures/" . $profile_pic);
            setcookie("success", "Data inserted successfully", time() + 5, "/");
        }
    } catch (Exception $e) {
        echo "Error: Error in inserting data" . $e->getMessage();
        setcookie("error", "Error in inserting data", time() + 5, "/");
    }
?>
    <script>
        window.location.href = "registration_form.php";
    </script>
<?php
}
?>