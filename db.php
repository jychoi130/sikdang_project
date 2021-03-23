 <?php

  
  $db = new mysqli("localhost","root","0130","sikdang_project");
  $db->set_charset("utf8");

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>