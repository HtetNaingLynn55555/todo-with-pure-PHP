<?php

    require 'config.php';

    $pdoStatement = $pdo->prepare("DELETE FROM `todo` WHERE id=".$_GET['id']);

    if($pdoStatement->execute()){
        echo "<script> window.location.href='index.php'</script>";
    }

?>