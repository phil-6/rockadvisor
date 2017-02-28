<!-- app/views/blog-static.php -->
<!--
 * Created by PhpStorm.
 * User: philr
 * Date: 28/02/2017
 * Time: 15:31
 -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rock Advisor</title>

    <!-- Bootstrap Core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,600,700,900|Roboto:300,400,500,700,900"
          rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="../css/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/blog.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-92612290-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>

<body id="page-top">

<!--
    ==========
    Navigation
    ==========
                -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="../#page-top">Rock Advisor</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="../#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="../#contact">Contribute</a>
                </li>
                <li>
                    <a class="page-scroll" href="/map">Crag Map</a>
                </li>
                <li>
                    <a class="page-scroll" href="/crags">Crag Index</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!--
    ==========
      Header
    ==========
              -->

<header class="intro-header">
    <div class="header-content">
        <div class="header-content-inner">

            <div class="siteHeading">
                <h1>Development Blog</h1>
                <hr>
                <h4>Rambings that help keep the Rock Advisor team <i>slightly</i> sane.</h4>
            </div><!-- "siteHeading" -->
            <div class="about-buttons">
                <a href="#about" class="page-scroll btn btn-default btn-xl sr-button">About Us</a>
                <a href="#background" class="page-scroll btn btn-default btn-xl sr-button">First Post!</a>
                <a href="#blog" class="page-scroll btn btn-default btn-xl sr-button">Newest Blog</a>
            </div>
        </div><!-- "header-content-inner" -->
    </div><!-- "header-content" -->
</header>

<!--
    ==========
     About Us
    ==========
              -->
<section class="bg-primary text-center" id="about">
    <div class="container">
        <div class="row col-lg-12 col-md-12 col-sm-12">
            <h2 class="section-heading">About Us</h2>
            <hr class="light">
            <p class="text-faded col-lg-8 col-lg-offset-2">
                Two final year computer science students form Swansea Univeristy with a shared passion for climbing,
                and, some other things I guess. We're not the best with words and this is supposed to be fun. So,
                Naturally, we wrote each others bio's... and chose each others pictures.
            </p>
            <!-- Calum Bio -->
            <div class="col-lg-6 col-md-6 col-sm-10 ">
                <div class="service-box">
                    <img src="../resources/images/calum.png" height="60%" width="60%">
                    <h3 id="Calum">Calum</h3>
                    <p class="text-muted">Calum is a climber. You know this straight away as he lives in a
                        Rab down jacket, as almost all climbers do. Honestly Calum is one of those really
                        annoying types who’s tall to start off with, but somehow has a reach that is a solid
                        4 inches bigger than it should be (reach, not the other thing!) Having tendons that
                        have been slowly solidifying over the last decade or so of climbing definitely helps. When Calum
                        isn’t climbing he can usually be found lurking in the dark corners of
                        reddit, being alarming good at video games (signs of a misspent youth?) or
                        attempting to apply some level of organisation to the university mountaineering club
                        that weirdly (IMHO) decided to elect him president for this year.
                        In the Rock Advisor project, Calum’s primary focus is on the mobile app development
                        side of things.</p>
                </div>
            </div> <!-- End Calum -->

            <!-- Phil Bio -->
            <div class="col-lg-56 col-md-6 col-sm-10 text-center">
                <div class="service-box">
                    <img src="../resources/images/phil.png" height="60%" width="60%">
                    <h3 id="Phil">Phil</h3>
                    <p class="text-muted">Phil is an outdoorsperson through and through. Here outdoorsperson
                        is a word that means an outdoorsman who has not yet reached mental maturity. Which,
                        despite many years the senior of his fellow university students, is still very much
                        the case. Upon picking up climbing after a lifetime of cycling and a good bit of
                        kayaking, Phil quickly realised big back muscles isn’t enough to climb all that
                        brilliantly. With nearly a year (just over?) of experience Phil’s finger pulleys and
                        tendons are slowly transitioning to stone while his back continues forward into a
                        knotted mess. Despite trying exceptionally hard to look like a hobo at all times
                        Phil packs a lot of sensible items such as first aid, head torches and pistachios.
                        Outside of climbing, kayaking, cycling, running, walking dogs, playing Borderlands,
                        concerts and driving a van Phil also enjoys sleeping, sometimes.
                        Phil's main focus in the Rock Advisor project is on the web and database portion.
                    </p>
                </div>
            </div><!-- End Phil -->
        </div><!-- "row" -->
    </div><!-- "container" -->
</section>


<!--
    ==========
    Blog Posts
    ==========
              -->

<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <h2 class="section-heading  text-center">
                    Blog
                </h2>
                <hr>
                <div class="post">
                    <h3 class="postTitle">
                        Calum's Content
                    </h3>
                    <p class="post-meta">Posted by <a href="#Calum">Calum</a> Sometime</p>
                    <div class="postContent">
                        <p>Coming soon...</p>
                    </div><!-- End Content -->


                </div> <!-- End Post -->
                <hr>
                <div class="post">

                    <h3 class="postTitle">
                        Front End
                    </h3>
                    <p class="post-meta">Posted by <a href="#Phil">Phil</a> 28/02/2017</p>
                    <div class="postContent">
                        <p>
                            So over this last weekend I built a front end. Took about 36 hours of the available 48 but
                            it
                            was worth it. The site has an attractive front page - heavily reliant on bootstrap but with
                            a
                            lot of my own tweaks and changes. The map lots its ugly old side bar for controls and the
                            filter
                            buttons are now controlled, positioned and styled by the google maps API.
                        </p>
                        <p>
                            RockAdvisor.uk and RockAdvisor.co.uk now belong to me and both have simple redirects set up
                            that
                            point the URLs to where the site is actually hosted at csRockAdvisor.swansea.ac.uk. The only
                            thing that wasn’t completed over the weekend was the “contact us” form for anyone who wants
                            to
                            help out by becoming a contributor in the early stages. Building a modal form was quite easy
                            but
                            I got stuck on how to get email to send in the laravel php back end. 30 minutes with the
                            ever
                            helpful Liam O’Reilly got the back end sorted. It took another 3 hours to hunt down all the
                            bugs
                            and then 4 hours after that to remove the quick patches and build the system properly using
                            AngularJS instead of jQuery (Deployed at 0230). There’s still a few improvements to make but
                            it’s at the point where it has been deployed and unless you knew it was supposed to act
                            differently you wouldn’t know.
                        </p>
                        <p>
                            Next step is to take the data from our api and build a page that displays crags nicely.
                            Maybe
                            get some more sleep too!

                        </p>

                    </div><!-- End Content -->


                </div> <!-- End Post -->
            </div><!-- Bootstrap -->
        </div><!-- Row -->
    </div><!-- Container -->
</section><!-- #blog -->


<section class="bg-dark" id="background">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post">


                    <h2 class="postTitle section-heading text-center" >
                        Background
                    </h2>
                    <hr>
                    <p class="post-meta">Posted by <a href="#Phil">Phil</a> at the beginning</p>
                    <div class="postContent">
                        <p>
                            Welcome to the Development blog for Rock Advisor. If you’ve made it this far you’ve
                            obviously
                            shown
                            an interested in what’s going on behind the scenes as we build this new style of guidebook.
                            Thanks!
                            I hope you didn’t come here because something is broken… if it is or if you have any helpful
                            suggestions please drop us an email!
                        </p>
                        <hr>
                        <p>
                            So a bit about the project. Rock Advisor is a final year dissertation project for Calum
                            McClune
                            and Phil Reynolds. We’re both heading towards a BSc in Computer Science but took on a very
                            Software Engineering project because of our particular interest in climbing. The project has
                            changed a lot since we first took it on. The initial brief was as follows: PROJECT BRIEF
                        </p>
                        <p>
                            The project title is still accurate but pretty much everything else has changed. While SWMC
                            do
                            host a fantastically detailed set of Wiki pages covering all of South Wales, getting the
                            data
                            they have out of their wiki is entirely non trivial. To solve this problem the decision was
                            made
                            to start from the ground up. Build a database to hold all the information we want, then
                            build a
                            front end to let people view that data and other CRUD functions. Then using the handy API
                            we’re
                            going to build we allow people to view all the information in a mobile app!
                        </p>
                        <p>
                            That takes us to about the end of January, where we had scoped out the project again and
                            worked
                            out WHAT we needed to do, we just then needed to work out HOW to do it. After those pesky
                            final
                            year exams there and a project supervisor change there was a bit of a delay. But thanks in
                            no
                            small part to a LOT of help from Liam O’Reilly by mid February we had the database designed
                            and
                            had begun building using the Laravel PHP framework. Over the last fortnight Calum has been
                            making headway on the app and things were starting to go live in the real world.
                        </p>
                        <hr>
                        <p>
                            Right then, after all that waffle that brings us to now, the end of February. The
                            dissertation
                            progress reports are done with so that leaves us with a bit of a gap. Instead of progress
                            log I
                            thought it would be a nice idea to have some occasional ramblings from Calum and myself
                            about
                            how we’re getting on with the Development of Rock Advisor. And so this development blog was
                            born.
                        </p>
                        <p>
                            I’m going to be very clear from the start: This is not written in an academic style. This is
                            written however we damn well please and will probably include expletives and spelling erros
                            and
                            probably won’t make a lot of sense, most of the time!
                        </p>
                        <p>
                            I hope you enjoy this journey, if you don’t, well, don’t read it! I ain’t your mother!
                        </p>
                    </div><!-- End Content -->


                </div><!-- End Post -->

            </div><!-- Bootstrap -->
        </div><!-- Row -->
    </div><!-- Container -->
</section><!-- #background -->




<!--
    ==========
      Footer
    ==========
              --> <!-- as if that wasn't obvious!-->
<hr>
<footer>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p class="copyright text-muted">Copyright &copy; Rock Advisor 2017</p>
            </div>
        </div>
    </div>
</footer>

<!--
    ==========
      Scripts
    ==========
              -->

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="../js/scrollreveal/scrollreveal.min.js"></script>
<script src="../js/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="../js/formValidation.js"></script>

<!-- Theme JavaScript -->
<script src="../js/creative-theme/creative.min.js"></script>

</body>
</html>