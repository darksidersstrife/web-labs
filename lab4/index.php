<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <a href="admin.php">Админка</a>
    <?php
        $link = mysqli_connect("localhost", "j911904h_lab4", "StrongPassword)", "j911904h_lab4");
        $res = mysqli_query($link, "SELECT * FROM `news`");
        $row = mysqli_fetch_row($res);
        while($row != NULL)
        {
            $id = $row[0];
            $caption = $row[1];
            $body = $row[2];
            echo '<br><br>';
            echo '<p><b>'. $caption . '</b></p>';
            echo '<p>'. $body . '</p>';
            $row = mysqli_fetch_row($res);
        }
    ?>
    </form>
</body>
</html>