<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/View/style/style.css">
    <title>Админ-панель</title>
</head>
<body>
<div id="admin">
    <!-- Контент -->
    <div id="content">
        <h2>Добавить новость</h2>

        <!-- Результат выполнения -->
        <strong>Результат выполнения: </strong><?php echo $res; ?><br><br>

        <!-- Редактирование -->
        <div>
            <form action="/../../Control/newsAdm.php" method="post">
                Заголовок <br>
                <input type="text" name="title"><br>
                Содержание <br>
                <textarea name="text"></textarea><br>
                <input type="submit" name="create" value="Сохранить">
            </form>
        </div>
        <br>
        <strong><a href="/../index.php">Посмотреть результат</a></strong>
    </div>
</div>
</body>
</html>
