<?php
require_once 'connectdb.php';


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = "" ;
    if(isset($_GET["id"])){
    $id = $_GET["id"];
    echo $id;
    }


    // $frmUserpassword = $_POST["password"];
   
    // if ($frmUsername && $frmUserpassword) {
    //     $strSQL = "INSERT INTO `user`(`username`, `password_hash`, status)";
    //     $strSQL .= " VALUES ('" . $frmUsername . "','" . $frmUserpassword . "',0 )";
    //     $result = $myconn->query($strSQL);
    //     if ($result)
    //     {
    //         echo "เพิ่มข้อมูลสำเร็จ";
    //     }
    //     else 
    //     {
    //     echo "ไม่สามารถเพิ่มข้อมูลได้" ;
    //     }
        
    // }
   }