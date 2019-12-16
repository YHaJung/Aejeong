﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title> 애정 : 메인 홈페이지</title>
    <link rel="stylesheet" href="homeStyle.css">
    <script type="text/javascript">
        function sendTest(index) {
            location.href = "productList.html?" + index;
        }
        function showPopup() { window.open("popup.html", "안내", "width=400, height=300, left=100, top=50"); }
    </script>
</head>
<body>

  <section id="search_bar">
      <p>
        <button id="logo_icon" onclick="location.href='home.php'"><img src="picture/newLogo_white.png"></button>
        <wrapper>
          <button type="button" id="login_button" onclick="location.href='loginPage.php'"><b>로그인</b></button>
        </wrapper>
      </p>
  </section>

  <section class="center_align_section" id="app_info_section">
    <img id="app_info" src="picture\w13x.png" border="3">
    <img id="app_info" src="picture\w23x.png" border="3">
    <img id="app_info" src="picture\w33x.png" border="3">

  </section>

  <section class="center_align_section">
    <form method="post" onclick="showPopup();">
      <input id="search" name="search_text" type="text" value="제품 혹은 브랜드명을 입력하세요." />
    </form>
  </section>

  <p padding="3%"></p>

    <section>
        <table >
            <tr>
                <td>
                    <button class="img_button" type="button" onclick="showPopup();">
                        <img src="picture\category4.png" class="category_images">
                        <p>샴푸, 치약 등 <br> <b>목욕/세정제</b></p>
                    </button>
                </td>
                <td>
                    <button class="img_button" type="button" onclick="showPopup();">
                        <img src="picture\category3.png" class="category_images">
                        <p>에센스, 염색 등 <br> <b>미용/관리</b></p>
                    </button>
                </td>
                <td>
                    <button class="img_button" type="button" onclick="showPopup();">
                        <img src="picture\category2.png" class="category_images">
                        <p>종합영양제, 유산균 등<br> <b> 영양제 </b></p>
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    <button class="img_button" type="button" onclick="showPopup();">
                        <img src="picture\category2.png" class="category_images">
                        <p>의약부외품, 소화제 등 <br> <b>의약품</b></p>
                    </button>
                </td>
                <td>
                    <button class="img_button" type="button" onclick="showPopup();">
                        <img src="picture\category7.png" class="category_images">
                        <p>응고형 벤토나이트 <br> <b>고양이 모래</b></p>
                    </button>
                </td>
                <td>
                    <button class="img_button" type="button" onclick="showPopup();">
                        <img src="picture\category6.png" class="category_images">
                        <p><b>기타</b></p>
                    </button>
                </td>
            </tr>
        </table>
    </section>

  <section id="bottom_bar">
    <button class="bottom_bar_button" id="category_icon" onclick="showPopup();"><img src="picture\category_icon.png"></button>
    <button class="bottom_bar_button" id="home_icon" onclick="showPopup();"><img src="picture\home_icon.png"></button>
    <button class="bottom_bar_button" id="myPage_icon" onclick="showPopup();"><img src="picture\myPage_icon.png"></button>
  </section>

</body>
</html>