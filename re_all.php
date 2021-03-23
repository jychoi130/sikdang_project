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
        <body>
    <?php
    $sql = mq("select * from store");
    $store=$sql->fetch_array();
    $sid=$store['id'];
    ?>
    <div id="info">
        <h1>가장 많이 방문한 가게 TOP5<br></h1>
        <br><br>
        <table>
        <thead>
          <tr>
                <th>가게명</th>
                <th>번호</th>
                <th>유형</th>
                <th>위치</th>
            </tr>
        </thead>
       <?php $sql = mq("select * from store order by count desc limit 0,5"); 
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