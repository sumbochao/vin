<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title>Sun.Vin</title>

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
  <link rel="icon" href="https://cdn.jsdelivr.net/gh/xin500k/vin@master/sunvin/web-mobile/v001/res/favicon.png">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/xin500k/vin@master/sunvin/web-mobile/v001/style-mobile.427c2.css"/>

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
<script src="https://cdn.jsdelivr.net/gh/xin500k/vin@master/sunvin/web-mobile/v001/src/settings.37f16.js" charset="utf-8"></script>

<script src="https://cdn.jsdelivr.net/gh/xin500k/vin@master/sunvin/web-mobile/v001/main.31277.js" charset="utf-8"></script>

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
    cocos2d.src = window._CCSettings.debug ? 'https://cdn.jsdelivr.net/gh/xin500k/vin@master/sunvin/web-mobile/v001/cocos2d-js.js' : 'https://cdn.jsdelivr.net/gh/xin500k/vin@master/sunvin/web-mobile/v001/cocos2d-js-min.c2b34.js';

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
