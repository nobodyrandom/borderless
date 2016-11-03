<?php
/**
 * Created by PhpStorm.
 * User:
 * Date:
 * Time:
 */

echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
        <meta charset=\"utf-8\">
        <title>Borderless</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">

        <!-- Font awesome -->
        <link rel=\"stylesheet\" href=\"assets/css/font-awesome.min.css\">

        <!-- Template main Css -->
        <link rel=\"stylesheet\" href=\"assets/css/style.css\">

        <!-- Modernizr -->
        <script src=\"assets/js/modernizr-2.6.2.min.js\"></script>

        <!-- FAVICONS -->
        <link rel=\"icon\" type=\"image/png\" href=\"assets/images/favicon.ico\">
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"assets/images/apple-icon-57x57.png\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"assets/images/apple-icon-60x60.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"assets/images/apple-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"assets/images/apple-icon-76x76.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"assets/images/apple-icon-114x114.png\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"assets/images/apple-icon-120x120.png\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"assets/images/apple-icon-144x144.png\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"assets/images/apple-icon-152x152.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"assets/images/apple-icon-180x180.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"assets/images/android-icon-192x192.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"assets/images/favicon-32x32.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"assets/images/favicon-96x96.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"assets/images/favicon-16x16.png\">
        <link rel=\"manifest\" href=\"assets/images/manifest.json\">
        <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
        <meta name=\"msapplication-TileImage\" content=\"/ms-icon-144x144.png\">
        <meta name=\"theme-color\" content=\"#ffffff\">




    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->

    <header class=\"main-header\">
    <!-- Top Navbar -->
    <nav class=\"navbar navbar-static-top\">
        <div class=\"navbar-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-xs-12\">
                        <!-- need to get rid of the mailto -->
                        <!-- /.header-contact  -->
                        <ul class=\"list-unstyled list-inline header-contact\">
                            <li><i class=\"fa fa-envelope\"></i> <a href=\"mailto:contact@borderlessrelief.com\">contact@borderlessrelief.com</a>
                            </li>
                        </ul>
                    </div>

                    <!-- /.header-social: Social media links  -->
                    <div class=\"col-sm-6 col-xs-12 text-right\">
                        <ul class=\"list-unstyled list-inline header-social\">
                            <li><a href=\"https://www.facebook.com/borderlessrelief\" target=\"_blank\"> <i
                                    class=\"fa fa-facebook\"></i> </a></li>
                            <li><a href=\"https://twitter.com/borderless15\" target=\"_blank\"> <i
                                    class=\"fa fa-twitter\"></i> </a></li>
                            <li><a href=\"#\"> <i class=\"fa fa-google\"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navbar -->
        <div class=\"navbar-main\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"
                            aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.php\"><img src=\"assets/images/logo-small.png\" alt=\"\"></a>
                </div>

                <div id=\"navbar\" class=\"navbar-collapse collapse pull-right\">
                    <ul class=\"nav navbar-nav\">
                        <li><a class=\"is-active\" href=\"index.php\">HOME</a></li>
                        <li class=\"has-child\"><a href=\"about.php\">ABOUT</a>
                            <ul class=\"submenu\">
                                <li class=\"submenu-item\"><a href=\"about.php\">ABOUT US </a></li>
                                <li class=\"submenu-item\"><a href=\"team.php\">OUR TEAM </a></li>
                            </ul>
                        </li>
                        <li class=\"has-child\"><a href=\"#\">CAUSES</a>
                            <ul class=\"submenu\">
                                <!--<li class=\"submenu-item\"><a href=\"#\">2016: COLOMBIA </a></li>-->
                                <li class=\"submenu-item\"><a href=\"causes.php?cause=2\">2015: MYANMAR </a></li>
                                <li class=\"submenu-item\"><a href=\"causes.php?cause=3\">2014: THE UKRAINIAN IDP
                                    CRISIS </a></li>
                            </ul>
                        </li>
                        <li><a href=\"events.php?event=0\">EVENTS</a></li>
                        <li class=\"has-child\"><a href=\"news.php\">NEWS</a>
                            <ul class=\"submenu\">
                                <li class=\"submenu-item\"><a href=\"articles.php?article=1\">SPOTLIGHT ON BURMESE
                                    MINORITIES: THE SHAN </a></li>
                                <li class=\"submenu-item\"><a href=\"articles.php?article=2\">SPOTLIGHT ON BURMESE
                                    MINORITIES: THE KAREN </a></li>
                                <li class=\"submenu-item\"><a href=\"articles.php?article=3\">BURMESE DAYS: MODERN
                                    MYANMAR/BURMA IN HISTORY</a></li>
                            </ul>
                        </li>
                        <!--<li><a href=\"#\">JOURNAL</a></li>-->
                        <li><a href=\"contact.php\">CONTACT</a></li>
                        <li><a href=\"joinus.php\" class=\"btn btn-third-nav\" style=\"padding-top: 10px;padding-bottom: 10px\";>JOIN US</a></li>
                    </ul>
                </div> <!-- /#navbar -->
            </div> <!-- /.container -->
        </div> <!-- /.navbar-main -->
    </nav>
</header> <!-- /. main-header -->


	<div class=\"page-heading text-center\">

		<div class=\"container zoomIn animated\">

			<h1 class=\"page-title\">02/02/16: SPOTLIGHT ON BURMESE MINORITIES: THE SHAN <span class=\"title-under\"></span></h1>

		</div>

	</div>";
$linkTo = $_GET['cause'];
switch ($linkTo) {
    case 1:
        echo "<div class=\"main-container\">

		<div class=\"container\">
			<div class=\"row fadeIn animated\">
				<div class=\"col-md-6\">
					<h2 class=\"title-style-2\"> 2016: COLUMBIA<span class=\"title-under\"></span></h2>
				</div>
				<div class=\"col-md-6\">
					<img src=\"assets/images/causes/Colum.jpg\" alt=\"Columbia - 2016\" class=\"causesimg\">
				</div>
			</div>
		</div>
	</div> <!-- /.main-container  -->";
        break;

    case 2:
        echo "<div class=\"main-container\">
		<div class=\"container\">
			<div class=\"row fadeIn animated\">
				<div class=\"col-md-6\">
					<h2 class=\"title-style-2\"> 2014: THE UKRAINIAN IDP CRISIS  <span class=\"title-under\"></span></h2>
					<p>
						BORDERLESS’s 2014-2015 campaign focused on bringing relief to Ukrainian IDPs displaced by the conflict in the Donbass region. In conjunction with Broadening Horizons, we successfully hosted an experts’ speaker series on the geopolitical and humanitarian situation in Ukraine, and ran \"Profs Got Talent!: Lip-Sync for Charity\". In addition, we partnered with the International Issues Discussion Series (IID) at Ryerson University and the University of Toronto United Nations Society (UNSOC) to raise awareness and donations. Together, we managed to raise US$2500, which was donated to the UNHCR, earmarked for bringing food and shelter to Ukrainian refugees in refugee camps.
					</p>
				</div>
				<div class=\"col-md-6\">
					<img src=\"assets/images/ukr.jpg\" alt=\"\" class=\"causesimg\">
				</div>
			</div>
		</div>
	</div> <!-- /.main-container  -->";
        break;

    case 3:
        echo "<div class=\"main-container\">
		<div class=\"container\">
			<div class=\"row fadeIn animated\">
				<div class=\"col-md-6\">
					<h2 class=\"title-style-2\"> 2015: MYANMAR<span class=\"title-under\"></span></h2>
					<p>
						Our campaign this year focuses on the internal conflicts in Myanmar.
					</p>
					<p>
						A diverse country with hundreds of ethnic groups, Myanmar has faced an ongoing violent internal conflict since its independence in 1948, as many major ethnic groups (such as the Shan, the Karen, and the Kachin) fight insurgencies to assert their ethnic autonomy. The resulting conflict produced horrific atrocities and massive population displacements; the various Burmese military juntas have been accused of human rights violations and ethnic cleansing.
					</p>
					<p>
						In particular, the Rohingya, a Muslim minority people in Rakhine/Arakan State, have faced persecution by their Buddhist neighbours (allegedly with government involvement), who believe they are illegal migrants. Long denied citizenship and subjected to discriminatory laws, anti-Rohingya violence escalated in 2012 when a pogrom displaced over 125,000 Rohingya and other Muslims, leading to allegations by human rights groups that there is an anti-Muslim ethnic cleansing campaign.
					</p>
					<p>
						Since then, continuing violence and deteriorating conditions further uprooted the Rohingya, leading to a spiralling regional humanitarian crisis. In 2015, an estimated greater than 500,000 people are internally displaced across Burma, 240,000 of which are displaced within northwestern Myanmar.
					</p>
					<p>
						This year, we will host academic awareness events and raise funds to support Burmese civilians displaced by Myanmar's internal conflicts.
					</p>
				</div>
				<div class=\"col-md-6\">
					<img src=\"assets/images/myanmar.jpg\" alt=\"\" class=\"causesimg\">
				</div>
			</div>
		</div>
	</div> <!-- /.main-container  -->";
        break;


    default:
        echo "<div>default page</div>";
}
echo "
    <footer class=\"main-footer\">

    <div class=\"footer-top\"></div>

    <div class=\"footer-main\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"footer-col\">
                        <h4 class=\"footer-title\">About us <span class=\"title-under\"></span></h4>
                        <div class=\"footer-content\">
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

                <div class=\"col-md-4\">
                    <div class=\"footer-col\">
                        <h4 class=\"footer-title\">TWITTER FEED <span class=\"title-under\"></span></h4>
                        <a class=\"twitter-timeline\" href=\"https://twitter.com/BORDERLESS15\"
                           data-widget-id=\"738407228953243648\">Tweets by @BORDERLESS15</a>
                        <script>!function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + \"://platform.twitter.com/widgets.js\";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, \"script\", \"twitter-wjs\");</script>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"footer-col\">
                        <h4 class=\"footer-title\">WORLD NEWS <span class=\"title-under\"></span></h4>
                        <!-- start feedwind code -->
                        <script type=\"text/javascript\">document.write('\x3Cscript type=\"text/javascript\" src=\"' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js\">\x3C/script></script>
                        <script type=\"text/javascript\">(function () {
                            var params = {
                                rssmikle_url: \"http://reliefweb.int/headlines/rss.xml\",
                                rssmikle_frame_width: \"500\",
                                rssmikle_frame_height: \"400\",
                                frame_height_by_article: \"0\",
                                rssmikle_target: \"_blank\",
                                rssmikle_font: \"Arial, Helvetica, sans-serif\",
                                rssmikle_font_size: \"12\",
                                rssmikle_border: \"off\",
                                responsive: \"off\",
                                rssmikle_css_url: \"\",
                                text_align: \"left\",
                                text_align2: \"left\",
                                corner: \"off\",
                                scrollbar: \"on\",
                                autoscroll: \"on\",
                                scrolldirection: \"up\",
                                scrollstep: \"3\",
                                mcspeed: \"20\",
                                sort: \"Off\",
                                rssmikle_title: \"off\",
                                rssmikle_title_sentence: \"\",
                                rssmikle_title_link: \"\",
                                rssmikle_title_bgcolor: \"#0066FF\",
                                rssmikle_title_color: \"#FFFFFF\",
                                rssmikle_title_bgimage: \"\",
                                rssmikle_item_bgcolor: \"#FFFFFF\",
                                rssmikle_item_bgimage: \"\",
                                rssmikle_item_title_length: \"55\",
                                rssmikle_item_title_color: \"#0066FF\",
                                rssmikle_item_border_bottom: \"on\",
                                rssmikle_item_description: \"on\",
                                item_link: \"off\",
                                rssmikle_item_description_length: \"150\",
                                rssmikle_item_description_color: \"#666666\",
                                rssmikle_item_date: \"gl1\",
                                rssmikle_timezone: \"Etc/GMT\",
                                datetime_format: \"%b %e, %Y %l:%M %p\",
                                item_description_style: \"text+tn\",
                                item_thumbnail: \"full\",
                                item_thumbnail_selection: \"auto\",
                                article_num: \"15\",
                                rssmikle_item_podcast: \"off\",
                                keyword_inc: \"\",
                                keyword_exc: \"\"
                            };
                            feedwind_show_widget_iframe(params);
                        })();
                        </script>
                        <div style=\"font-size:10px; text-align:center; width:300px;\"><a href=\"http://feed.mikle.com/\" target=\"_blank\" style=\"color:#CCCCCC;\">RSS Feed
                            Widget</a><!--Please display the above link in your web page according to Terms of Service.-->
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
    </div>

    <div class=\"footer-bottom\">
        <div class=\"container text-right\">
            BorderlessRelief @ copyrights 2016
        </div>
    </div>

</footer> <!-- main-footer -->

        <!-- jQuery -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"assets/js/jquery-1.11.1.min.js\"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src=\"assets/js/bootstrap.min.js\"></script>


        <!-- Template main javascript -->
        <script src=\"assets/js/main.js\"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>";