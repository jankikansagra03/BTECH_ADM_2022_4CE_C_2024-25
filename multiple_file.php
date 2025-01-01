<form action="multiple_file.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fname[]" multiple>
    <br>
    <input type="submit" value="Upload Files" name="upload_multiple">
</form>


<?php
$uploaded_files = array();
$j = 0;
if (isset($_POST['upload_multiple'])) {
    // $file_names = $_FILES['fname']['name'];
    // print_r($file_names);
    $count = count($_FILES['fname']['name']);
    echo $count . " Files uploaded to the server";

    for ($i = 0; $i < $count; $i++) {
        $tname = $_FILES['fname']['tmp_name'][$i];
        $filename = $_FILES['fname']['name'][$i];
        $size = $_FILES['fname']['size'][$i];
        $type = $_FILES['fname']['type'][$i];
        // echo "<br>Temp Name: " . $tname;
        // echo "<br>File Name: " . $filename;
        // echo "<br>Size: " . $size;
        // echo "<br>Type: " . $type;
        if ($type == "image/jpg" || $type == "image/png" || $type == "image/jpeg") {
            if ($size <= 1024 * 1024) {
                if (!is_dir("uploads")) {
                    mkdir("uploads");
                }
                $filename = uniqid() . $filename;
                if (move_uploaded_file($tname, "uploads/" . $filename)) {
                    echo "<br><span style='color:green'>" . $filename . " <br>Uploaded successfully</span>";
                    $uploaded_files[$j] = $filename;
                    $j++;
                } else {
                    echo "<br><span style='color:red'>" . $filename
                        . "<br> Error: Failed to move the file to the directory</span>";
                    continue;
                }
            } else {
                echo "<br><span style='color:red'>" . $filename . "<br> Error: PDF files of size less than 1MB are allowed.</span>";
                continue;
            }
        } else {
            echo "<br><span style='color:red'>" . $filename . "<br> Error: Only images files with extension jpg and png are
    allowed.</span>";
            continue;
        }
    }
    echo "<br>";
    foreach ($uploaded_files as $k) {
?>
        <img src="uploads/<?php echo $k; ?>" alt="" height="100px" width="100px">
<?php
    }
}
