<?php
	include "db.php";
	$rid = $_GET["rid"];
	$sql = mq("select * from user where rid='".$rid."'" );
	$user = $sql->fetch_array();
	if($user==0)
	{
?>
	<div style='font-family:"malgun gothic"';><?php echo $rid; ?>는 사용가능한 아이디입니다.</div>
<?php 
	}else{
?>
	<div style='font-family:"malgun gothic"; color:red;'><?php echo $rid; ?>중복된아이디입니다.<div>
<?php
	}
?>
<button value="닫기" onclick="window.close()">닫기</button>
<script>
</script>