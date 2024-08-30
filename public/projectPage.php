<?php
require_once("assets/php/header.php");
require_once("assets/php/footer.php");
require_once("/var/www/html/source/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6c294d23a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/vmz6jnb.css">
    <link rel="stylesheet" href="https://use.typekit.net/vmz6jnb.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-index.css">
    <title>Portfolio</title>
</head>
<body>
    <?php makeHeader();?>
    <?php 
    $name = isset($_GET['name']) ? $_GET['name'] : '';

    if (!empty($name)) {
        $pdo = db_connect();
        $stmt = $pdo->prepare('SELECT * FROM Projects WHERE name = ?');
        $stmt->execute([$name]);
        $project = $stmt->fetch(PDO::FETCH_ASSOC);
        echo $project['name'];
    } else {
        echo '<p>Project could not be found.</p>';
    }
    ?>
    <?php makeFooter();?>
</body>
</html>