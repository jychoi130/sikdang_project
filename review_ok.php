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
 
 $score=$_POST['score'];
 $reviewtext=$_POST['reviewtext'];
 $store=$_POST['store'];
 
 $sql = "insert into review (score, reviewtext, reviewer, stores)";
 $sql = $sql. "values('$score','$reviewtext','$rid','$store')";
 if($mysqli->query($sql)){
    echo "<script>history.go(-1);</script>";
 }else{
  echo 'fail to insert sql';
 }
?>