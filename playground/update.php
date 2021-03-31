<?php
 require_once 'connectdb.php';
 $id = "";
 $Username = "";
 $status ="";

 if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = "" ;
    if(isset($_GET["id"]) && $_GET["id"] != ''){
        $id = $_GET["id"];
        $Username = $_GET["Username"];
        $status = $_GET["status"];

    }
    else {
        echo "id is null";
    }
   }
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $frmUsername = $frmUserpassword = "" ;
 $frmUsername = $_POST["username"];
 $frmUserpassword = $_POST["password"];

 if ($frmUsername && $frmUserpassword) {
     $strSQL = "UPDATE `user` SET `id`=[value-1],`username`=[value-2],`password_hash`=[value-3],`status`=[value-4] WHERE id=".$id;

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
    <title>Document</title>
</head>
<body>
<form action="update.php" method="post">
    <table border="1"
    <tr>
        <td>username</td>
        <td>
        <input type ="text" name="username" value="<?= $Username ?>"></td>
    </tr>
    <tr>
        <td>Status</td>
        <td><input type="text" name="status" value="<?= $status ?>"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="save"></td>
    </tr>
    </table>
</form>
</body>
</html>

