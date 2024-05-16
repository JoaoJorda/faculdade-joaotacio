<?php
    include_once('config.php');

    $sql = "SELECT * FROM usuarios ORDER BY id DESC";

    $result = $conn -> query($sql);

    print_r($result);
    
?>