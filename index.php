<?php include "header.php";?>
    <div id="topbar">
        <!-- Coming soon! Link to Netflixwithme -->
    </div>
    <div id="container">
      <header>
        <h1><span class="hulu">hulu</span>withme<span class="beta">currently in <strong>beta</strong></span></h1>
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
          <p>On every Hulu video, there will be a button to <i><strong>hulu</strong>withme</i>. It will give you a link to send out. Don’t worry, we’ll help them get <strong>hulu</strong>withme installed!</p>
        </li>
        <li>
          <img src="img/step3.png">
          <h3 class="meta">3. Watch <span>the</span> Show!</h3>
          <p>Watch together! When you pause, it'll pause for him. When she plays, it plays for you. You can also chat while you watch the show.</p>
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

    <div id="installed_modal">
        <a href="#" class="close">x</a>
        <div class="im_top">
            <h3><span class="hulu">hulu</span>withme is installed!</h3>
            <p>Head over to Hulu and hit the <span class="hwm-button"><strong>hulu</strong>withme</span> button under any video.</p>
        </div>
        <div class="im_bottom">
            <p>Here are a few videos to get you started:</p>
            <div id="im_examples">
                <span>Loading...</span>
            </div>
        </div>
    </div>

<?php include "footer.php";?>
