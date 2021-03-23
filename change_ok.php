<?php
    $rid="";
    if( isset($_SESSION['rid'])) $rid= $_SESSION['rid']; 
include "db.php";
include "password.php";

$pw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$sql = mq("update user set pw='".$pw."', name='".$name."', address='".$address."',phone='".$phone."' where rid='".$_rid."'");
echo "<script>alert('정보변경이 완료되었습니다 	'); history.back();</script>";

?>