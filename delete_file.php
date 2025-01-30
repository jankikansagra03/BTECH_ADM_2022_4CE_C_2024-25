<?php
if (isset($_GET['fname'])) {
    $filename = $_GET['fname'];
    echo $filename;;
    if (unlink("file_manager/" . $filename)) {
?>
        <script>
            alert("file deleted successfully");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Error deleting file");
        </script>
<?php
    }
}
?>
<script>
    window.location.href = "file_manager.php";
</script>