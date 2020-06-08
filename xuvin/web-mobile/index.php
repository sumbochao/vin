<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title>Vinxu - Cổng game dân gian cho người Việt tại Đài Loan</title>

  <!--http://www.html5rocks.com/en/mobile/mobifying/-->
  <meta name="viewport"
        content="width=device-width,user-scalable=no,initial-scale=1, minimum-scale=1,maximum-scale=1"/>

  <!--https://developer.apple.com/library/safari/documentation/AppleApplications/Reference/SafariHTMLRef/Articles/MetaTags.html-->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="format-detection" content="telephone=no">

  <!-- force webkit on 360 -->
  <meta name="renderer" content="webkit"/>
  <meta name="force-rendering" content="webkit"/>
  <!-- force edge on IE -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta name="msapplication-tap-highlight" content="no">

  <!-- force full screen on some browser -->
  <meta name="full-screen" content="yes"/>
  <meta name="x5-fullscreen" content="true"/>
  <meta name="360-fullscreen" content="true"/>
  
  <!-- force screen orientation on some browser -->
  <meta name="screen-orientation" content=""/>
  <meta name="x5-orientation" content="">

  <!--fix fireball/issues/3568 -->
  <!--<meta name="browsermode" content="application">-->
  <meta name="x5-page-mode" content="app">

  <!--<link rel="apple-touch-icon" href=".png" />-->
  <!--<link rel="apple-touch-icon-precomposed" href=".png" />-->

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/xin500k/vin@master/xuvin/web-mobile/v001/style-mobile.6a3e4.css"/>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/xin500k/vin@master/xuvin/web-mobile/v001/style-mobile.6a3e4.css" />
  <meta property="fb:app_id" content="269983337196671"> 
  <meta name="Keywords" content="vinxu, vin xu, game vinxu, game dai loan, doithevinxu, doi the internet, game cua nguoi viet, giftcode vinxu, giao dich vinxu, mua bán vinxu" />
  <meta name="Description" content="Vinxu cổng game dân gian đa dạng, gắn kết cộng đồng người Việt. Nhận thẻ internet 4G tự động 430, 499, 599 Khoai với giá ưu đãi không tưởng" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://xu.vin" />
  <meta property="og:site_name" content="http://xu.vin" />
  <meta property="og:image" content="http://xu.vin/images/thumb.jpg" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="200" />
  <meta property="og:image:height" content="200" />
  <meta property="og:title" content="Vinxu cổng game dân gian đa dạng, gắn kết cộng đồng người Việt. Nhận thẻ internet 4G tự động 430, 499, 599 Khoai với giá ưu đãi không tưởng" />

  <script>
  if (location.protocol != 'https:') {
    location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
  }
  </script>

</head>
<body>
  <canvas id="GameCanvas" oncontextmenu="event.preventDefault()" tabindex="0"></canvas>
  <div id="splash">
    <div class="progress-bar stripes">
      <span style="width: 0%"></span>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/gh/xin500k/vin@master/xuvin/web-mobile/v001/src/settings.ba98f.js" charset="utf-8"></script>

<script src="https://cdn.jsdelivr.net/gh/xin500k/vin@master/xuvin/web-mobile/v001/main.6ca8d.js" charset="utf-8"></script>

<script type="text/javascript">
(function () {
    // open web debugger console
    if (typeof VConsole !== 'undefined') {
        window.vConsole = new VConsole();
    }

    var splash = document.getElementById('splash');
    splash.style.display = 'block';

    var cocos2d = document.createElement('script');
    cocos2d.async = true;
    cocos2d.src = window._CCSettings.debug ? 'https://cdn.jsdelivr.net/gh/xin500k/vin@master/xuvin/web-mobile/v001/cocos2d-js.js' : 'https://cdn.jsdelivr.net/gh/xin500k/vin@master/xuvin/web-mobile/v001/cocos2d-js-min.c2b34.js';

    var engineLoaded = function () {
        document.body.removeChild(cocos2d);
        cocos2d.removeEventListener('load', engineLoaded, false);
        window.boot();
    };
    cocos2d.addEventListener('load', engineLoaded, false);
    document.body.appendChild(cocos2d);
})();
</script>
</body>
</html>
