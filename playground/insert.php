<?php
include 'template/header.html';
 require_once 'connectdb.php';
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $frmUsername = $frmUserpassword = "" ;
 $frmUsername = $_POST["username"];
 $frmUserpassword = $_POST["password"];

 if ($frmUsername && $frmUserpassword) {
     $strSQL = "INSERT INTO `user`(`username`, `password_hash`, status)";
     $strSQL .= " VALUES ('" . $frmUsername . "','" . $frmUserpassword . "',0 )";
     $result = $myconn->query($strSQL);
     if ($result)
     {
         echo "เพิ่มข้อมูลสำเร็จ";
     }
     else 
     {
     echo "ไม่สามารถเพิ่มข้อมูลได้" ;
     }
     
 }
}






//  $strSQL = "INSERT INTO `user`(`username`, `password_hash`)"; 
//  $strSQL .=" VALUES ('folk','password for user 02')";

//  $result = $myconn->query($strSQL);
//  if($result){
//      echo "1";

//  } else 
//      echo "2";
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

<form action="insert.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
    <small id="emailHelp" class="form-text text-muted">เเขบ.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  
  </div>
  <button type="submit" class="btn btn-primary">บันทึก</button>
</form>
</body>
</html>

