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
  <title>Get 50 Free <?php echo $fullPhraseString ?>  | WoodTask</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <link href="css/style.css" rel="stylesheet" >

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124838129-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-124838129-1');
  </script>
  <meta name="description" content="ATTENTION WOODWORKERS:
               DOWNLOAD 50 FREE <?php echo $fullPhraseString ?> FOR A VARIETY OF PROJECTS!Get 50 <?php echo $fullPhraseString ?> and a 440-Page Guide Book Absolutely FREE!Get access to 50 step-by-step <?php echo $fullPhraseString ?>
               DownloadThe Art of Woodworking - A mammoth 440 page guide
               Plus tons of tips"/>
</head>

<body>
  <section id="header" class="container">
      <div class="row">
        <div class="col s12 center"><h4>TO ALL WOODWORKERS:</h4></div>
      </div>
      <div class="row">
        <div class="cols12 center red-text text-darken-3">
            <h3 class="uppercase">DOWNLOAD 50 FREE <?php echo $fullPhraseString ?> FOR A GREAT DEAL OF PROJECTS!</h1>
        </div>
      </div>
  </section>

  <section id="fillup" class="grey lighten-3">
      <div class="container">
        <!--div class="row">
          <div class="col s12">
            <h4>
              Get 50 Woodworking Plans & a 440-Page Guide Book <br>Absolutely FREE!
            </h4>
          </div>
        </div -->
        <div class="row flex-wrap">
          <div class="col s12 m12 l4 hide-on-med-and-down flex-bottom">
            <div id="img-container">
                <div id="img-plans">
                  <img src="/images/butcher-block-plans.jpg" alt="" class="responsive-img" id="plan-image">
                  <span id="download-now"><i class="material-icons left blue-text text-accent-3">cloud_download</i>DOWNLOAD NOW</span>
                  <div id="arrow-download">
                    <img src="/images/arrow.png" class="responsive-img" alt="" id="arrow">
                    <img src="/images/bookshelf.jpg" alt="">
                  </div>
                </div>
            </div>
          </div>
          <div class="col s12 m12 l8">

            <ul class="collection with-header z-depth-4 landing">
              <li class="collection-header">
                <h5 class="center">
                  Get 50 <?php echo $fullPhraseString ?> & a 440-Page Manual <br>TOTALLY FREE!
                </h5>
              </li>
              <li class="collection-item"><i class="material-icons left green-text text-accent-3">check_circle</i> Get instant access to 50 step-by-step <span class="lowercase"><?php echo $fullPhraseString ?></span></li>
              <li class="collection-item"><i class="material-icons left green-text text-accent-3">check_circle</i> Download "The Art of Woodworking" - A 440 page comprehensive manual</li>
              <li class="collection-item"><i class="material-icons left green-text text-accent-3">check_circle</i> Including numerous techniques, tips, videos and guides for woodworkers</li>
              <li class="collection-item"><i class="material-icons left green-text text-accent-3">check_circle</i> Completely FREE. Just enter your email below</li>
              <li class="collection-item"><div></div></li>
            </ul>
            <a class="waves-effect waves-light btn btn-large modal-trigger" href="#signup-modal" id="button-free">Get Your FREE <span class="uppercase"><?php echo $singleWordPlural ?></span> Now</a>
          </div>
        </div>
      </div>
  </section>
  <footer id="footer">
      <p class="center">
        Copyright 2018 woodtask.com - All Rights Reserved
      </p>
      <p class="center">
          <span> <a href="/terms-of-service.html">Terms of Service</a></span> | <span><a href="/privacy-policy.html">Privacy Policy</a></span>
      </p>
  </footer>
  <!-- Login Modal -->
 <div id="signup-modal" class="modal">
   <div class="modal-content">
    <div class="center">
       <img src="/images/butcher-block-plans.jpg" alt="" class="responsive-img" id="plan-image">
    </div>
    <div class="center" id="text-divider">
      <p>Your 50 FREE <span class="lowercase"><?php $fullPhraseString ?></span> will be sent to the email address you provide.</p>
    </div>
     <form action="post.php" method="post">
       <div class="input-field">
         <input type="text" id="name" name="name">
         <label for="name">Name</label>
       </div>
       <div class="input-field">
         <input type="email" id="email" name="email" class="validate">
         <span class="helper-text" data-error="Email address invalid" data-success=""></span>
         <label for="email">Email</label>
       </div>
       <button  type="submit" class="waves-effect waves-light btn btn-large modal-trigger" id="button-submit">Send me My FREE <span class="uppercase"><?php echo $singleWordPlural ?></span> Now</button>
        <div class="center hide" id="preloader">
         <div class="preloader-wrapper small active">
           <div class="spinner-layer spinner-green-only">
               <div class="circle-clipper left">
                 <div class="circle"></div>
               </div><div class="gap-patch">
                 <div class="circle"></div>
               </div><div class="circle-clipper right">
                 <div class="circle"></div>
               </div>
           </div>
         </div>
       </div>
     </form>

     <div class="center">
       <p>100% secure and safe. We hate spam just as much as you do.</p>
     </div>
   </div>
 </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <!--JavaScript at end of body for optimized loading-->
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

  <script>
    $(document).ready(function () {
      $('.modal').modal({preventScrolling: true});
      $("#button-submit").removeClass("hide");
      $("#preloader").addClass("hide");
    });

    $('#button-submit').click( function() {
      $("#button-submit").addClass("hide");
      $("#preloader").removeClass("hide");
    } );

    $('#button-free').click( function() {
      $("#button-submit").removeClass("hide");
      $("#preloader").addClass("hide");
    });
  </script>
  
</body>

</html>
