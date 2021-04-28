<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: /");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <?php
    // mysql -> select -> where -> username = $_SESSION['username'];
    $row
    ?>
    <form>
        <input name="name" value="<?php echo $row['name']; ?>"/>
    </form>
</body>
</html>