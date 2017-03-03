<!--
--Created by philr
--on 03/03/17
--Edited last by philr
--On 03/03/17
-->

<!--
---------------------------------------
This is going to be our master template
---------------------------------------
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

    <!-- AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.2/angular.min.js"></script>
    <!-- AngularJS UI-Router -->
    <script src="//unpkg.com/angular-ui-router/release/angular-ui-router.min.js"></script>
    <!-- Angular Form -->
    <script src="../angularApp/controllers/emailCtrl.js"></script>
    <script src="../angularApp/services/emailService.js"></script>
    <script src="../angularApp/app.js"></script>

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
<body ng-app="mainApp" id="page-top">
<!--
    ==========
    Navigation
    ==========
              -->
<nav id="mainNav"
     class="navbar navbar-default navbar-fixed-top"
     role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#rockAdvisorNavbar">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <!--"Rock Advisor" Links to Homepage-->
            <a class="navbar-brand page-scroll" ui-sref="#">Rock Advisor</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="rockAdvisorNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" ui-sref="home">Home</a>
                </li>
                <li>
                    <a class="page-scroll" ui-sref="map">Crag Map</a>
                </li>
                <li>
                    <a class="page-scroll" ui-sref="crags">Crag Index</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!--
    ==========
   Main Content
    ==========
              -->
<div class="container">
    <!-- THIS IS WHERE WE WILL INJECT OUR CONTENT ============================== -->
    <div ui-view></div>
</div>

</body>
</html>