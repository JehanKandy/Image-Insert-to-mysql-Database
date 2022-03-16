<?php
    include("config.php");

    $sql = "SELECT * FROM images";
    $result = mysqli_query($con, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Images</title>
    <style>
                table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th{
            font-size: 120%;
            font-family: 'Oswald', sans-serif;
        }
        tr{
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }
        .edit{
            background: rgba(0, 172, 255, 0.19);
            color: rgba(0, 49, 255, 1);
            width: 80%;
            height: 30px;
            border: none;
            border-radius: 10px;
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }
        .edit:hover{
            background: rgba(0, 49, 255, 1);
            color: white;
        }
        h1{
            font-size: 350%;
            font-family: 'Poppins', sans-serif;
        }
        .acc_a{
            color: green;
        }
        .acc_d{
            color: red;
        }
        .back{
            background: rgba(0, 172, 255, 0.19);
            color: rgba(0, 49, 255, 1);
            width: 10%;
            height: 30px;
            border: none;
            border-radius: 10px;
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }
        .back:hover{
            background: rgba(0, 49, 255, 1);
            color: white;
        }
        p{
            font-size: 100%;
            font-family: 'Poppins', sans-serif;  
        }
        .btn {
            background: #b0ebc4;
            color: rgb(25, 155, 75);
            text-transform: capitalize;
            font-size: 20px;
            cursor: pointer;
            border-radius: 2%;
            border: none;
            width: 15%;
        }

        .btn:hover {
            background: rgb(25, 155, 75);
            color: #fff;
        }
    </style>
</head>
<body>
    <a href="index.php">Home</a>

            <table border="0">
                <tr>
                    <th>
                        Image ID
                    </th>
                    <th>
                        Image Name
                    </th>
                    <th>
                        Date
                    </th>                    
                </tr>
                <?php

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){

                ?>
                <tr>
                    <td>
                        <?php echo($row['id']); ?>
                    </td>
                    <td>
                        <?php echo($row['image1']); ?>
                    </td>
                    <td>
                        <?php echo($row['time']); ?>
                    </td>
                </tr>
                <?php
                }
            }

        ?>
            </table>
            <p>
                image preview in next version
            </p>



</body>
</html>