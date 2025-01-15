<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.js"></script>
<a href="file_manager.php">
    <input type="button" value="Back to Directory" class="btn btn-primary" style="margin:10px;">
</a>
<?php

if (isset($_GET['fname'])) {
    $fname = $_GET['fname'];
?>
    <iframe src="file_manager/<?php echo $fname; ?>" frameborder="0" width="100%" height="100%"></iframe>
<?php

}
