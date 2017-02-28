<!-- app/views/index.php -->
<!--
--Edited last by philr
--On 25/02/17
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
    <link href="../css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.js"></script>
    <!-- Angular Form -->
    <script src="../angularApp/app.js"></script>
    <script src="../angularApp/controllers/emailCtrl.js"></script>

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-92612290-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>

<body id="page-top">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Rock Advisor</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="/map">Crag Map</a>
                </li>
                <li>
                    <a class="page-scroll" href="/crags">Crag Index</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contribute</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="homeHeading">Rock Advisor</h1>
            <hr>
            <p>A Climbing Guidebook for the Digital Age</p>
            <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">We're building the new generation of guidebook</h2>
                <hr class="light">
                <p class="text-faded">Rock Advisor is your digital companion to find the information about where you
                    want to climb. Starting as a final year university project but with aspirations to go a lot further
                    but to do that we need your help.</p>
                <div class="about-buttons">
                    <a href="/map" class="page-scroll btn btn-default btn-xl sr-button">Crag Map</a>
                    <a href="#howItWorks" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="howItWorks">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">How Rock Advisor Works</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <!--                    <a href="/map">-->
                <div class="service-box">
                    <i class="fa fa-4x fa-code text-primary sr-icons"></i>
                    <h3>Development</h3>
                    <p class="text-muted">A university project in its earliest stages. There are a LOT more features
                        coming soon.</p>
                </div>
                <!--                    </a>-->
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <a href="#contact">
                    <div class="service-box">
                        <i class="fa fa-4x fa-pencil-square-o text-primary sr-icons"></i>
                        <h3>Contribute</h3>
                        <p class="text-muted">Our guidebook is 100% crowd sourced, if you’d like to contribute let us
                            know.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <a href="/map">
                    <div class="service-box">
                        <i class="fa fa-4x fa-map-marker text-primary sr-icons"></i>
                        <h3>Map</h3>
                        <p class="text-muted">We took a very boring map and added all of our favorite crags! Contribute
                            to add your own.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <!--                    <a href="#feedback">-->
                <div class="service-box">
                    <i class="fa fa-4x fa-mobile text-primary sr-icons"></i>
                    <h3>App</h3>
                    <p class="text-muted">A guidebook is no use if you can’t use it at the crag, so we developed a handy
                        little app.</p>
                </div>
                <!--                    </a>-->
            </div>
        </div>
    </div>
</section>

<!--
<section class="no-padding" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
-->
<aside class="bg-dark">
    <section id="feedback">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Contribute</h2>
                <hr class="primary">
                <p>We need your help to make Rock Advisor work. In the not too distant future you will be able to add
                    and update the information that we use. We've started with a very limited selection of crags and an
                    even more limited selection of routes. We need you to help grow our database. If you're interested
                    in lending a hand then fill in the form below and we'll get in touch when we need your help!</p>
                <a href="#contributeModal"
                   role="button"
                   class="btn btn-default btn-xl sr-button btn-zoom"
                   data-toggle="modal">I want to help!</a>
            </div>
        </div>
    </section>
</aside>

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

<div id="contributeModal"
     class="modal fade"
     tabindex="-1"
     role="dialog"
     aria-labelledby="contributeModalLabel"
     aria-hidden="true"
     ng-app="contributeApp">
    <div class="modal-dialog">
        <div class="modal-content col-sm-12">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="contributeModalLabel" class="text-center">
                    Want to help out? Let us know!
                </h3>
            </div>
            <div class="modal-body"
                 ng-controller="contributeCtrl">
                <form class="form-horizontal"
                      id="contributeForm"
                      ng-submit="submit(contributeForm)"
                      name="contributeForm"
                      method="post"
                      action=""
                      role="form">
                    <div class="form-group"
                         ng-class="{ 'has-error': contributeForm.formName.$invalid && submitted }">
                        <label>Name</label>
                        <input class="form-control required"
                               placeholder="Your name"
                               data-placement="top"
                               data-trigger="manual"
                               data-content="Must be at least 3 characters long, and must only contain letters."
                               type="text"
                               id="formName"
                               name="formName"
                               ng-model="formData.formName">
                    </div>
                    <div class="form-group"
                         ng-class="{ 'has-error': contributeForm.formMessage.$invalid && submitted }">
                        <label>Message</label>
                        <textarea class="form-control"
                                  placeholder="Write us a message.."
                                  data-placement="top"
                                  data-trigger="manual"
                                  id="formMessage"
                                  name="formMessage"
                                  ng-model="formData.formMessage">
                        </textarea>
                    </div>
                    <div class="form-group"
                         ng-class="{ 'has-error': contributeEmail.formEmail.$invalid && submitted }">
                        <label>E-Mail</label>
                        <input class="form-control email"
                               placeholder="email@you.com (so that we can contact you)"
                               data-placement="top"
                               data-trigger="manual"
                               data-content="Must be a valid e-mail address (user@gmail.com)"
                               type="text"
                               id="formEmail"
                               name="formEmail"
                               ng-model="formData.formEmail">
                    </div>
                    <div class="form-group">
                        <button type="submit"
                                class="btn btn-success btn-primary btn-lg center-block"
                                id="contributeSubmitButton"
                                ng-hide="submitButtonHidden">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            &nbsp Done!
                        </button>
                        <!--<p class="help-block pull-left text-danger hide"
                           id="contributeSubmitFormError">
                            &nbsp; The form is not valid.
                        </p>-->
                        <p id="formProgress"
                           class="text-center"
                           ng-show="progressMessageShowing">
                            Sending...
                        </p>
                        <p
                           class="text-center bg-success"
                           ng-show="resultShowing"
                           style="padding: 15px; margin: 0;">
                            Success!
                        </p><!--ng-class="result" >{{ resultMessage }}< -->

                        </p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn center-block" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>

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
