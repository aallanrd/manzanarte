<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a modern responsive CSS framework based on Material Design by Google. ">
    <title>ManzaTEC</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="css/prism.css" rel="stylesheet">
    <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
      window.liveSettings = {
        api_key: "a0b49b34b93844c38eaee15690d86413",
        picker: "bottom-right",
        detectlang: true,
        dynamic: true,
        autocollect: true
      };
    </script>
    <script src="//cdn.transifex.com/live.js"></script>
  </head>
  <body class="parallax-demo"><header>
      <nav>
          <div class="nav-wrapper">
              <a href="index.html" class="brand-logo" style="margin-left: 150px">   Manzanarte </a>
              <ul class="right hide-on-med-and-down">
                  <li><a href="sass.html"><i class="material-icons left"></i>Buscas algo mas?</a></li>
                  <li><a href="badges.html"><i class="material-icons right">view_module</i>Mira todas nuestras opciones</a></li>
              </ul>
          </div>
      </nav>
</header>

<main>
<!--  Parallax Section  -->
  <div class="parallax-container">
    <div class="parallax"><img src="images/apples.jpg"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="header">ManzanArte</h2>
      <p class="grey-text text-darken-3 lighten-3"> La idea de este negocio es solo para probar algunos forms de materialize By. ALlan RD</p>
    </div>
    <div class="row container">
      <h4 class="light">Rellena este formulario para obtener tus manzanas . Animate!</h4>



            <?php include 'db.php'; ?>


        <!--   Materialize Forms       -->
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="images/apple2.jpg"></div>
  </div>    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l4 s12">
            <h5 class="white-text">Ayudame a controlar mas esto </h5>
            <p class="grey-text text-lighten-4">Aqui probando Materialize , me encanta</p>
            <form id="paypal-donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<button class="btn waves-effect waves-light red lighten-3" type="submit" name="action" alt="Go ahead">Be free
</button>
</form>

          </div>
          <div class="col l4 s12">
            <h5 class="white-text">ALlan Rojas D</h5>
            <p class="grey-text text-lighten-4">Puedes encontrarme en cualquiera de estos sitios, conoceme mas </p>
            <a class="btn waves-effect waves-light red lighten-3" target="_blank" href="https://gitter.im/Dogfalo/materialize">Chat</a>
          </div>
          <div class="col l4 s12" style="overflow: hidden;">
            <h5 class="white-text">Connectar</h5>
              <!-- Place this tag where you want the button to render. -->
              <a class="github-button" href="https://github.com/aallanrd" data-style="mega" data-count-href="/aallanrd/followers" data-count-api="/users/aallanrd#followers" data-count-aria-label="# followers on GitHub" aria-label="Follow @aallanrd on GitHub">Follow @aallanrd</a>

              <br>
              <a href="https://twitter.com/aallanrd" class="twitter-follow-button" data-show-count="false">Follow @aallanrd</a>
              <!-- Place this tag right after the last button or just before your close body tag. -->
              <script async defer id="github-bjs" src="https://buttons.github.io/buttons.js"></script>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            <br>
              <script src="https://apis.google.com/js/platform.js" async defer></script>


              <div class="g-follow" data-href="https://plus.google.com/+AllanRD/posts" data-rel="{relationshipType}"></div></div>
            <script >
                window.___gcfg = {
                    lang: 'en-US',
                    parsetags: 'onload'
                };
            </script>
            <script src="https://apis.google.com/js/platform.js" async defer></script>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2014-2015 Allan Rojas D., All rights reserved.
        <a class="grey-text text-lighten-4 right" href="https://https://github.com/aallanrd">Cartago, CR</a>
        </div>
      </div>
    </footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>
    <script src="js/jquery.timeago.min.js"></script>  
    <script src="js/prism.js"></script>
    <script src="bin/materialize.js"></script>
    <script src="js/init.js"></script>
    <!-- Twitter Button -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByT   agName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <!-- Google Plus Button-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!--  Google Analytics  -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56218128-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
    </script>
  </body>
</html>