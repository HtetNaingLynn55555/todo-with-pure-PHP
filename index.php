<?php

    require 'config.php';
    $pdoStatement = $pdo->prepare('SELECT * FROM `todo` ORDER BY id DESC');
    $pdoStatement->execute();
    $result = $pdoStatement->fetchAll();
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>To Do</title>
</head>
<body>


    <div class="container">
        <a href="create.php" class="btn btn-primary mt-3 mb-3">Create New ToDo List</a>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if($result){
                    $i =1;
                    foreach($result as $value){?>
                        <tr>
                            <th scope="row"><?php echo $i;?></th>
                            <td><?php echo $value['title']?></td>
                            <td><?php echo $value['description'];?></td>
                            <td>
                                <a href="delete.php?id=<?php echo $value['id'];?>" class="btn btn-danger">Delete</a>
                                <a href="edit.php?id=<?php echo $value['id']; ?>" class="btn btn-success">Edit</a>
                            </td>
            
                        </tr>
            <?php    
            }
        }
            ?> 

            
           
            </tbody>
        </table>
    </div>

</body>
</html>