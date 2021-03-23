<?php 
   include "db.php";
    $rid="";
    if( isset($_SESSION['rid'])) $rid= $_SESSION['rid']; 
?>
<?php
 $host = 'localhost';
 $user = 'root';
 $pw = '0130';
 $dbName = 'sikdang_project';
 $mysqli = new mysqli($host, $user, $pw, $dbName);
 
 $name=$_POST['name'];
 $price=$_POST['price'];
 $a= $_POST['storess'];
 $x = mq("select* from store where '{$a}'=id"); 
 $n=1;
while($store=$x->fetch_array()){
 if($rid==$store['manager'])
   {
      $storess=$a;
      break;
   }
   else  $storess=0;
   $n++;
}
if($storess==0)
{
   
   }
 
 $sql = "insert into menu (name,price,storess)";
 $sql = $sql. "values('$name','$price','$a')";
 if($mysqli->query($sql)){
    echo "<script>location.href='index.php'</script>";
 }else{
  echo 'fail to insert sql';
  echo "<br><br><a href='index.php'>메인페이지로가기</a>";
 }
?>