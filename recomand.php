<?php   
include "db1.php"; ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>추천페이지</title>
<link rel="stylesheet" type="text/css" href="all.css" />
<style>
	button{
		width:100pt;
		height:100pt;
		position:absolute;
	}
	#전체{
		top:180px;
		left:30px;
	}
	#유형{
		top:180px;
		left:180px;
	}
	#위치{
		top:180px;
		left:330px;
	}

</style>
</head>
<body>
<header>
            <?php include "header.php" ?>
        </header>
<form action="re_all.php"> 
    <button id="전체">
        <input  type="hidden" value="전체" name="var_value">전체
	</button>
	</form>
	<form action="re_type.php" method="POST"> 
	<button id="유형">
        <input  type="hidden" value="유형" name="var_value">유형
	</button>
	</form>
	<form action="re_place.php" method="POST"> 
	<button id="위치">
        <input  type="hidden" value="위치" name="var_value">위치
	</button>
	</form>

</body>
</html>