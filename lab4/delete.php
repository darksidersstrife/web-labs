<?php
    $link = mysqli_connect("localhost", "j911904h_lab4", "StrongPassword)", "j911904h_lab4");
    $id = $_GET["id"];
    mysqli_query($link, "DELETE FROM `news` WHERE id=$id");
    header('Location: admin.php');
?>