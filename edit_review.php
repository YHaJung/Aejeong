﻿<!DOCTYPE html>
<?php  if (session_status() == PHP_SESSION_NONE) {
    session_start();}
    $id=$_SESSION['UserID'];
    $item=$_GET['item'];
    $db=mysqli_connect('172.30.1.53:3306', '1111', '1234', 'aejeong');
    $rowNick=mysqli_query($db, "SELECT * FROM Users WHERE UserID='$id'");
    $row=mysqli_fetch_assoc($rowNick);
    $Nickname=$row['Nickname'];
    $result=mysqli_query($db, "SELECT * FROM Reviews WHERE Nickname='$Nickname'");
    $row=mysqli_fetch_assoc($result);
    $result1=mysqli_query($db, "SELECT * FROM items WHERE ItemName='$item'");
    $row1=mysqli_fetch_assoc($result1);
?>
<html>
<head><meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="writingReviewStyle.css">
<title>애정 : 리뷰 수정</title>
<script type="text/javascript">

function typed()
{
      if(event.keyCode < 48 ||event.keyCode > 53){
          alert("0~5사이의 숫자로 입력해주세요");
          document.getElementById('rating_text').value = 5;

        }
      }
</script>
</head>

<body>
  <section id="back_bar">
      <button id="back_icon"><img src="picture/back_button.png" onclick="history.back(-1);"></button>
      <label id="explain_label"><b>리뷰 수정</b></label>
  </section>

  <p class="noneline_for_space"></p>   <!--아래section과 아래 banner 구분-->
  <form action = "review_modify.php?item=<?php echo $row['ItemName'];?>" method = "post">
      <section id="review_section"> <!--윗부분 정보 섹션. 나에 대한 정보 + 제품 정보 표시-->
    <article id="profile_article"><!--제품 div-->
      <div id="goods_div">
        <img src="<?php echo $row1['Picture']; ?>" align="left">
        <p style="font-size:150%"><b><?php echo $row['ItemName']; ?></b></p>
        <p style="font-size:80%"><?php echo $row['Date']; ?></p>
        <p class="noneline_for_space"></p>   <!--아래section과 아래 banner 구분-->
      </div>
    </article>
    <article id="review_article">
	<form>
        <p style="padding-right: 1%;">평점
          <input type="text" id="rating_text" name="Rating"  maxlength="1" onkeypress="typed();" value=<?php echo $row['Rating']; ?>> <b><font size="5%">/5</font></b>
        </p></form>
        <p style="color:#6699ff;">장점 <img src="picture/smile.png" width="3%"></p>
        <input type="text" class="writing_text" name="Advantage" value="<?php echo $row['Advantage']; ?>">
        <p style="color:#ff3366;">단점 <img src="picture/bad.png" width="3%"></p>
        <input type="text" class="writing_text" name="Weakness" value="<?php echo $row['Weakness']; ?>">
        <p style="color:#888888;">기타<img src="picture/soso.png" width="3%"></p>
        <input type="text" class="writing_text" name="Etc" value="<?php echo $row['Etc']; ?>">
    </article>

    <p class="noneline_for_space"></p>   <!--아래section과 아래 banner 구분-->

      <input type="submit" id="done_button" value="작성 완료">
      <input type="button" id="yet_button" value="작성 취소" onclick="history.back(-1);">
  </section>
</form>


  <p class="noneline_for_space"></p>   <!--아래section과 아래 banner 구분-->

  <section id="bottom_bar">   <!--아래배너-->
    <button class="bottom_bar_button" id="category_icon" onclick="location.href='productList1.php?category1=1&category2=1'"><img src="picture/category_icon.png"></button>
    <button class="bottom_bar_button" id="home_icon" onclick="location.href='LoginHome.php'"><img src="picture/home_icon.png"></button>
    <button class="bottom_bar_button" id="myPage_icon"onclick="location.href='myPage.php'"><img src="picture/myPage_icon.png"></button>
  </section>

</body>
</html>
