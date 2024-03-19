<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>IQテスト2017</title>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WM29K37');</script>
<!-- End Google Tag Manager -->

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/iq2017.css" rel="stylesheet">
<link rel="shortcut icon" href="./img/flogo_256.ico">
<!-- <link rel="shortcut icon" href="./img/favicon.ico"> -->


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>


<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WM29K37"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="https://iqtest2017.com/">IQ TEST 2017</a>
    </div>

    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-2" aria-expanded="false" style="height: 1px;">
    <ul class="nav navbar-nav navbar-right">
  <li><a href="./ranking.php">Ranking</a></li>
  <li><a href="./SpecialThanks.html">Special Thanks</a></li>
  <li><a href="./contact.html">Contuct</a></li>
      </ul>
    </div>
  </div>
</nav>


<div  id="main">
<div class="container-fluid">


  <div class="hidden-xs hidden-sm col-md-3 col-lg-3"><!-- <h2>RANKING</h2>--></div>


  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- Center -->
      <div class="well">
      <h1 class="title">TOP RANKER 50</h1>

      <?php
      require_once dirname(__FILE__) ."/tools/rank_table.php";
      echo(  load_ranking(50,"D")  );
      ?>
     <p class="centerlogo"><img src="./img/flogo_32.png"></p>

      </div>
</div><!-- Center -->

<div class="hidden-xs hidden-sm col-md-3 col-lg-3"></div>




      </div><!-- end conteiner -->
</div><!-- end main -->


<div  class="footer">
  <div class="col-xs-6  col-sm-2 col-md-2 col-lg-2"></div>
  <div class="col-xs-6 col-sm-5 col-md-5 col-lg-5"><p class="center f_">Copyright © IQ TEST 2017. All rights reserved.</p></div>
  <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><div class="text-right f_"><span id="f_text"><a href="./tokutei.html" rel="me nofollow" >特定商取引法に基づく表示</a></span><span id="f_text"><a href="./privacypolicy.html" rel="me nofollow"  >プライバシーポリシー</a></span></div>
  </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>



</body>
</html>