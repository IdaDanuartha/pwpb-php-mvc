<?php

if(isset($_POST['submit'])) {
    $key = 'data';
    $value = $_POST['nama'];
    setcookie($key, $value, time() + 60);

    header('Location: cookie.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_COOKIE['data'])) : ?>
        <p>Value : <?= $_COOKIE['data']; ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <input type="text" name="nama">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>