<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.js"></script>
<div class="container">
    <form action="file_manager.php" method="post" enctype="multipart/form-data" style="margin:20px">
        <label><b>Select a file: &nbsp; </b></label><input type="file" name="f1" id="">
        <br>
        <br>
        <input type="submit" value="Upload File" name="upload">
    </form>

    <?php

    if (isset($_POST['upload'])) {
        if ($_FILES['f1']['name'] == "") {
            echo "<span style='color:red;'>Please select a file to upload</span><br>";
        } else {
            if (!is_dir("file_manager")) {
                mkdir("file_manager");
            }
            $filename = uniqid() . "_" . $_FILES['f1']['name'];
            $temp_location = $_FILES['f1']['tmp_name'];
            if (move_uploaded_file($temp_location, "file_manager/" . $filename)) {
                echo "<span style='color:green;'>File uploaded successfully</span><br>";
            } else {
                echo "<span style='color:red;'>Error: Failed to move the file to the directory</span><br>";
            }
        }
    }

    // List all uploaded files

    if (!is_dir("file_manager")) {
        echo "<span style='color:red'>Your uploads directory is empty. Please upload files to view contents of directory</span>";
    } else {
        $files = scandir("file_manager");
    ?>
    <h1 class="text-white bg-primary p-2 text-center">Contents of your Directory</h1>
    <br>
    <table class="table table-responsive table-striped">
        <tr>
            <th>SR.NO</th>
            <th>File name</th>
            <th>File Type</th>
            <th>Download</th>
            <th>Delete</th>
            <th>View</th>
        </tr>
        <?php
            $i = 1;
            foreach ($files as $file) {
                if ($file != "." && $file != "..") {
            ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $file; ?></td>
            <td><?php echo $fileType = $file ? mime_content_type("file_manager/" . $file) : ''; ?></td>
            <td><a href="file_manager/<?php echo $file; ?>"><input type="button" value="Download"
                        class="btn btn-success" download></a>
            </td>

            <td>
                <a href="delete_file.php?fname=<?php echo $file; ?>">
                    <input type="button" value="Delete" class="btn btn-danger">
                </a>
            </td>
            <?php
                            if ($fileType == "image/jpeg" || $fileType == "image/png" || $fileType == "image/jpg" || $fileType == "application/pdf") {
                            ?>
            <a href="view_file.php?fname=<?php echo $file; ?>">
                <input type="button" value="View" class="btn btn-primary">
            </a>
            <?php
                            } else {
                            ?>
            <label for="" style="color:red">Preview not available</label>
            <?php
                            }
                            ?>
            </td>
        </tr>

        <?php
                    $i++;
                }
            }

            ?>
    </table>
</div>
<?php
    }