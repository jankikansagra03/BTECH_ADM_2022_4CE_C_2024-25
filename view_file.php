<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.js"></script>

<a href="file_manager.php">
    <input type="button" value="GO back to Filemanager" class="btn btn-success">
</a>
<br><br>
<?php
if (isset($_GET['fname'])) {
    $filename = $_GET['fname'];
?>
    <iframe src="file_manager/<?php echo $filename; ?>" frameborder="0" width="100%" height="100%"></iframe>
<?php
} else {
    echo "no file selected";
}
