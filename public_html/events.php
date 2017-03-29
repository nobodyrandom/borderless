<?php

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
</header> <!-- /. main-header -->";

$linkTo = $_GET['event'];
switch ($linkTo) {
    case 1:
        echo "<div class=\"page-heading text-center\">

		<div class=\"container zoomIn animated\">

			<h1 class=\"page-title\">04/20/2016 <span class=\"title-under\"></span></h1>
			<p class=\"page-description\">Capturing Mo(ve)ments</p>
		</div>
	</div>
	
	<div class=\"main-container\">
		<div class=\"container\">
			<div class=\"row fadeIn animated\">
				<div class=\"col-md-6\">
					<h2 class=\"title-style-2\"> 04/20/2016: Capturing Mo(ve)ments<span class=\"title-under\"></span></h2>
					<p>
						Capturing Mo(ve)ments is a gallery and a photographic print sale, showcasing the photographs of international photojournalists around the world, who have generously donated their images from Myanmar, Cambodia, Thailand, South Africa, India, and other countries, which will be displayed in a gallery. The prints of their photographs will be sold for $20 each. All proceeds will be donated to a local NGO in Myanmar, the Back Pack Health Worker Team.
					</p>
					<p>
						***********************************
					</p>
					<p>
						All purchases are cash only.<br>
						To register, please <u><a href=\"https://www.eventbrite.ca/e/capturing-movements-tickets-24407766286\">RSVP Here</a></u>
					</p>
					<p>
						***********************************
						<br>

					</p>
					<p>
						About the speakers:
					</p>
					<p>
						Nathaniel Brunt is a Canadian freelance photographer who focuses on the aftermath of conflict and trauma and the social and political problems that arise during this period. The photos he has donated document an area where traditional life has remained virtually unaffected by the wider world for the last fifty years due to the military control of the country. These images seek to provide a visual insight into a unique culture and way of life that is changing by the minute in Myanmar.
						Dr. Arne Kislenko is the Associate Professor of History at Ryerson University and an instructor in the International Relations Program at Trinity College/the Munk School of Global Affairs at the University of Toronto. His teaching focus is on 19th and 20th century international relations.
					</p>
					<p>
						Htay Tint is a former refugee from Myanmar, who has been sponsored by the Canadian government. He comes to U of T with the goal of returning to Myanmar and bringing about positive reform through education.
					</p>
					<p>
						All proceeds will be donated to Backpack Health Worker Team (BPHWT), an NGO that provides health care to internally displaced persons (IDPs) and other vulnerable people in remote areas and conflict zones in Myanmar. To learn more about the NGO, please visit <u><a href=\"http://backpackteam.org\">http://backpackteam.org</a></u>
					</p>
					<p>
						BORDERLESS is a non-profit student group that raises funds and awareness for underreported refugee and internally displaced persons (IDP) crises.
					</p>
				</div>

				<div class=\"col-md-6\">
					<img src=\"assets/images/event1.png\" alt=\"\" class=\"causesimg\">
				</div>
			</div>
		</div>
	</div> <!-- /.main-container  -->";
        break;


    case 2:
        echo "<div class=\"page-heading text-center\">
		<div class=\"container zoomIn animated\">
			<h1 class=\"page-title\">11/26/2015 <span class=\"title-under\"></span></h1>
			<p class=\"page-description\">
				MYANMAR POST-ELECTION CONFERENCE: PROSPECTS FOR PEACE
			</p>
		</div>
	</div>
	
	<div class=\"main-container\">
		<div class=\"container\">
			<div class=\"row fadeIn animated\">
				<div class=\"col-md-6\">
					<h2 class=\"title-style-2\"> 11/26/2015: MYANMAR POST-ELECTION CONFERENCE: PROSPECTS FOR PEACE<span class=\"title-under\"></span></h2>
					<p>
						This event is brought to you in partnership with BORDERLESS and the Asian Institute.
					</p>
					<p>
						Date, Time: Thursday, November 26, 2015, 2:00 - 4:00pm followed by a reception
					</p>
					<p>
						Location: Asian Institute, Munk School of Global Affairs, 1 Devonshire Place, Room 208N
					</p>
					<p>
						On November 8, 2015, Burmese citizens will be voting for their new parliament in what is expected to be the first free general election since the beginning of democratization in 2011. Our speakers will focus on the implications of the election for Myanmar’s ethnic minorities, the regional migration and refugee crisis, Myanmar’s relations with its Asia-Pacific neighbours, and the future of the country’s nascent democracy.
					</p>
					<p>
						Speakers:<br>
						- Dr. Victor C. Falkenheim, Professor Emeritus of Political Science and East Asian Studies, University of Toronto
						<br>	- Dr. Jacques Bertrand, Professor of Political Science and core faculty member at the Asian Institute
						<br>	- Dr. Arne Kislenko, Associate History Professor at Ryerson University and Instructor in the International Relations program at the Munk School
						<br>	- Dr. Stephen Campbell, Post-Doctoral Fellow, Trent University
					</p>
					<p>
						Moderator:
						<br>	- Mr. Emile Dirks, PhD student in Political Science, University of Toronto.
					</p>
				</div>
				<div class=\"col-md-6\">
					<img src=\"assets/images/event4.png\" alt=\"\" class=\"causesimg\">
				</div>
			</div>
		</div>
	</div> <!-- /.main-container  -->";
        break;


    default:
        echo "<div class=\"page-heading text-center\">
		<div class=\"container zoomIn animated\">
			<h1 class=\"page-title\">EVENTS <span class=\"title-under\"></span></h1>
		</div>
	</div>
	<div class=\"section-home home-reasons\">
		<div class=\"container2\">
			<div class=\"row fadeIn animated\">
                <div class=\"col-md-3 col-md-offset-1 \">
                    <img src=\"assets/images/event1.png\" alt=\"\" class=\"img-responsive\">
                </div>
                
                <div class=\"col-md-7\">
                    <h2 class=\"title-style-2\"><a href=\"events.php?event=1\">04/20/2016: Capturing Mo(ve)ments </a><span class=\"title-under\"></span></h2>
                </div>
			</div>

			<div class=\"row fadeIn animated\">
				<div class=\"col-md-3 col-md-offset-1 \">
					<img src=\"assets/images/event2.png\" alt=\"\" class=\"img-responsive\">
				</div>
				<div class=\"col-md-7\">
					<h2 class=\"title-style-2\"><03/18/2016: REL!EF<span class=\"title-under\"></span></h2>
				</div>
			</div>

			<div class=\"row fadeIn animated\">
				<div class=\"col-md-3 col-md-offset-1 \">
					<img src=\"assets/images/event3.png\" alt=\"\" class=\"img-responsive\">
				</div>
				<div class=\"col-md-7\">
					<h2 class=\"title-style-2\">03/17/2016: Lost in Transition: Human Trafficking and Migrations in Myanmar<span class=\"title-under\"></span></h2>
				</div>
			</div>

			<div class=\"row fadeIn animated\">
				<div class=\"col-md-3 col-md-offset-1\">
					<img src=\"assets/images/event4.png\" alt=\"\" class=\"img-responsive\">
				</div>
				
				<div class=\"col-md-7\">
					<h2 class=\"title-style-2\"><a href=\"events.php?event=2\">11/26/15: Myanmar Post-Election Conference: Prospects for Peace</a><span class=\"title-under\"></span></h2>
				</div>
			</div>

			<div class=\"row fadeIn animated\">
				<div class=\"col-md-3 col-md-offset-1 \">
					<img src=\"assets/images/event5.png\" alt=\"\" class=\"img-responsive\">
				</div>
				
				<div class=\"col-md-7\">
					<h2 class=\"title-style-2\">02/23/15: One Year Later: Ukrainian Civilians in the Crossfire <span class=\"title-under\"></span></h2>
				</div>
			</div>
        </div>
    </div> <!-- /section-home  -->";
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
                        <script type=\"text/javascript\">document.write('\x3Cscript type=\"text/javascript\" src=\"' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js\">\x3C/script>');</script>
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