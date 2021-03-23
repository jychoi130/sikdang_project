<?php 
session_start();
    $rid="";
    $level="";
    if( isset($_SESSION['rid'])) $rid= $_SESSION['rid']; 
    if( isset($_SESSION['level'])) $level= $_SESSION['level'];
?>
<?php
 
 $host = 'localhost';
 $user = 'root';
 $pw = '0130';
 $dbName = 'sikdang_project';
 $mysqli = new mysqli($host, $user, $pw, $dbName);
 
 $place=$_POST['place'];
 $time=$_POST['time'];
 $name=$_POST['name'];
 $type=$_POST['type'];
 $PHONE=$_POST['PHONE'];
 
 $sql = "insert into store (id, type, place, time,PHONE,manager,count)";
 $sql = $sql. "values('$name','$type','$place','$time','$PHONE','$rid','0')";
// $store['count']=0;
 if($mysqli->query($sql)){
    echo "<script>location.href='index.php'</script>";
 }else{
  echo 'fail to insert sql';
 }
?>