<form action="index.php" method="post">
    Enter number: <input type="text" name="n1" id="">
    <br>
    Enter Password: <input type="password" name="pwd" id="">
    <br>
    Select Gender:
    <input type="radio" name="gen" value="m">Male
    <input type="radio" name="gen" value="f">Female
    <br>
    Select State:
    <select name="st[]" id="" multiple>
        <option value="ap">Andhra Pradesh</option>
        <option value="gj">Gujarat</option>
        <option value="mh">Maharashtra</option>
        <option value="bi">Bihar</option>
        <option value="ne">Nepal</option>
    </select>
    <br>
    select hobbies:
    <input type="checkbox" name="hobby[]" id="" value="reading">Reading Books
    <input type="checkbox" name="hobby[]" id="" value="playing">
    Playing Games
    <input type="checkbox" name="hobby[]" id="" value="travel">Travelling
    <br>
    <textarea name="" id="">

    </textarea>
    <input type="submit" value="123" name="btn">
</form>

<?php
if (isset($_POST['btn'])) {
    $n = $_POST['n1'];
    echo $n;
    if (isset($_POST['gen'])) {
        $gender = $_POST['gen'];
        echo $gender;
    }
    if (isset($_POST['st'])) {
        $state = $_POST['st'];
        foreach ($state as $s) {
            echo $s . "<br/>";
        }
    }
    if (isset($_POST['hobby'])) {
        $h = $_POST['hobby'];
        foreach ($h as $h1) {
            echo $h1 . "<br/>";
        }
    }
}
