<?php
  if(isset($_GET["logout"]))
  {
    unset($_SESSION["account"]);
    header("Location:home.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="swiper.css">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="swiper.js"></script>
    
    <title>高大課程平台</title>
    <style>
        .body {
          background: #fff;
          font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
          font-size: 14px;
          color:#000;
          margin: 0;
          padding: 0;
        }
        .swiper-container {
          width: 100%;
          padding-top: 50px;
          padding-bottom: 50px;
        }
        .swiper-slide {
          background-position: center;
          background-size: cover;
          width: 300px;
          height: 300px;
        }
      </style>
</head>
<body>
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="home.php"><img src="https://scontent.fkhh1-1.fna.fbcdn.net/v/t1.0-9/59887336_2148001515320668_3034674628355162112_n.jpg?_nc_cat=102&_nc_ht=scontent.fkhh1-1.fna&oh=3e3b0a3597d9b5d9d1618160a6ef6f59&oe=5D5B49C3" alt=""></a>
            </div>
            <div class="loging">
                <div class="logout"><a href="signin.php">會員登入</a></div>
                <div class="logout"><a href="home.php?&logout=yes">會員登出</a></div>
            </div>
            <div class="clear"></div>
            <div class="title">
                <div class="welcome"><marquee scrollamount="10" behavior="alternate">Welcome!!</marquee></div>
            </div>
        </div>
       <div class="content">
         <div class="picture">
        <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide" onclick="infoclick1()" style="background-image:url(http://www.im.nuk.edu.tw/wp-content/uploads/2016/06/Kai.png)" ><span>王凱</span></div>
              <div class="swiper-slide" onclick="infoclick2()" style="background-image:url(http://www.im.nuk.edu.tw/wp-content/uploads/2016/06/Liao.jpg)"><span>廖洧杰</span></div>
              <div class="swiper-slide" onclick="infoclick3()" style="background-image:url(http://www.im.nuk.edu.tw/wp-content/uploads/2016/06/Leon.png)"><span>王學亮</span></div>
              <div class="swiper-slide" onclick="infoclick4()" style="background-image:url(http://www.im.nuk.edu.tw/wp-content/uploads/2016/06/Fred.jpg)"><span>郭英峰</span></div>
              <div class="swiper-slide" onclick="infoclick5()" style="background-image:url(http://www.im.nuk.edu.tw/wp-content/uploads/2016/06/Ting.jpg)"><span>丁一賢</span></div>
              <div class="swiper-slide" onclick="infoclick6()" style="background-image:url(http://www.im.nuk.edu.tw/wp-content/uploads/2016/06/Henry.jpg)"><span>楊書成</span></div>
              <div class="swiper-slide" onclick="infoclick7()" style="background-image:url(http://www.im.nuk.edu.tw/wp-content/uploads/2016/06/James.png)"><span>吳建興</span></div>
              <div class="swiper-slide" onclick="infoclick8()" style="background-image:url(http://www.im.nuk.edu.tw/wp-content/uploads/2016/06/HsinChang.png)"><span>楊新章</span></div>
              <div class="swiper-slide" onclick="infoclick9()" style="background-image:url(http://www.im.nuk.edu.tw/wp-content/uploads/2016/06/Hanwei.png)"><span>蕭漢威</span></div>
              <div class="swiper-slide" onclick="infoclick10()" style="background-image:url(http://www.im.nuk.edu.tw/wp-content/uploads/2016/06/Bear.png)"><span>趙建雄</span></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
          </div>
          </div>
          <script>
            var swiper = new Swiper('.swiper-container', {
              effect: 'coverflow',
              grabCursor: true,
              centeredSlides: true,
              slidesPerView: 'auto',
              coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows : true,
              },
              pagination: {
                el: '.swiper-pagination',
              },
            });
            function infoclick1(){
              document.querySelector('.info p').innerHTML = "<div class='catalog'>"+
                   "<ul class='tag'><li><a href='information.php?name=王凱'>課程資訊</a></li><li><a href='#'>課程評價</a></li><li><a href='#'>歷屆考古</a></li>"+
                   "<li><a href='#'>考古上傳</a></li><li><a href='#'>討論區</a></li></ul>"+
                   "<ul class='tag2'><li><h2 class='heading'>#課程 王凱 行銷管理</h2></li>"+
                   "<li>[課程名稱]　行銷管理</li><li>[修課學期]　上學期</li><li>[開課系所]　資管大二必修</li>"+
                   "<li>[授課教授]　王凱</li><br><li id='last'>[推薦指數]　4.5/5分</li></ul></div>" ;
            }
            function infoclick2(){
              document.querySelector('.info p').innerHTML = "<div class='catalog'>"+
                   "<ul class='tag'><li><a href='information.php?name=廖洧杰'>課程資訊</a></li><li><a href='#'>課程評價</a></li><li><a href='#'>歷屆考古</a></li>"+
                   "<li><a href='#'>考古上傳</a></li><li><a href='#'>討論區</a></li></ul>"+
                   "<ul class='tag2'><li><h2 class='heading'>#課程 廖洧杰 Web 前端開發</h2></li>"+
                   "<li>[課程名稱]　Web 前端開發</li><li>[修課學期]　下學期</li><li>[開課系所]　資管大三選修</li>"+
                   "<li>[授課教授]　廖洧杰</li><br><li id='last'>[推薦指數]　4.5/5分</li></ul></div>" ;
            }
            function infoclick3(){
              document.querySelector('.info p').innerHTML = "<div class='catalog'>"+
                   "<ul class='tag'><li><a href='information.php?name=王學亮'>課程資訊</a></li><li><a href='#'>課程評價</a></li><li><a href='#'>歷屆考古</a></li>"+
                   "<li><a href='#'>考古上傳</a></li><li><a href='#'>討論區</a></li></ul>"+
                   "<ul class='tag2'><li><h2 class='heading'>#課程 王學亮 經濟學</h2></li>"+
                   "<li>[課程名稱]　經濟學</li><li>[修課學年]　106或107學年</li><li>[開課系所]　資管大一必修</li>"+
                   "<li>[授課教授]　王學亮</li><br><li id='last'>[推薦指數]　4.5/5分</li></ul></div>" ;
            }
            function infoclick4(){
              document.querySelector('.info p').innerHTML = "<div class='catalog'>"+
                   "<ul class='tag'><li><a href='information.php?name=郭英峰'>課程資訊</a></li><li><a href='#'>課程評價</a></li><li><a href='#'>歷屆考古</a></li>"+
                   "<li><a href='#'>考古上傳</a></li><li><a href='#'>討論區</a></li></ul>"+
                   "<ul class='tag2'><li><h2 class='heading'>#課程 郭英峰 企業管理</h2></li>"+
                   "<li>[課程名稱]　企業管理</li><li>[修課學期]　上學期</li><li>[開課系所]　資管大一必修</li>"+
                   "<li>[授課教授]　郭英峰</li><br><li id='last'>[推薦指數]　4.5/5分</li></ul></div>" ;
            }
            function infoclick5(){
              document.querySelector('.info p').innerHTML = "<div class='catalog'>"+
                   "<ul class='tag'><li><a href='information.php?name=丁一賢'>課程資訊</a></li><li><a href='#'>課程評價</a></li><li><a href='#'>歷屆考古</a></li>"+
                   "<li><a href='#'>考古上傳</a></li><li><a href='#'>討論區</a></li></ul>"+
                   "<ul class='tag2'><li><h2 class='heading'>#課程 丁一賢 網頁程式設計</h2></li>"+
                   "<li>[課程名稱]　網頁程式設計</li><li>[修課學期]　下學期</li><li>[開課系所]　資管大二必修</li>"+
                   "<li>[授課教授]　丁一賢</li><br><li id='last'>[推薦指數]　4.5/5分</li></ul></div>" ;
            }
            function infoclick6(){
              document.querySelector('.info p').innerHTML = "<div class='catalog'>"+
                   "<ul class='tag'><li><a href='information.php?name=楊書成&subject=經濟學'>課程資訊</a></li><li><a href='classdb.php?name=楊書成&subject=經濟學'>課程評價</a></li><li><a href='history.php?name=楊書成&subject=經濟學'>歷屆考古</a></li>"+
                   "<li><a href='upload.php?name=楊書成&subject=經濟學'>考古上傳</a></li><li><a href='#'>討論區</a></li></ul>"+
                   "<ul class='tag2'><li><h2 class='heading'>#課程 楊書成 經濟學</h2></li>"+
                   "<li>[課程名稱]　經濟學</li><li>[修課學期]　上學期</li><li>[開課系所]　資管大一必修</li>"+
                   "<li>[授課教授]　楊書成</li><br><li id='last'>[推薦指數]　4.5/5分</li></ul></div>" ;
            }
            function infoclick7(){
              document.querySelector('.info p').innerHTML = "<div class='catalog'>"+
                   "<ul class='tag'><li><a href='information.php?name=吳建興'>課程資訊</a></li><li><a href='#'>課程評價</a></li><li><a href='#'>歷屆考古</a></li>"+
                   "<li><a href='#'>考古上傳</a></li><li><a href='#'>吳建興</a></li></ul>"+
                   "<ul class='tag2'><li><h2 class='heading'>#課程 吳建興 統計學(二)</h2></li>"+
                   "<li>[課程名稱]　統計學(二)</li><li>[修課學期]　下學期</li><li>[開課系所]　資管大二必修</li>"+
                   "<li>[授課教授]　吳建興</li><br><li id='last'>[推薦指數]　4.5/5分</li></ul></div>" ;
            }
            function infoclick8(){
              document.querySelector('.info p').innerHTML = "<div class='catalog'>"+
                   "<ul class='tag'><li><a href='information.php?name=楊新章'>課程資訊</a></li><li><a href='#'>課程評價</a></li><li><a href='#'>歷屆考古</a></li>"+
                   "<li><a href='#'>考古上傳</a></li><li><a href='#'>討論區</a></li></ul>"+
                   "<ul class='tag2'><li><h2 class='heading'>#課程 楊新章 資料結構</h2></li>"+
                   "<li>[課程名稱]　資料結構</li><li>[修課學期]　上學期</li><li>[開課系所]　資管大二必修</li>"+
                   "<li>[授課教授]　楊新章</li><br><li id='last'>[推薦指數]　4.5/5分</li></ul></div>" ;
            }
            function infoclick9(){
              document.querySelector('.info p').innerHTML = "<div class='catalog'>"+
                   "<ul class='tag'><li><a href='information.php?name=蕭漢威'>課程資訊</a></li><li><a href='#'>課程評價</a></li><li><a href='#'>歷屆考古</a></li>"+
                   "<li><a href='#'>考古上傳</a></li><li><a href='#'>討論區</a></li></ul>"+
                   "<ul class='tag2'><li><h2 class='heading'>#課程 蕭漢威 Python程式設計</h2></li>"+
                   "<li>[課程名稱]　Python程式設計</li><li>[修課學期]　下學期</li><li>[開課系所]　資管大二選修</li>"+
                   "<li>[授課教授]　蕭漢威</li><br><li id='last'>[推薦指數]　4.5/5分</li></ul></div>" ;
            }
            function infoclick10(){
              document.querySelector('.info p').innerHTML = "<div class='catalog'>"+
                   "<ul class='tag'><li><a href='information.php?name=趙建雄'>課程資訊</a></li><li><a href='#'>課程評價</a></li><li><a href='#'>歷屆考古</a></li>"+
                   "<li><a href='#'>考古上傳</a></li><li><a href='#'>討論區</a></li></ul>"+
                   "<ul class='tag2'><li><h2 class='heading'>#課程 趙建雄 專案管理</h2></li>"+
                   "<li>[課程名稱]　專案管理</li><li>[修課學期]　上學期</li><li>[開課系所]　資管大三必修</li>"+
                   "<li>[授課教授]　趙建雄</li><br><li id='last'>[推薦指數]　4.5/5分</li></ul></div>" ;
            }
          </script>
        <div class="info"><p></p></div>
           
           
          
          
        </div>
        <div class="clear"></div>
   
     <div class="footer"></div>
     </div>
           
        

</body>
</html>

