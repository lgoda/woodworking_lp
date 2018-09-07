<!DOCTYPE html>
<html>
<?php
  $key = null;
  $fullPhrase = array();
  $fullPhrase['1'] = 'Woodworking Plans';
  $fullPhrase['2'] = 'Woodworking Projects';

  $singleWordSingular = array();
  $singleWordSingular['1'] = 'Plan';
  $singleWordSingular['2'] = 'Project';

  $singleWordPlural = array();
  $singleWordPlural['1'] = 'Plans';
  $singleWordPlural['2'] = 'Projects';

  $fullPhraseString = null;
  if ((isset($_REQUEST['key'])) && (!empty($_REQUEST['key']))) {
    $key= $_REQUEST['key'];
  }
  if ($key != null && array_key_exists($key, $fullPhrase)) {
    $fullPhraseString = $fullPhrase[$key];
    $singleWordSingular = $singleWordSingular[$key];
    $singleWordPlural = $singleWordPlural[$key];
  } else {
    $fullPhraseString = "Woodworking Plans";
    $singleWordSingular = "Plan";
    $singleWordPlural = "Plans";
  }

 ?>
<head>
  <title>Teds Woodworking 16,000 <?php echo $fullPhraseString ?>Review</title>
  <meta name="description" content="If you’re looking for <?php echo $fullPhraseString ?> that come with step by step instructions, Teds Woodworking Package is the answer. Ted has got plans that will help you build bed frames, cabinets, desks, bookcases and more.
For the woodworker looking to update an outdoor area, they can find a wide selection of plans and kits. Read our Full Review for more information on the content of Teds woodworking Package"/>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <link href="/css/style.css" rel="stylesheet" >
    <link href="/css/template.css" rel="stylesheet" >

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" href="/images/icon.ico" />

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124838129-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-124838129-1');
  </script>
</head>

<body>
  <div class="container white" id="container-review">
    <!--header class="white ">
        <div class="row addHeight valign-wrapper ">
            <div class="col s12">
              <a href="/" class="left black-text" id="logo"><img src="images/logo2.png" alt="TedsWoodworking"/> </a>
              <div id="pippo" class="right">
                  <a>
                      <img src="http://www.tedswoodworking.com/images/banners/banner468x60b.jpg" alt="TedsWoodworking Plans and Projects" />
                  </a>
              </div>
            </div>
        </nav>
    </header-->
    <nav class="white">
       <div class="nav-wrapper">
         <a href="/tedswoodworking" class="brand-logo" id="logo" title="Logo"><img src="/images/logo2.png" alt="TedsWoodworking"/> </a>
         <ul id="nav-mobile" class="right hide-on-med-and-down">
           <li><a href="/" title="Download 50 Free Woodworking Plans">50 FREE WoodWorking Plans</a></li>
           <li><a href="mailto:admin@woodtask.com" title="Contact Us">Contact Us</a></li>
           <li><a href="#">About Us</a></li-->
           <!--li class="item-banner show-on-large"><img src="http://www.tedswoodworking.com/images/banners/banner468x60b.jpg" alt="TedsWoodworking Plans and Projects" class="responsive-img" /></li -->
         </ul>
       </div>
    </nav>
    <?php
      $key="";
      if(isset($_GET["key"])) {
        $key=$_GET["key"];
      }
      ?>
    <section id="content">
      <div class="row">
        <div class="col s12">
          <?php if ($key==='success') { ?>
          <div class="card-panel green lighten-4 green-text text-darken-4"><b>Thank You!</b> We will reply as soon as possible.</div>
        <?php } ?>
          <div class="card-panel">
            <h4>Contact Us</h4>
             <form action="/send.php" method="post">
                <div class="input-field">
                  <input type="text" id="name" placeholder="Name">
                  <label for="name" class="active">Name</label>
                </div>
                <div class="input-field">
                  <input type="email" id="email" placeholder="Email">
                  <label for="email" class="active">Email</label>
                </div>
                <div class="input-field">
                  <textarea class="materialize-textarea" id="message" placeholder="Message"></textarea>
                  <label for="message" class="active">Message</label>
                </div>
                <input type="submit" value="Submit" class="btn blue-grey">
              </form>
          </div>
        </div>
    </div>
    </section>
    <footer id="footer" class="white">
        <p class="center">
          Copyright 2018 woodtask.com - All Rights Reserved
        </p>
        <p class="center">
            <span> <a href="/terms-of-service.html">Terms of Service</a></span> | <span><a href="/privacy-policy.html">Privacy Policy</a></span>
        </p>
    </footer>
  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <!--JavaScript at end of body for optimized loading-->
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

  <script>
    (function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"26017377"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");
  </script>
</body>

</html>
