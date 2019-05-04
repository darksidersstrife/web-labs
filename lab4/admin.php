<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <a href="index.php">На главную</a>
    <p><b>Добавить новость</b></p>
    <form action="add.php">
        <p>Заголовок:
        <input name="caption" required></p>
        <p>Новость:
        <textarea name="text" required></textarea></p>
        <input type="submit" value="Добавить новость">
    </form>
    <form action="delete.php">
    <?php
        $link = mysqli_connect("localhost", "j911904h_lab4", "StrongPassword)", "j911904h_lab4");
        $res = mysqli_query($link, "SELECT * FROM `news`");
        $row = mysqli_fetch_row($res);
        while($row != NULL)
        {
            $id = $row[0];
            $caption = $row[1];
            $body = $row[2];
            
            echo '<p><b>'. $caption . '</b></p>';
            echo '<p>'. $body . '</p>';
            echo '<button type="submit" name=id value=' . $id . '>Удалить новость</button>';
            $row = mysqli_fetch_row($res);
        }
    ?>
    </form>
</body>
</html>