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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"">
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
    <link href="../css/theme.css" rel="stylesheet">

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
            <button type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#rockAdvisorNavbar"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="../#page-top">Rock Advisor</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="rockAdvisorNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="/">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="/map">Crag Map</a>
                </li>
                <li>
                    <a class="page-scroll" href="/finder">Crag Finder</a>
                </li>
                <li>
                    <a class="page-scroll" href="#background">Background</a>
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
    <div class="blog-header-content">
        <div class="header-content-inner">

            <div class="siteHeading">
                <h1>Development Blog</h1>
                <hr>
                <h4>Rambings that help keep the Rock Advisor team <i>slightly</i> sane.</h4>
            </div><!-- "siteHeading" -->
            <div class="about-buttons">
                <a href="#about" class="page-scroll btn btn-default btn-xl sr-button">About Us</a>
                <a href="#background" class="page-scroll btn btn-default btn-xl sr-button">Background</a>
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
<section class="bg-primarygrad text-center blogbio" id="about">
    <div class="container">
        <div class="row">
            <h2 class="section-heading">About Us</h2>
            <hr class="light">
            <p class="text-faded col-lg-8 col-lg-offset-2">
                Two final year computer science students form Swansea Univeristy with a shared passion for climbing,
                and, some other things I guess. We're not the best with words and this is supposed to be fun. So,
                Naturally, we wrote each others bio's... and chose each others pictures.
            </p>
            <!-- Calum Bio -->
            <div class="col-lg-6 col-sm-12  col-xs-12">
                <div class="service-box" id="Calum">
                    <img src="../resources/images/calum.png" height="60%" width="60%">
                    <h3>Calum</h3>
                    <p class="text-muted">Calum is a climber. You know this straight away as he lives in a Rab down
                        jacket, as almost all climbers do. Honestly Calum is one of those really annoying types who’s
                        tall to start off with, but somehow has a reach that is a solid 4 inches bigger than it should
                        be (reach, not the other thing!) Having tendons that have been slowly solidifying over the last
                        decade or so of climbing definitely helps . When Calum isn’t climbing he can usually be found
                        lurking in the dark corners of reddit, being alarming good at video games (signs of a misspent
                        youth?) or attempting to apply some level of organisation to the university mountaineering club
                        that weirdly (IMHO) decided to elect him president for this year.
                        In the Rock Advisor project Calum’s primary focus is on the mobile app development side of
                        things.</p>
                </div>
            </div> <!-- End Calum -->

            <!-- Phil Bio -->
            <div class="col-lg-6 col-sm-12  col-xs-12 ">
                <div class="service-box" id="Phil">
                    <img src="../resources/images/phil.png" height="60%" width="60%">
                    <h3>Phil</h3>
                    <p class="text-muted">Phil is an outdoorsperson through and through. Here outdoorsperson is a word
                        that means an outdoorsman who has not yet reached mental maturity. Which, despite many years the
                        senior of his fellow university students, is still very much the case. Upon picking up climbing
                        after a lifetime of cycling and a good bit of kayaking, Phil quickly realised big back muscles
                        isn’t enough to climb all that brilliantly. With nearly a year (just over?) of experience Phil’s
                        finger pulleys and tendons are slowly transitioning to stone while his back continues forward
                        into a knotted mess. Despite trying exceptionally hard to look like a hobo at all times Phil
                        packs a lot of sensible items such as first aid, head torches and pistachios.Outside of
                        climbing, kayaking, cycling, running, walking dogs, playing Borderlands, concerts and driving a
                        van Phil also enjoys sleeping, sometimes. Phil's main focus in the Rock Advisor project is on
                        the web and database portion.
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
                    <p class="post-meta">Posted by <a href="#Calum">Calum</a> Sometime Soon</p>
                    <div class="postContent">
                        <p>Coming soon...</p>
                    </div><!-- End Content -->


                </div> <!-- End Post -->
                <hr>
                <div class="post">

                    <h3 class="postTitle">
                        AngularJS Breakthrough
                    </h3>
                    <p class="post-meta">Posted by <a href="#Phil">Phil</a> 05/03/2017</p>
                    <div class="postContent">
                        <p>
                            Yesterday I finally cracked routing with angularJS and we have a dynamic-loading set of pages that allows you to view areas, crags and climbs. It still needs a load more information on each of the pages and some significantly better styling but it works! This is the core functionality that will power Rock Advisor.
                        </p>
                        <p>
                            There’s going to be a load more features added to this soon, such as filtering and loads of other dynamic stuff but now the routing in angular is working, all that should be relatively simple. It’s not going to be, I know it’s not going to be, but I can hope.
                        </p>
                        <p>
                            Oh, and now the title on the mage has decided to move right, about 2/3rds of the way across the page. I haven’t changed anything, and it’s still the same on the blog page. The code is the same but in a different place. Only on the main page the auto margins want to have silly values - I can take them out but then it sits just off centre to the left!! *Sigh* Damn it to hell.
                        </p>
                        <p>
                            Maybe tomorrow it’ll work. Hopefully you won’t ever get to see it as it won’t get pushed live. Either way, angular is working, which is a massive hurdle and opens the door for the rest of the development. Exciting times!
                        </p>

                    </div><!-- End Content -->
                </div> <!-- End Post -->
                <hr>
                <div class="post">

                    <h3 class="postTitle">
                        Stepping forward slowly
                    </h3>
                    <p class="post-meta">Posted by <a href="#Phil">Phil</a> 03/03/2017</p>
                    <div class="postContent">
                        <p>
                            The aim of this week was to get things ready to allow you to browse through the crags that we have on our database and while a lot more code has been created so have a lot of problems.
                        </p>
                        <p>
                            The biggest of which was an attempted integration of Angular 2. For those who don’t know (I’m still pretty fuzzy) Angular is a javascript framework that allows web pages to do loads of flashy things, especially things like dynamic changes to the content without reloading the page. For example, while the contribute form on the main page is powered just by Bootstrap (a framework for styling pages) the changes after you click submit are all powered by AngularJS.  Angular 2 is the most recent version of AngularJS but it is not a upgrade, it is a complete re write. While I can see that it can be hugely powerful and make a lot of sense if you’re building a application from scratch, trying to upgrade to it is incredibly difficult. I committed a day to getting it working, and it doesn’t feel like I got anywhere close. The progress is still and it would be nice to go back to it at some point, maybe later with Rock Advisor, maybe with another project in the future.
                        </p>
                        <p>
                            There have been a few small updates to the map this week as well, markers now drop in instead of just appearing and marker clustering has been implemented… it doesn’t work, but the code is there. That’s something I’m going to come back to and fix later because it’s really baffling as to why its not working.
                        </p>
                        <p>
                            After I gave up with Angular 2 I decided to make sure we were using the most recent versions of AngularJS and Jquery which power elements that run on most of our pages. This, inevitably broke various bits and pieces, but everything appears to be back up and running now. *Touch Wood*
                        </p>
                        <p>
                            Hopefully at the end of this weekend everything will still look the same but they’ll be a lot more magic going on behind the scenes! Wish me luck!
                        </p>

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
                            it was worth it. The site has an attractive front page - heavily reliant on bootstrap but
                            with a lot of my own tweaks and changes. The map lots its ugly old side bar for controls and
                            the filter buttons are now controlled, positioned and styled by the google maps API.
                        </p>
                        <p>
                            RockAdvisor.uk and RockAdvisor.co.uk now belong to me and both have simple redirects set up
                            that point the URLs to where the site is actually hosted at csRockAdvisor.swansea.ac.uk. The
                            only thing that wasn’t completed over the weekend was the “contact us” form for anyone who
                            wants to help out by becoming a contributor in the early stages. Building a modal form was
                            quite easy but I got stuck on how to get email to send in the laravel php back end. 30
                            minutes with the ever helpful Liam O’Reilly got the back end sorted. It took another 3 hours
                            to hunt down all the bugs and then 4 hours after that to remove the quick patches and build
                            the system properly using AngularJS instead of jQuery (Deployed at 0230). There’s still a
                            few improvements to make but it’s at the point where it has been deployed and unless you
                            knew it was supposed to act differently you wouldn’t know.

                        </p>
                        <p>
                            Next step is to take the data from our api and build a page that displays crags nicely.
                            Maybe get some more sleep too!

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


                    <h2 class="postTitle section-heading text-center">
                        Background
                    </h2>
                    <hr>
                    <p class="post-meta">Posted by <a href="#Phil">Phil</a> at the <em>beginning</em></p>
                    <div class="postContent">
                        <p>
                            Welcome to the Development blog for Rock Advisor. If you’ve made it this far you’ve
                            obviously shown an interest in what’s going on behind the scenes as we build this new
                            style of guidebook. Thanks! I hope you didn’t come here because something is broken… if it
                            is or if you have any helpful suggestions please drop us <a href="#contact">an email!</a>
                        </p>
                        <hr>
                        <p>
                            So a bit about the project. Rock Advisor is a final year dissertation project for Calum
                            McClune and Phil Reynolds. We’re both heading towards a BSc in Computer Science but took on
                            a Software Engineering style project because of our particular interest in climbing. The
                            project has changed a lot since we first took it on. The initial brief was as follows:
                        </p>


                        <div class="quote">
                            <i class="fa fa-2x fa-quote-left" aria-hidden="true"></i>
                            <h4>PE-3: (suitable for SE, MEng Up to two students can choose this project)</h4>
                            <h5>A Rock Climbing Guide App</h5>
                            <h5>If you have an Android phone (firmware 4 and above) and are interested to learn about
                                GPS on the phone and little bit about rock climbing, this is an exciting hands on
                                project. The South Wales Mountaineering Club hosts a Guidebook Wiki that covers
                                rock-climbing in south Wales area. The project will involve building an application on
                                the Android platform to display crag locations, route descriptions and topographical
                                diagrams, incorporated in a selected zone by the climber. Moreover, at the crag by
                                moving around the phone parallel to the crag, the application should be able to
                                highlight the crags in front of the climber. The wiki information will be downloaded
                                into the phone and they will be available offline (there is no need to rely on the WiFi
                                or 3G/4G signals). An optional feature would be to provide a means for climbers to
                                select, find and record their climbs. This project could also expand to include social
                                media and sharing comments, likes etc.</h5>
                            <i class="fa fa-2x fa-quote-right " aria-hidden="true"></i>
                        </div>

                        <p>
                            The project title is still accurate but pretty much everything else has changed. While SWMC
                            do host a fantastically detailed set of Wiki pages covering all of South Wales, getting the
                            data they have out of their wiki is entirely non trivial. To solve this problem the decision
                            was made to start from the ground up. Build a database to hold all the information we want,
                            then build a front end to let people view that data and other CRUD functions. Then using the
                            handy API we’re going to build we allow people to view all the information in a mobile app!
                        </p>
                        <p>
                            That takes us to about the end of January, where we had scoped out the project again and
                            worked out WHAT we needed to do, we just then needed to work out HOW to do it. After those
                            pesky final year exams there and a project supervisor change there was a bit of a delay. But
                            thanks in no small part to a LOT of help from Liam O’Reilly by mid February we had the
                            database designed and had begun building using the Laravel PHP framework. Over the last
                            fortnight Calum has been making headway on the app and things were starting to go live in
                            the real world.
                        </p>
                        <hr>
                        <p>
                            Right then, after all that waffle that brings us to now, the end of February. The
                            dissertation progress reports are done with so that leaves us with a bit of a gap. Instead
                            of progress logs, I thought it would be a nice idea to have some occasional ramblings from
                            Calum and myself about how we’re getting on with the Development of Rock Advisor. And so
                            this development blog was born.
                        </p>
                        <p>
                            I’m going to be very clear from the start: This is not written in an academic style. This is
                            written however we damn well please and will probably include expletives and spelling erros
                            and probably won’t make a lot of sense, most of the time!
                        </p>
                        <p>
                            I hope you enjoy this journey, if you don’t, well, don’t read it. I'm not going to make you.
                        </p>
                    </div><!-- End Content -->


                </div><!-- End Post -->

            </div><!-- Bootstrap -->
        </div><!-- Row -->
    </div><!-- Container -->
</section><!-- #background -->


<!--
    ==========
    Contact Us
    ==========
              -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="primary">
                <p>If there's anything else drop us an email at the address below and we'll be in touch.</p>
            </div>
            <div class="col-lg-4 col-lg-offset-4 text-center">
                <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                <p><a href="mailto:rockadvisor@elasticparsley.uk">RockAdvisor@ElasticParsley.uk</a></p>
            </div>
        </div>
    </div>
</section>

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

<!-- Theme JavaScript -->
<script src="../js/creative-theme/creative.min.js"></script>

</body>
</html>