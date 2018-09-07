<!DOCTYPE html>
<html>
<?php
  $key = null;
  $fullPhrase = array();
  $fullPhrase['1'] = 'Woodworking Plans';
  $fullPhrase['2'] = 'Woodworking Projects';
  $fullPhrase['3'] = 'Teds Woodworking';

  $singleWordSingular = array();
  $singleWordSingular['1'] = 'Plan';
  $singleWordSingular['2'] = 'Project';
  $singleWordSingular['3'] = 'Plan';

  $singleWordPlural = array();
  $singleWordPlural['1'] = 'Plans';
  $singleWordPlural['2'] = 'Projects';
  $singleWordPlural['3'] = 'Plans';

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
           <li><a href="/contact.php" title="Contact Us">Contact Us</a></li>
           <li><a href="#">About Us</a></li-->
           <!--li class="item-banner show-on-large"><img src="http://www.tedswoodworking.com/images/banners/banner468x60b.jpg" alt="TedsWoodworking Plans and Projects" class="responsive-img" /></li -->
         </ul>
       </div>
    </nav>
    <section id="content">
        <blockquote>
          <h1 style="line-height: 1.2em">
            <span><span class="text-red"><?php echo $fullPhraseString ?></span>: Review of The #1 Woodworking Online Resource </span>
          </h1>
        </blockquote>

        <div class="row flex">
          <div class="col s12 hide-on-med-only l4 full-height valign-wrapper" id="banner-left">
            <div class="card">
              <div class="card-image">
                <a title="Visit Official Website" href="http://track.woodtask.com/tedswoodworking1"><img src="/images/bannerbox2.jpg" alt="TedsWoodworking Plans and Projects" class="responsive-img"/></a>
              </div>
              <div class="card-action center">
                <a title="Visit Official Website" href="http://track.woodtask.com/tedswoodworking1">VISIT OFFICIAL WEBSITE</a>
              </div>
            </div>
          </div>
          <div class="col s12 l8">
            <p>
              Teds Woodworking was elaborated by Ted McGrath, a highly revered figure of
              Woodworking sector. The plan was as a result of his years of experience in Woodwork.
              He is a master of woodworking techniques, and this has made him a great woodworker
              who provides quality woodwork service. As a consequence, with a view to assisting
              others, he devised the Teds Woodworking Plan deriving from his woodworking
              experience which can be effectively used even by a laymen.
            </p>
            <p>
              Official Site: <a title="Official Website" href="http://track.woodtask.com/tedswoodworking1">http://www.tedswoodworking.com</a>
            </p>
            <h2>
              What Teds Woodworking is about
            </h2>
            <p class="no-space">
                <div class="right">
                  <img src="/images/ted2img2.jpg" width="150" height="150" class="responsive-img" alt="" />
                  <!--img src="http://woodtask.com/images/bookshelf.jpg" alt=""-->
                </div>
                The main goal of Teds Woodworking is to provide a platform for young woodworkers
                who wish to become professionals and for the professionals who would like to improve
                on their efficiency and creativity. It is aim is also to eliminate all faults and irregularities
                that may arise during woodworking.
                Teds plan is marked by simplicity which means that even an amateur woodworker can
                understand and use it effectively.
                This is due to the fact that Ted was a member of the
                Architectural Woodwork Institute and a trainer.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <p class="no-space">
              Thus no one had better expertise to
              create such a masterplan.
              The plan was an outcome of his commitment to making sure
              that every woodworker has a plan to work skillfully.
              The plan was inspired from the various types of furniture works which Ted created in the
              past. That is why, he believes other woodworkers can creatively use his plan to produce
              even more fascinating woodwork. Due to Ted’s vast knowledge of Woodwork, he
              decided to make it available to whoever wishes to benefit from it by providing the Teds
              Woodworking Plan.
            </p>
            <h2>
              The Comprehensive Teds Woodworking Plan
            </h2>
            <p>
              The Teds Woodworking Plan is undoubtedly a masterplan, due to a creative approach
              and techniques it describes. The plan presents all the indispensable techniques of a
              successful woodworker. It will come handy, if you wish to create an outstanding
              woodwork. And all of this thanks to a user-friendly structure of the plan that allows for a
              convenient selection of an archetype and a topnotch design which will give your work
              amazing design in a highly competitive market. Additionally, the plan aims to minimize
              your expenses and raise your creativity level, at the same time. A well-detailed diagram
              which is part of the plan, helps you ensure that you do not make any mistake at work.
            </p>
            <h2>
              Teds Woodworking contains every kits and project you need
            </h2>
            <p>
              The Teds Woodworking Plan entails a detailed information about different projects and
              kits necessary to become a successful woodworker. They also serve to create a master
              woodwork design in a short period of time. Moreover, it encompasses every item of
              information to carry out a new project excellently. Such information refers to 16.000
              detailed plans of common and rare woodworking projects. The designs are well-
              explained so that you could easily and rapidly execute them. It is because Teds
              Woodworking comes with several tips and methods of how to render the projects even
              more beautiful. They will become your daily skillset, if you familiarize yourself with the
              plan as best as possible.
            </p>
            <p>
              New Woodwork entrepreneurs can also benefit from the plan as it comes with a chapter
              on how to successfully manage, build and run a woodwork business. It describes how to
              obtain woodwork business licenses and market your products.
            </p>
            <h2>How to use the Teds Woodworking Plan?</h2>
            <p>
              The Teds Woodworking Plan is a highly detailed, although simple to use, book. It is
              aimed at all kinds of users, regardless of their level of experience. It is because it
              encompasses a wide range of designs even for a one-day-old experienced woodworker.
              That is why with the plan every user is bound to become a great woodworker. It is
              helpful for business development and as a guideline in creating great woodwork for your
              family as a hobby at home.
            </p>
            <p>
              For more simplicity, the plan includes a video lesson on how to create quality forms of
              woodwork such as pieces of furniture and many more. You just need to look through the
              various projects and select a design that fits your needs. It is not necessary to master all
              details, but to get familiar with all those you believe will be useful for your plan. The Teds
              Woodworking Plan should serve as a right-hand man to every user. Moreover, it is as
              easy to get as its simplicity, subscribe online and download. Then, get ready to see the
              best version of yourself as a Woodworker.
            </p>
            <h2>To sum it up: the Pros and Cons of the Teds Woodworking Plan</h2>
            <h2>
              The Pros And Cons
            </h2>
            <h2 class="teal-text">
              The pros
            </h2>
            <p>
              <ul class="collection no-border" id="points">
                  <li class="collection-item">
                    <i class="material-icons left green-text text-accent-3">check_box</i>
                    <u>Suitable For Different Levels</u>: clear and concise for beginners, huge variety of
                    projects for advanced and professional woodworkers.
                  </li>
                  <li class="collection-item">
                    <i class="material-icons left green-text text-accent-3">check_box</i>
                    Very Useful Bonuses: When you order Teds woodworking package you will also
                    receive these 3 bonuses:
                    <ol class="browser-default">
                      <li>
                        Free drawing and CAD plan viewer
                      </li>
                      <li>
                        150 premium woodworking videos
                      </li>
                      <li>
                        The Complete Woodworking Carpentry Guide: the complete woodworking
                        carpentry guide (a 200 pages guide with carpentry tips and tricks) is very useful
                        for beginners and the premium videos can help any woodworker to hone his
                        carpentry skills.
                      </li>
                    </ol>
                  </li>
                  <li class="collection-item">
                    <i class="material-icons left green-text text-accent-3">check_box</i>
                    <u>Surprisingly Organized</u>: with 16,000 plans, you would expect Teds Woodworking
                    to be pretty disorganized. However, it is pretty easy to find the exact project you
                    want.
                  </li>
                  <li class="collection-item">
                    <i class="material-icons left green-text text-accent-3">check_box</i>
                    <u>Money Back Guarantee</u>: the product comes with 60 days money back guarantee
                    and if you are not completely satisfied with what you get, you will receive your
                    money back.
                  </li>
                  <li class="collection-item"><div></div></li>
                </ul>
            </p>
            <h2 class="red-text red-darken-4">
              The cons
            </h2>
            <p>
              <ul class="collection no-border" id="points">
                  <li class="collection-item">
                    <i class="material-icons left red-text red-darken-4">indeterminate_check_box</i>
                    <u>It May Take Time to Download the Package</u>: the size of this download package is not small and if you have slow internet connection it may take you a couple of hours to download all the blueprints. In this case it may be a good idea to upgrade to the DVD edition (you can do it at the members' area).
                  </li>
                  <li class="collection-item">
                    <i class="material-icons left red-text red-darken-4">indeterminate_check_box</i>
                    <u>May Be a Little Overwhelming at First</u>: Just because there are so many different woodworking projects and plans, the members' area can be a little overwhelming at first. However the plans are organized by category and once you get started, you will find it is not difficult to find what you are looking for.
                  </li>
                </ul>
            </p>
            <h2>
              Teds Woodworking: The Bottom Line
            </h2>
            <p>
              Overall, there is no doubt that Teds Woodworking is a very comprehensive and detailed
              woodworking package that comes with a great amount of solutions for any kind of
              woodworking project you might think of.
            </p>
            <p>
              There are other great woodworking packages online and some of them are cheaper than this one, but this one is the most comprehensive as it comes with thousands of detailed instructions for all kinds of projects, great bonuses and very good customer support.
            </p>
            <p>
              All the best!
            </p>
            <p>
              Official Site: <a href="http://track.woodtask.com/tedswoodworking2">http://www.tedswoodworking.com</a>
            </p>
          </div>
        </div>
        <div  id="free-plans-promotions">
          <div id="container-promotions">
            <div class="row">
              <div class="col s12 m12 l4 hide-on-med-and-down">
                <div id="img-container">
                    <div id="img-plans">
                      <img src="/images/butcher-block-plans.jpg" alt="" class="responsive-img" id="plan-image">
                      <span id="download-now"><i class="material-icons left blue-text text-accent-3">cloud_download</i>DOWNLOAD NOW</span>
                      <div id="arrow-download">
                        <img src="/images/arrow.png" class="responsive-img" alt="" id="arrow">
                      </div>
                    </div>
                </div>
              </div>
              <div class="col s12 m12 l8">

                <ul class="collection with-header z-depth-4 landing">
                  <li class="collection-header">
                    <h5 class="center">
                      Get 50 Woodworking Plans & a 440-Page Manual <br>TOTALLY FREE!
                    </h5>
                  </li>
                  <li class="collection-item"><i class="material-icons left green-text text-accent-3">check_circle</i> Get instant access to 50 step-by-step woodworking plans</li>
                  <li class="collection-item"><i class="material-icons left green-text text-accent-3">check_circle</i> Download "The Art of Woodworking" - A 440 page comprehensive manual</li>
                  <li class="collection-item"><i class="material-icons left green-text text-accent-3">check_circle</i> Including numerous techniques, tips, videos and guides for woodworkers</li>
                  <li class="collection-item"><i class="material-icons left green-text text-accent-3">check_circle</i> Completely FREE. Just enter your email below</li>
                  <li class="collection-item"><div></div></li>
                </ul>
                <a class="waves-effect waves-light btn btn-large modal-trigger" href="#signup-modal" id="button-free">Get Your FREE Plans Now</a>
              </div>
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
  <!-- Login Modal -->
 <div id="signup-modal" class="modal">
   <div class="modal-content">
    <div class="center">
       <img src="https://www.tedswoodworking.com/new/wp-content/uploads/2015/06/butcher-block-plans.jpg" alt="" class="responsive-img" id="plan-image">
    </div>
    <div class="center" id="text-divider">
      <p>Your 50 FREE woodworking plans will be sent to the email address you provide.</p>
    </div>
     <form action="/post.php" method="post">
       <div class="input-field">
         <input type="text" id="name" name="name">
         <label for="name">Name</label>
       </div>
       <div class="input-field">
         <input type="email" id="email" name="email" class="validate">
         <span class="helper-text" data-error="Email address invalid" data-success=""></span>
         <label for="email">Email</label>
       </div>
       <button  type="submit" class="waves-effect waves-light btn btn-large modal-trigger" id="button-submit">Send me My FREE Plans Now</button>
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
    /*$.get("/images/bookshelf.jpg", function(data, status){

   });*/
  </script>
  <script>
    (function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"26017377"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");
  </script>
</body>

</html>
