<?php

    require 'config.php';

   
    if($_POST){
        $title = $_POST['title'];
        $description = $_POST['description'];

        $pdoStatement = $pdo->prepare('INSERT INTO `todo` (title,description) VALUES (:title,:description)');
        $result = $pdoStatement->execute(
            array(
                ":title"=>$title,
                ":description"=>$description,
             )
            );
        if($result){
            header('location:index.php');
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="container mt-3 mb-3">

        <form action="" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title"  required placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="Description">Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-warning">Home</a>
        </form>                 

    </div>

</body>
</html>