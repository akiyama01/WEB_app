<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Expires" content="-1"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>腎Webカルテ｜ログイン</title>
<meta name="description" content="インターネット経由で最新の透析情報が 24時間365日確認できる「腎Webカルテ」サービス" />
<meta name="keywords" content="WEBカルテキーワード" />
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="master.css">
<link rel="stylesheet" href="swicher2.css">

</head>
<body>
<!-- header -->
<div id="content">
<div id="header" class="clearfix">
   <div class="hdr-logo"><img src="/webkarte/img/logo.png;jsessionid=1AB8E738F1AED20929EB68A30D8F4F8C" alt="Web karte" />
 </div><!-- / .hdrLogo -->
  <div class="hdr-right">
    <div class="hdr-font-size clearfix">
        </div><!-- / .hdr-font-size clearfix -->

  </div><!-- / .hdr-right -->
</div><!-- / #header -->

<div id="contents">

  <div class="contents-inner mb25">
    <div class="contents-inner-entry clearfix">
      <h1 class="login-h1"><span>WEBカルテログイン<br/></span></h1>

      <div class="index-inner clearfix">
         
          
            <form method="post" action="web2.php">
            <div class="jumbotron">
            <fieldset>

               <!-- <div class="field field-input" style="position:relative; display: block; width:500px;">
               <input type="text" name="loginId" maxlength="12" value="" onblur="phshow(this);" onfocus="phhide(this);" id="loginid" style="ime-mode:disabled;" title="ログインID">
               <span class="placeholder" onclick="phclick(this);"> ログインID</span>
               </div>
                      
                      <div class="field field-input" style="position:relative; display: block; width:500px;">
                      <input type="password" name="password" maxlength="20" value="" onblur="phshow(this);" onfocus="phhide(this);" id="password" style="ime-mode:disabled;" title="パスワード">
                      <span class="placeholder" onclick="phclick(this);"> パスワード</span>
                      </div>
                       -->
              <label>ID<input type="text" name="user_id"></label><br>
              <label>PW<input type="text" name="pass"></label><br>
              <div class="error"></div>
              <button type="submit" title="ログイン" alt="ログイン">ログイン</button>
              </fieldset>
              </div>
            
            </form>
                <!-- <div class="loginbox">
			<form name="common_loginActionForm" id="loginForm" method="post" action="/webkarte/common/login/" class="qwikform">
                <div class="field field-input" style="position:relative; display: block; width:500px;">
                <input type="text" name="loginId" maxlength="12" value="" onblur="phshow(this);" onfocus="phhide(this);" id="loginid" style="ime-mode:disabled;" title="ログインID">
                <span class="placeholder" onclick="phclick(this);"> ログインID</span>
                </div>
                
                <div class="field field-input" style="position:relative; display: block; width:500px;">
                <input type="password" name="password" maxlength="20" value="" onblur="phshow(this);" onfocus="phhide(this);" id="password" style="ime-mode:disabled;" title="パスワード">
                <span class="placeholder" onclick="phclick(this);"> パスワード</span>

                </div>
                
                <div class="error"><div id="errormessage" class="error_back"><font color="#ff0000" style="font-size:10pt;">セッションがタイムアウトしました。再度、ログインしてください。		</font><br /></div></div>
                <div class="submit">
                <input type="image" name="login" src="/webkarte/img/login-btn-no.png" onclick="javascript:login();" id="login" title="ログイン" alt="ログイン">　
                </div> -->



                <!-- これは授業でやったところ<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>Email：<input type="text" name="email"></label><br>
     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form> -->


                

            <ul>
                <li class="icon-forgot-pass"><a href="javascript:wopen2();">ID、パスワードを忘れてしまった方はこちらへ（透析患者さま用）</a></li>
                <li class="icon-login-help"><a href="javascript:wopen1();">ヘルプを見る</a></li>
                <li class="icon-healthchk"><a href="https://web.health-check.jp/webkarte/" target="_blank">健診ご利用者さまはこちらへ<img src="/webkarte/img/ico-sarrow.png;jsessionid=1AB8E738F1AED20929EB68A30D8F4F8C" width="20" height="20" alt="" /></a></li>
            </ul>
        </div>
          <!--form-->
		
			
			</div>
			</div>

        <div id="newcustomer">
            <p><span class="login-sample-pass">下記のサンプルID・パスワードでサンプル画面をご覧いただけます。 <br />
            <span class="gr">サンプルID: abcd1234 / パスワード： aB!59cH8</span></span></p>
        </div>
        </div>

        <div id="security_notice">
	    <span style="float:left;"><br/><script src=https://seal.verisign.com/getseal?host_name=karte.zenjinkai.or.jp&size=M&use_flash=YES&use_transparent=YES&lang=ja></script></span>
            <ul>
     


<div id="footer">
  <ul class="ftr-newwindow">
    <li><a href="http://www.zenjinkai.or.jp/" target="_blank">善仁会グループサイト</a></li>
    <li><a href="http://www.health-check.jp/" target="_blank">ヘルチェックサイト</a></li>
  </ul>
  <img src="/webkarte/img/logo-footer.png;jsessionid=1AB8E738F1AED20929EB68A30D8F4F8C" alt="医療法人社団善仁会" />
  <p class="copyright">Copyright(c) 2015 ZENJINKAI GROUP All rights reserved.</p>
</div><!-- / #footer -->

<div class="pagetop">
  <a href="#"><img src="/webkarte/img/pagetop.png;jsessionid=1AB8E738F1AED20929EB68A30D8F4F8C" alt="ページの上へ" /></a>
</div>
</div>
</body>
</html>