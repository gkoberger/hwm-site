<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Huluwithme :: Watch your favorite shows with your favorite people</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/style.less" />

    <link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/kadfigclkmmnpchmalpbcfbmpnmmmoag">

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script type="text/javascript" src="http://use.typekit.com/man3jvj.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  </head>

  <body id="home">

    <div id="topbar">
    </div>
    <div id="container">
      <header>
        <h1><span class="hulu">hulu</span>withme</h1>
        <div id="header-content">
          <p class="meta">Don't let distance keep you from watching your favorite shows with your favorite people.
            <strong>Hulu</strong>withme keeps your video in sync across multiple computers, so you can chat and watch together.</p>
            <? include "button.php"; ?>
        </div>
        <img src="img/kids.png" id="kids">
      </header>
    </div>

    <section id="how">
      <h2 class="meta">How Hulu With Me Works</h2>
      <h3 class="meta">You'll be up and running in seconds!</h3>
      <ul id="steps">
        <li>
          <img src="img/step1.png">
          <h3 class="meta">1. Install <span>the</span> Add-on</h3>
          <p>Install the add-on above. It's a restartless add-on that works with either Chrome and Firefox. Once installed, head to Hulu to start watching.</p>
        </li>
        <li>
          <img src="img/step2.png">
          <h3 class="meta">2. Share <span>the</span> Link</h3>
          <p>On every Hulu video, there will be a link to <i><strong>hulu</strong>withme</i>. It will give you a link to send out. Don’t worry, we’ll help them
            get <strong>hulu</strong>withme installed!</p>
        </li>
        <li>
          <img src="img/step3.png">
          <h3 class="meta">3. Watch <span>the</span> Show!</h3>
          <p>Watch together! When you pause, it'll pause for her. When he plays, it plays for you. You can also chat while you watch the show.</p>
        </li>
      </ul>
    </section>

    <footer>
      <div class="container">
        <strong>Created by <a href="http://gkoberger.net" target="_blank">Gregory Koberger</a></strong>
        &middot; Totally not affiliated with Hulu.
        &middot; Work at Hulu? <a href="mailto:gkoberger@gmail.com">Say hi!</a>
      </div>
    </footer>

    <script src="js/lib/jquery.js"></script>
    <script src="js/script.js"></script>

    <script src="js/lib/less_setup.js"></script>
    <script src="js/lib/less.js"></script>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-32621298-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

  </body>
</html>