<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/kadfigclkmmnpchmalpbcfbmpnmmmoag">

    <title>Detecting Huluwithme plugin...</title>
    <style>
      /* Duplicated */
      #unsupported {
        display: none;
        color: #FFFFFF;
        position: relative;
        text-align: center;
        z-index: 10001;
        margin-top: 1em;
      }
      #unsupported a:hover {
        opacity: 0.8;
      }
      #unsupported a img {
        margin-bottom: 3px;
      }
      #unsupported strong {
        position: relative;
        top: -12px;
        margin-left: 5px;
        font-weight: normal;
      }
       #install.disabled {
               background: #ccc !important;
}


      body {
        min-height: 300px;
        background-repeat: no-repeat;
        background-color: #2B2B2B;
        margin: 50px;
        text-size: 12px;
        font-family: verdana;
        background-image: -webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0.42, #2B2B2B),
        color-stop(0.71, #1C1C1C)
        );
        background-image: -moz-linear-gradient(
        center bottom,
        #2B2B2B 42%,
        #1C1C1C 71%
        );
      }

      .detecting {
        background-color: rgba(0, 0, 0, 0.7);
        border-radius: 10px 10px 10px 10px;
        color: #777777;
        margin: auto;
        padding: 10px;
        text-align: center;
        width: 300px;
        margin: auto;
      }

      .detecting strong{
        color: #fff;
      }

      .detecting strong span {
        color: #9DC83A;
      }

      .dots {
        padding-top: 10px;
      }

      .dots span {
        width: 10px;
        height: 10px;
        background-color: #666;
        border-radius: 10px;
        margin: 3px;
        display: inline-block;
      }

      .dots span.on {
        -moz-transition: background-color 0.3s linear;
        background-color: #CCC;
      }
      body {
        min-height: 300px;
        background-repeat: no-repeat;
        background-color: #2B2B2B;
        margin: 50px;
        text-size: 12px;
        font-family: verdana;
        background-image: -webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0.42, #2B2B2B),
        color-stop(0.71, #1C1C1C)
        );
        background-image: -moz-linear-gradient(
        center bottom,
        #2B2B2B 42%,
        #1C1C1C 71%
        );
      }

      h1 {
        color: #FFFFFF;
        font-size: 50px;
        text-align: center;
        text-shadow: 2px 2px 0 #000000, 0 0 10px #666666;
        font-weight: normal;
      }

      .hulu {
        color: #96C738;
        font-size: 47px;
      }

      p {
        color: #AAAAAA;
        font-size: 15px;
        margin: auto;
        text-align: center;
        width: 500px;
        text-shadow: 1px 1px 0 #000;
      }

      #install {
        -webkit-transition: box-shadow 0.2s ease-in-out 0s;
        -moz-transition: box-shadow 0.2s ease-in-out 0s;
        background: -webkit-linear-gradient(top , #84C63C 0%, #489615 100%) repeat scroll 0 0 transparent;
        background: -moz-linear-gradient(center top , #84C63C 0%, #489615 100%) repeat scroll 0 0 transparent;
        border-radius: 6px 6px 6px 6px;
        box-shadow: 0 3px rgba(0, 0, 0, 0.1), 0 -4px rgba(0, 0, 0, 0.1) inset;
        color: #FFFFFF;
        display: block;
        font-size: 26px;
        height: 46px;
        line-height: 44px;
        margin: auto;
        margin-top: 30px;
        overflow: visible;
        text-align: center;
        text-shadow: -1px -1px rgba(0, 0, 0, 0.2);
        width: 300px;
        border: 0;
        text-decoration: none;
      }

      #install:hover {
        -moz-transition: box-shadow 0.2s ease-in-out 0s;
        -webkit-transition: box-shadow 0.2s ease-in-out 0s;
        box-shadow: 0 3px rgba(0, 0, 0, 0.15), 0 -4px rgba(0, 0, 0, 0.15) inset, 0 0 80px rgba(0, 0, 0, 0.3) inset;
      }

      div.cap {
        color: #AAAAAA;
        display: block;
        font-size: 13px;
        padding-top: 5px;
        text-align: center;
      }

      em.beta {
        color: #D02020;
      }

      #install-page { display: none; }
    </style>
    <script type="text/javascript" src="http://use.typekit.com/man3jvj.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <script>
      window.onload = function(){
        var spans = document.getElementsByTagName('span');

        var i = 0;
        function lightUp() {
          if(i >= spans.length) {
            i = 0;
            for(var c = 0; c < spans.length; c++) {
              spans[c].className = "";
            }
          }
          spans[i].className = "on";
          i++;
        }

        setInterval(lightUp, 100);

        setTimeout(function() {
            document.getElementById('install-page').style.display = 'block';
            document.getElementById('detecting_hwm').style.display = 'none';
            document.getElementsByTagName('title')[0].text = 'Install Huluwithme!';
        }, 1000);
      };
    </script>
  </head>

  <body id="installing_hwm">
    <div id="install-page">
      <h1><strong class="hulu">hulu</strong>withme</h1>
      <p>Don't let distance keep you from watching your favorite shows with your favorite people. <strong>Huluwithme</strong> keeps your video in sync across
        multiple computers, so you can chat and watch together. It is currently in <em class="beta">beta</em>, so there may be bugs!</p>
    <? include "button.php"; ?>

    </div>
    <div id="detecting_hwm" class="detecting">
      Detecting the <strong><span>hulu</span> with me</strong> plugin&hellip;
      <div class="dots">
        <span></span><span></span><span></span><span></span><span></span>
      </div>
    </div>
    <script src="/js/lib/jquery.js"></script>
    <script src="/js/script.js"></script>

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