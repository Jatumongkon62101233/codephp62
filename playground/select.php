<?php
    include 'template/header.html';
    require_once 'connectdb.php';
    // else
    
        // echo 'success'; 
        // echo "<br>";
        // echo 'after connect database';
    $strSQL = "SELECT  `id`, `username`, `status` FROM `user`";
    $result = $myconn->query($strSQL);
     
   
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>

       <table  class="table">
       <thead class="thead-dark">
          <tr>
              <th> UserID </th>
              <th> UserName </th>
              <th> Status </th>
              <th> Edit </th>
              <th> Delete </th>
          </tr>
       </thead>

       <tbody>
    <?php
     while ($row = $result->fetch_array()) {
        // echo $row["username"] . "<br>";
        ?>

         <tr>
             <td> <?php echo $row["id"]?></td>
             <td> <?php echo $row["username"] ?></td>
             <td> <?php echo $row["status"]?></td>

             <td> <a href="update.php?id=<?= $row["id"]?>&username=<?= $row["username"]?>&status=<?= $row["status"]?>"><i class="fas fa-edit"></i></td>
             <td><a href="delete.php?id=<?php echo $row["id"]?>"><i class="fas fa-trash"></i></a></td>
         </tr>
         <?php
    }
    ?>
     </tbody>
     
        </table>
        <a href="insert.php">เพิ่มผู้ใช้</a>
        <?php

        include 'template/header.html';
        ?>
    </body>

    </html>
  