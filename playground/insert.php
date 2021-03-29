<?php
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';

 $dbname = 'codephp62';

 $myconn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 if ($myconn->connect_errno) {
     printf("Connect failed: %s\n", $myconn->connect_error);
     exit();
 }
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
    <title>Document</title>
</head>
<body>
<form action="insert.php" method="post">
    <table border="1"
    <tr>
        <td>username</td>
        <td>
        <input type ="text" name="username" id="username"></td>
    </tr>
    <tr>
        <td>password</td>
        <td><input type="password" name="password" id="password"> </td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="save"></td>
    </tr>
    </table>
</form>
</body>
</html>

