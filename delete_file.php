<?php
if (isset($_GET['fname'])) {
    $fname = $_GET['fname'];
    // echo $fname;
    if (unlink("file_manager/" . $fname)) {
?>
        <script>
            alert("File Deleted Successfully");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Error: Error deleting file");
        </script>
    <?php
    }
    ?>
    <script>
        window.location.href = "file_manager.php";
    </script>
<?php
}
