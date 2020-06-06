<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="top.css">
</head>
<body id="main">

<!-- Main[Start] $view-->

<div id="a">G'sメディカルクリニック</div>

<div id="container">
  <div class="button-1">
    <div class="eff-1"></div>
    <a href="login.php">カルテ ログイン</a>
  </div>
  <div class="button-4">
    <div class="eff-4"></div>
    <a href="#"> 担当医 </a>
  </div>
  <div class="button-2">
    <div class="eff-2"></div>
    <a href="#"> 予防接種のご案内 </a>
  </div>
  <div class="button-3">
    <div class="eff-3"></div>
    <a href="#">お問い合わせ</a>
  </div>
</div>

<div class="slide">
<ul>
<li><img src="img/10230002065.jpg" width="600" height="400" id="doctor"></li>
<li><img src="img/34992557.jpg" width="600" height="400" id="staff"></li>
<li><img src="img/publicdomainq-0014099qii.jpg" width="600" height="400" id="machine"></li>
<li><img src="img/column_91.jpg" width="600" height="400" id="Nutrition"></li>
</ul>  
</div>

<div id="about">
  <h3 class="about__text"></h3>
  <p class="about__title">当院について</p>
  <p class="about__text">G'sメディカルクリニックは、患者様本位の診療に努める地域密着型クリニックです。</p>
  <p class="about__text">正確、最速、誠実、をモットーとするベテランの医師達</p>
  <p class="about__text">どんな状況にも臨機応変に対応出来る高度な医療スタッフ</p>
  <p class="about__text">最新の設備と負担の少ない料金設定</p> 
  <p class="about__text">万全の体制で、皆様の健康を支えます。</p> 
</div>

<div class="Access">
  <h6 class="Access__title">アクセス</h6>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1097.4187034197619!2d139.71358465348354!3d35.66732070714054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x35396adb5ba7ce03!2sG&#39;s%20ACADEMY%20TOKYO!5e0!3m2!1sja!2sjp!4v1586445474099!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  <p class="Access__text">G'sメディカルクリニック</p>
  <p class="Access__text">所在地 〒107-0061東京都港区北青山3-5-6 青朋ビル2F</p>
  <p class="Access__text">TEL 03-5413-5045</p>
  <p class="Access__text">FAX 03-5413-5046</p>
</div> 

<footer class="footer">
  copyrights 2020 G's Medical clinic All RIghts Reserved.
</footer>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(function() {
 
 $('body').hide().fadeIn(1800);

});


$(function(){
    var $setElm = $('.slide'),
    fadeSpeed = 1500,
    switchDelay = 5000;
 
    $setElm.each(function(){
        var targetObj = $(this);
        var findUl = targetObj.find('ul');
        var findLi = targetObj.find('li');
        var findLiFirst = targetObj.find('li:first');
 
        findLi.css({display:'block',opacity:'0',zIndex:'99'});
        findLiFirst.css({zIndex:'100'}).stop().animate({opacity:'1'},fadeSpeed);
 
        setInterval(function(){
            findUl.find('li:first-child').animate({opacity:'0'},fadeSpeed).next('li').css({zIndex:'100'}).animate({opacity:'1'},fadeSpeed).end().appendTo(findUl).css({zIndex:'99'});
        },switchDelay);
    });
});

</script>

</body>
</html>
