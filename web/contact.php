<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>Contact | Charity / Non-profit responsive Bootstrap HTML5 template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootsrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Font awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Template main Css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Modernizr -->
    <script src="assets/js/modernizr-2.6.2.min.js"></script>

    <!-- FAVICONS -->
    <link rel="icon" type="image/png" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link rel="manifest" href="assets/images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


</head>
<body>
<!-- NAVBAR================================================== -->

<?php include_once ("header.html") ?>

<div class="page-heading text-center">
    <div class="container zoomIn animated">
        <h1 class="page-title">CONTACT US <span class="title-under"></span></h1>
        <p class="page-description">
            Have a question about us or how to get involved? Send us a message.
        </p>
    </div>
</div>

<div class="main-container fadeIn animated">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12 col-form">
                <h2 class="title-style-2">CONTACT FORM <span class="title-under"></span></h2>
                <form id="contact-form" name="form" class="form-email" method="post" action="javascript:void(0);"
                      data-form-type="nob" data-success-msg="Thanks :)"
                      data-error-msg="Sorry, We hit a technical issue.">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" name="your-name" id="your-name" class="form-control" placeholder="Name"
                                   required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="your-email" id="email" class="form-control" placeholder="E-mail"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="your-message" id="your-message" class="form-control" placeholder="Message"
                                  required></textarea>
                    </div>
                    <div class="form-group alerts">
                        <div class="alert alert-success" role="alert"></div>

                        <div class="alert alert-danger" role="alert"></div>
                    </div>

                    <div class="form-group">
                        <button type="submit" id="submit" class="btn btn-submit pull-right">Send message</button>
                    </div>

                    <div class="clearfix"></div>
                    <div class="form-status" style="display: none;"></div>
                </form>
            </div>

            <div class="col-md-4 col-md-offset-1 col-contact">
                <h2 class="title-style-2"> MAILING ADDRESS <span class="title-under"></span></h2>
                <div class="contact-items">
                    <ul class="list-unstyled contact-items-list">
                        <li class="contact-item"><span class="contact-icon"> <i class="fa fa-map-marker"></i></span>12
                            Hart House Circle, Toronto, ON M5S 3J9
                        </li>
                        <li class="contact-item"><span class="contact-icon"> <i class="fa fa-envelope"></i></span>
                            contact@borderlessrelief.com
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- /.row -->
    </div>
</div>

<footer class="main-footer">

    <div class="footer-top">

    </div>


    <div class="footer-main">
        <div class="container">

            <div class="row">
                <div class="col-md-4">

                    <div class="footer-col">

                        <h4 class="footer-title">About us <span class="title-under"></span></h4>

                        <div class="footer-content">

                            <p>
                                BORDERLESS is a grassroots, non-partisan, non-profit organization which uses creative
                                means of expression to draw attention to, educate on, and raise funds for often
                                overlooked internally displaced persons (IDP) and refugee crises around the world by
                                bringing together people of various backgrounds.
                            </p>
                            <p>
                                Our long-term vision is to be able to provide medical and general assistance to areas in
                                immediate need. Funds raised by BORDERLESS and other student clubs, societies, and
                                organizations would be sent to regions with large numbers of refugees that do not
                                receive sufficient aid.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="footer-col">

                        <a class="twitter-timeline" href="https://twitter.com/BORDERLESS15"
                           data-widget-id="738407228953243648">Tweets by @BORDERLESS15</a>
                        <script>!function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + "://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");</script>
                    </div>

                </div>
                <div class="clearfix"></div>


            </div>


        </div>


    </div>

    <div class="footer-bottom">

        <div class="container text-right">
            BorderlessRelief @ copyrights 2016
        </div>
    </div>

</footer> <!-- main-footer -->


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

<!-- Bootsrap javascript file -->
<script src="assets/js/bootstrap.min.js"></script>


<!-- Google map  -->
<script src="//maps.google.com/maps/api/js?key=AIzaSyBPU6khC8uUWWKsIFKzMZztufsTCLsqzrU&callback=loadedGmap" async defer></script>
<script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>


<!-- Template main javascript -->
<script src="assets/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');
</script>
</body>
</html>
