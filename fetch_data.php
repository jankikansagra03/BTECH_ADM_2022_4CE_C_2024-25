<?php
include_once("connection.php");
?>
<link rel="stylesheet" href="bootstrap.min.css">
<script src="bootstrap.bundle.min.js"></script>
<?php
$q = "select * from register";
$result = $con->query($q);
?>
<table class="table table-responsive table-striped">
    <tr>
        <th>Id</th>
        <th>Fullname</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Action</th>

    </tr>
    <?php
    while ($r = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?php echo $r['id']; ?></td>
            <td><?php echo $r['fullname']; ?></td>
            <td><?php echo $r['email']; ?></td>
            <td><?php echo $r['mobile']; ?></td>
            <td>
                <a href="view.php?id=<?php echo $r['id']; ?>">
                    <button class="btn btn-info">View</button>
                </a>
                <a href="edit.php?id=<?php echo $r['id']; ?>">
                    <button class="btn btn-primary">Edit</button>
                </a>
                <a href="delete.php">
                    <button class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>