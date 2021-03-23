<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>전남대 오늘 뭐 먹을래?</title>
 
        <!-- 공통 스타일시트 연결 -->
        <style>
            *{padding: 0; margin: 0;}
/* *{border: 1px dotted red;} */
 
/* 페이지 기본 글꼴과 크기 설정 */
body{font-family: "돋움", sans-serif; font-size: 14px;}
 
/* 모든 리스트의 블릿 기호 표시 제거 */
ul{list-style: none;
    position:absolute;
}
 
/* <a>요소의 기본 밑줄 제거 */
a{display: inline-block; text-decoration: none; color: #333333;}
 
/* 헤더영역의 로고와 회원가입/로그인 표시 영역 */
/* 가로사이즈 지정 및 가운데 정렬 */
/* 회원가입/로그인 글씨를 오른쪽 배치할 때 absolute 포지션 사용하기 위해 부모뷰는 relative여야 함. */
#top{ width: 1000px; height: 80px; margin: 0 auto; position: relative; }
 
/* 로고 제목 위치와 폰트 사이즈 */
#top h3{position: absolute; top: 25px; left: 40px; font-size: 28px;}
 
/* 회원가입/로그인 글씨 위치 */
#top #top_menu{position: absolute; top: 30px;right: 60px;}
#top #top_menu li{display: inline-block;}
 
/* 헤더안에 네비게이션 메뉴 */
#menu_bar{height: 48px; background-color: #443e58; font-size: 16px;}
#menu_bar ul{width: 1000px;margin: 0 auto; padding: 14px 0px 14px 80px;}
#menu_bar ul li{display: inline; margin-right: 90px;}
#menu_bar ul li a{color: white;}

            </style>
    </head>
    <body>
        <header>
            <!-- 공통사용 php문서 외부 추가하기 : 공통 사용하는 php는 lib폴더에 작성 -->
            <?php include "header.php" ?>
        </header>
    
        <section>
            <!-- Main Content 문서를 별도로 제작 : 추루 유지보수시의 편리성 -->
            <?php include "main.php" ?>
        </section>
    </body>
</html>