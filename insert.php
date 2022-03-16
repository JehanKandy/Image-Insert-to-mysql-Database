<?php
    include("config.php");

    if(isset($_POST['insert'])){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $image = $_POST['image'];     
        
            $sql = "INSERT INTO images(image1) VALUE('$image')";
            $result = mysqli_query($con, $sql);
            header("location:all_image.php");
        }
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image insert</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php">Back</a>
    <div class="container">
        <div class="content">
            <fieldset>
                <legend>Image Insert</legend>
                <div class="form-container">
                    <form action="" method="post">
                        <input type="file" name="image" accept="image/*">
                        <br><br><br>

                        <input type="submit" value="Insert" name="insert" class="form-btn">
                    </form>
                </div>
            </fieldset>
        </div>
    </div>
</body>
</html>