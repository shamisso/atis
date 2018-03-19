<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <base href="http://localhost/atis/">
    <link rel="shortcut icon" href="src/icons/favicon.ico" type="image/x-icon">
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek-ext" rel="stylesheet"> 
    <link rel="stylesheet" href="css/styles.css"> 
</head>
<body>
   <div class="wrapper">
    <?php require_once('templates/header.php'); ?>
    <?= $main?>
    <?php require_once('templates/footer.php'); ?>
    </div>
</body>
</html>