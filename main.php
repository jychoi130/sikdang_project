<?php   
include "db1.php"; ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>메인페이지</title>
<link rel="stylesheet" type="text/css" href="button.css" />
<style>
	button{
		width:100pt;
		height:100pt;
		position:absolute;
	}
	#한식{
		top:180px;
		left:30px;
	}
	#중식{
		top:180px;
		left:180px;
	}
	#양식{
		top:180px;
		left:330px;
	}
	#일식{
		top:320px;
		left:30px;
	}
	#카페{
		top:320px;
		left:180px;
	}
	#후문{
		width:50px;
		height:40px; 
		position:absolute; 
		top:285px;
		left:700px;
		z-index:100; 
		background-color: rgba( 255, 255, 255, 0.5 );
		border: 1px solid rgba( 255, 255, 255, 0.5 )
	}
	#상대{
		width:50px;
		height:40px; 
		position:absolute; 
		top:230px;
		left:530px;
		z-index:100; 
		background-color: rgba( 255, 255, 255, 0.5 ); 
		border: 1px solid rgba( 255, 255, 255, 0.5 );
	}
	#정문{
		width:50px;
		height:40px; 
		position:absolute; 
		top:400px;
		left:600px;
		z-index:100; 
		background-color: rgba( 255, 255, 255, 0.5 ); 
		border: 1px solid rgba( 255, 255, 255, 0.5 );
	}
</style>
</head>
<body>
<input type=button style="width:100pt;height:100pt;position:absolute;top:320px;left:330px" onclick="location.href='recomand.php'" value="추천">
<img src="map.png" style="width:210pt;height:210pt;position:absolute;top:180px;left:480px">

<form action="type_store.php?type_name=$value" method="POST"> 
    <button id="한식">
        <input  type="hidden" value="한식" name="var_value">한식
	</button>
	</form>
	<form action="type_store.php?type_name=$value" method="POST"> 
	<button id="중식">
        <input  type="hidden" value="중식" name="var_value">중식
	</button>
	</form>
	<form action="type_store.php?type_name=$value" method="POST"> 
	<button id="양식">
        <input  type="hidden" value="양식" name="var_value">양식
	</button>
	</form>
	<form action="type_store.php?type_name=$value" method="POST"> 
	<button id="일식">
        <input  type="hidden" value="일식" name="var_value">일식
	</button>
	</form>
	<form action="type_store.php?type_name=$value" method="POST"> 
	<button id="카페">
        <input  type="hidden" value="카페" name="var_value">카페
	</button>
</form>
<form action="place_store.php?place_name=$value" method="POST"> 
    <button id="후문">
        <input  type="hidden" value="후문"  name="var_value1">후문
	</button>
	</form>
	<form action="place_store.php?place_name=$value" method="POST"> 
	<button id="정문">
        <input  type="hidden" value="정문"  name="var_value1">정문
	</button>
	</form>
	<form action="place_store.php?place_name=$value" method="POST"> 
	<button id="상대">
        <input  type="hidden" value="상대"  name="var_value1">상대
	</button>
</form>
</body>
</html>