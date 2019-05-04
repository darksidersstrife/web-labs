<?php
    $link = mysqli_connect("localhost", "j911904h_lab4", "StrongPassword)", "j911904h_lab4");
    $caption = mysqli_escape_string($link, $_GET["caption"]);
    $text = mysqli_escape_string($link, $_GET["text"]);
    mysqli_query($link, "INSERT INTO `news` (`caption`, `body`) VALUES ('$caption', '$text')");
    header('Location: admin.php');
?>