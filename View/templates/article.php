<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/../View/style/style.css">
    <title>Новость</title>
</head>
<body>
<div id="admin">
    <?php //var_dump($newsOne);?>
    <h2><?php echo $newsOne->title; ?></h2>
    <p><?php echo $newsOne->text; ?></p>
    <div id="edit">
        <strong>
            <a href="/Control/artDelAdm.php?id=<?php echo $newsOne->id; ?>">Удалить новость</a>
        </strong>
        <br>
        <strong>
            <a href="/Control/artVerifyAdm.php?id=<?php echo $newsOne->id; ?>">Обновить новость</a>
        </strong>
    </div>
</div>
</body>
</html>
