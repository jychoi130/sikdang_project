<?php   
include $_SERVER['DOCUMENT_ROOT']."/db.php"; 
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>추천페이지</title>
<link rel="stylesheet" type="text/css" href="all.css" />
<style>
</style>
</head>
<body>
<header>
        <?php include "header.php" ?>
        </header>
        <?php
    $sql = mq("select * from store");
    $store=$sql->fetch_array();
    $sid=$store['id'];
    ?>
        <h1>유형별 가장 많이 방문한 가게<br></h1>
        <hr>
        <table>
        <thead>
        <div id="한식">
        <h4>한식<h4>
          <tr>
                <th>가게명</th>
                <th>번호</th>
                <th>유형</th>
                <th>위치</th>
            </tr>
        </thead>
       <?php $sql = mq("select * from store where type='한식' order by count desc limit 0,5"); 
          $n=1;
          echo "<tbody>";
          while($store=$sql->fetch_array()){
            echo "<tr>";
            echo "<td width='400'>"?><a href='store.php?name=<?php echo $store['id'];?>'><?php echo $store['id'];?></a></td>
            <?php 
            echo " <td width='100'>" .$store["PHONE"]. "</td>";
            echo " <td width='100'>" .$store["type"]. "</td>";
            echo " <td width='100'>" .$store["place"]. "</td>";
            echo "</tr>";
            $n++;
          }?>
          </tbody>
          </table>
          <table>
          </div>
          <div id='중식'>
          <h4>중식</h4>
        <thead>
          <tr>
                <th>가게명</th>
                <th>번호</th>
                <th>유형</th>
                <th>위치</th>
            </tr>
        </thead>
       <?php $sql = mq("select * from store where type='중식' order by count desc limit 0,5"); 
          $n=1;
          echo "<tbody>";
          while($store=$sql->fetch_array()){
            echo "<tr>";
            echo "<td width='400'>"?><a href='store.php?name=<?php echo $store['id'];?>'><?php echo $store['id'];?></a></td>
            <?php 
            echo " <td width='100'>" .$store["PHONE"]. "</td>";
            echo " <td width='100'>" .$store["type"]. "</td>";
            echo " <td width='100'>" .$store["place"]. "</td>";
            echo "</tr>";
            $n++;
          }?>
          </tbody>
          </table>
          </div>
          <div id="양식">
          <table>
          <h4>양식<h4h>
        <thead>
          <tr>
                <th>가게명</th>
                <th>번호</th>
                <th>유형</th>
                <th>위치</th>
            </tr>
        </thead>
       <?php $sql = mq("select * from store where type='양식' order by count desc limit 0,5"); 
          $n=1;
          echo "<tbody>";
          while($store=$sql->fetch_array()){
            echo "<tr>";
            echo "<td width='400'>"?><a href='store.php?name=<?php echo $store['id'];?>'><?php echo $store['id'];?></a></td>
            <?php 
            echo " <td width='100'>" .$store["PHONE"]. "</td>";
            echo " <td width='100'>" .$store["type"]. "</td>";
            echo " <td width='100'>" .$store["place"]. "</td>";
            echo "</tr>";
            $n++;
          }?>
          </table>
          </div>
          <div id="일식">
          <table>
          <h4>일식</h4>
        <thead>
          <tr>
                <th>가게명</th>
                <th>번호</th>
                <th>유형</th>
                <th>위치</th>
            </tr>
        </thead>
       <?php $sql = mq("select * from store where type='일식' order by count desc limit 0,5"); 
          $n=1;
          echo "<tbody>";
          while($store=$sql->fetch_array()){
            echo "<tr>";
            echo "<td width='400'>"?><a href='store.php?name=<?php echo $store['id'];?>'><?php echo $store['id'];?></a></td>
            <?php 
            echo " <td width='100'>" .$store["PHONE"]. "</td>";
            echo " <td width='100'>" .$store["type"]. "</td>";
            echo " <td width='100'>" .$store["place"]. "</td>";
            echo "</tr>";
            $n++;
          }?>
          </tbody>
          </table>
          </div>
          <div id="카페">
          <table>
          <h4>카페<h4h>
        <thead>
          <tr>
                <th>가게명</th>
                <th>번호</th>
                <th>유형</th>
                <th>위치</th>
            </tr>
        </thead>
       <?php $sql = mq("select * from store where type='카페' order by count desc limit 0,5"); 
          $n=1;
          echo "<tbody>";
          while($store=$sql->fetch_array()){
            echo "<tr>";
            echo "<td width='400'>"?><a href='store.php?name=<?php echo $store['id'];?>'><?php echo $store['id'];?></a></td>
            <?php 
            echo " <td width='100'>" .$store["PHONE"]. "</td>";
            echo " <td width='100'>" .$store["type"]. "</td>";
            echo " <td width='100'>" .$store["place"]. "</td>";
            echo "</tr>";
            $n++;
          }?>
          </table>
    </div>
    
</body>
</html>