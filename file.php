<form action="file.php" method="post" enctype="multipart/form-data">
    Select a file:<input type="file" name="f1" id="" <br>
    <input type="submit" value="Upload File" name="upload">
</form>

<?php
if (isset($_POST['upload'])) {
    if ($_FILES['f1']['name'] == "") {
?>
<span style="color:red;">Please select a file to upload</span>
<?php

    } else {
        if ($_FILES['f1']['type'] == "application/pdf") {
            if ($_FILES['f1']['size'] <= 1024 * 1024) {
                echo "Temporary Location::" . $_FILES['f1']['tmp_name'] . "<br>";
                echo "Original Name::" . $_FILES['f1']['name'] . "<br/>";
                echo "Original Size::" . $_FILES['f1']['size'] / 1024 . "KB <br/>";
                echo "type::" . $_FILES['f1']['type'] . "<br/>";
                if (!is_dir("uploads")) {
                    mkdir("uploads");
                }
                $fname = uniqid() . $_FILES['f1']['name'];
                if (move_uploaded_file($_FILES['f1']['tmp_name'], "uploads/" . $fname)) {
        ?>
<span style="color:green;">
    <h1>File uploaded Successfully</h1>
</span>
<?php
                } else {
                ?>
<span style="color:red;">Error in uploading file</span>
<?php
                }
            } else {
                ?>
<span style="color:red;">File size cannot be greater tha 1MB</span>
<?php
            }
        } else {
            ?>
<span style="color:red;">Please select a PDF file to upload</span>
<?php
        }
    }
}