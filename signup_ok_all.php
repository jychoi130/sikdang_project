<?php

 $host = 'localhost';
 $user = 'root';
 $pw = '0130';
 $dbName = 'sikdang_project';
 $mysqli = new mysqli($host, $user, $pw, $dbName);
 
 $rid=$_POST['rid'];
 $pw=$_POST['pw'];
 $name=$_POST['name'];
 $address=$_POST['address'];
 $phone=$_POST['phone']; 
 $level=$_POST['level']; 
 
 $sql = "insert into user (rid, pw, name, address, phone,level)";
 $sql = $sql. "values('$rid','$pw','$name','$address','$phone','$level')";
 if($mysqli->query($sql)){
    echo "<script>location.href='index.php'</script>";
 }else{
  echo 'fail to insert sql';
 }
?>
