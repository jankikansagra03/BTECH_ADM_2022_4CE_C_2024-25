<form action="multiple_tb.php">
    Enter no. of values: <input type="text" name="n" id="">
    <br>
    <input type="submit" value="generate Textboxes" name="btn">
</form>

<?php
if (isset($_GET['btn'])) {
    $n = $_GET['n'];
?>
    <form action="multiple_tb.php">
        <input type="hidden" name="n" value="<?php echo $n; ?>">
        <?php
        for ($i = 1; $i <= $n; $i++) {
        ?>
            Enter Number <?php echo $i; ?>
            <input type=" text" name="n<?php echo $i; ?>" id="">
            <br>
        <?php
        }
        ?>
        <input type="submit" value="Sort" name="btn1">
    </form>
<?php
}

if (isset($_GET['btn1'])) {
    $n = $_GET['n'];
    $arr = array();
    $j = 0;
    for ($i = 1; $i <= $n; $i++) {
        $arr[$j] = $_GET['n' . $i];
        $j++;
    }
    print_r($arr);

    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    print_r($arr);
}
