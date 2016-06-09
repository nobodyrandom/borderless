<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>Borderless</title>
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


</head>
<body>
<!-- NAVBAR
================================================== -->

<header class="main-header">


    <nav class="navbar navbar-static-top">

        <div class="navbar-top">

            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li><i class="fa fa-envelope"></i> <a href="mailto:contact@borderlessrelief.com">contact@borderlessrelief.com</a>
                            </li>
                        </ul> <!-- /.header-contact  -->

                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li><a href="https://www.facebook.com/borderlessrelief" target="_blank"> <i class="fa
                                                                                            fa-facebook"></i> </a></li>
                            <li><a href="https://twitter.com/borderless15" target="_blank"> <i
                                        class="fa fa-twitter"></i> </a>
                            </li>
                            <li><a href="#"> <i class="fa fa-google"></i> </a></li>
                        </ul> <!-- /.header-social  -->

                    </div>


                </div>
            </div>

        </div>

        <div class="navbar-main">

            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" href="index.html"><img src="assets/images/logo-small.png" alt=""></a>

                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                    <ul class="nav navbar-nav">

                        <li><a href="index.html">HOME</a></li>
                        <li class="has-child"><a class="is-active" href="about.html">ABOUT</a>

                            <ul class="submenu">
                                <li class="submenu-item"><a href="about.html">ABOUT US </a></li>
                                <li class="submenu-item"><a href="team.html">OUR TEAM </a></li>
                            </ul>

                        </li>
                        <li class="has-child"><a href="#">CAUSES</a>

                            <ul class="submenu">
                                <li class="submenu-item"><a href="causes.php?cause=1">2015: MYANMAR </a></li>
                                <li class="submenu-item"><a href="causes.php?cause=2">2014: THE UKRAINIAN IDP
                                        CRISIS </a></li>
                            </ul>

                        </li>
                        <li><a href="events.php?event=0">EVENTS</a></li>
                        <li class="has-child"><a href="news.html">NEWS</a>

                            <ul class="submenu">
                                <li class="submenu-item"><a href="articles.php?article=1">SPOTLIGHT ON BURMESE
                                        MINORITIES: THE
                                        SHAN </a></li>
                                <li class="submenu-item"><a href="articles.php?article=2">SPOTLIGHT ON BURMESE
                                        MINORITIES: THE
                                        KAREN </a></li>
                                <li class="submenu-item"><a href="articles.php?article=3">BURMESE DAYS: MODERN
                                        MYANMAR/BURMA IN
                                        HISTORY</a></li>
                            </ul>

                        </li>
                        <li><a href="joinus.html">JOIN US</a></li>
                        <li><a href="contact.html">CONTACT</a></li>

                    </ul>

                </div> <!-- /#navbar -->

            </div> <!-- /.container -->

        </div> <!-- /.navbar-main -->


    </nav>

</header> <!-- /. main-header -->

<?php

$linkTo = $_GET['article'];
switch ($linkTo) {
    case 1:
        echo "<div class=\"page-heading text-center\">

		<div class=\"container zoomIn animated\">

			<h1 class=\"page-title\">02/02/16: SPOTLIGHT ON BURMESE MINORITIES: THE SHAN <span class=\"title-under\"></span></h1>

		</div>

	</div>
	<div class=\"main-container\">

		<div class=\"container\">

			<div class=\"row fadeIn animated\">

				<!--<div class=\"col-md-6\">

					<img src=\"assets/images/about-us.jpg\" alt=\"\" class=\"img-responsive\">

				</div>-->

					<h2 class=\"title-style-2\">THE SHAN <span class=\"title-under\"></span></h2>

					<p>
						Angela Hou, University of Toronto student, reports on Myanmar's Karen minority.
					</p>

					<p>
						 ********
					</p>


					<p>
						The Shan people accounts for roughly 9% of the entire Burmese population, forming the largest ethnic minority group in the country.[1] The Shans reside in the Shan province, which is located in the eastern part of Burma, bordering China, Laos, and Thailand. Scholars estimate that there are 4-6 million people of this ethnicity in Burma, most of whom are of Buddhist faith.[2] The Shans were one of the few groups to sign the 1947 Panglong Agreement with the national government of Burma, which nominally ensured their relative autonomy.[3] However, this agreement was never realized. According to a report from Amnesty International, the Shan people are often the victims of many forms of brutal oppression from the state government, including extrajudicial executions and forced labour.
					</p>
					<p>
						Social issues such as opium trade and armed warlords plague the Shan province, coupled with the mutual distrust between the ethnic group and those who identify as Burmese. Due to the separate administrative status (as protectorates) the Shans received under the British colonial government, the ethnicity did not share a sense of Burmese nationalism.[4] Furthermore, the minority militias complicate the unity and stability of the province. The Shan province is rich in natural resources such as silver, lead, gold, and many others.[5] This makes it an attractive target of armed groups and the state military, also making the population vulnerable to corruption and even explicit human rights violations.[6] The challenges the Shan minority is facing are rarely addressed in the media, resulting in ignorance of the general public regarding the sectarian struggles of the population.[7]
					</p>
					<p>
						 ********
					</p>
					<p><br>
						Angela Hou is a first year student intending to pursue International Relations at the University of Toronto
					</p>
					<p><i>
						1] Friederich, Brian. The Stimson Center<br>
						[2] Ethnic Groups. Oxford Burma Alliance<br>
						[3] Friederich, Brian. The Stimson Center<br>
						[4] Lintner, Bertil The Shans and the Shan State of Burma<br>
						[5] Ibid.<br>
						[6] Ethnic Groups. Oxford Burma Alliance<br>
						[7] Tannenbaum, Nicola, and Chao Tzang Yanghwe. The Shan of Burma: Memoirs of a Shan Exile<br></i>
					</p>

			</div> <!-- /.row -->

		</div> <!-- /.about-us -->
	</div>";
        break;
    case 2:
        echo "<div class=\"page-heading text-center\">

		<div class=\"container zoomIn animated\">

			<h1 class=\"page-title\">01/26/16: SPOTLIGHT ON BURMESE MINORITIES: THE KAREN<span class=\"title-under\"></span></h1>

		</div>

	</div>
	<div class=\"main-container\">

		<div class=\"container\">

			<div class=\"row fadeIn animated\">

				<!--<div class=\"col-md-6\">

					<img src=\"assets/images/about-us.jpg\" alt=\"\" class=\"img-responsive\">

				</div>-->



					<h2 class=\"title-style-2\">THE KAREN <span class=\"title-under\"></span></h2>

					<p>
						Manfred Lai, University of Toronto student, reports on Myanmar's Karen minority..
					</p>

					<p>
						 ********
					</p>


					<p>
						The Karen is a Sino-Tibetan-speaking ethnic group that primary resides in the southeastern part of Myanmar. In recent years, researchers have suggested that a “pan-Karen” identity is a recent construction from the 1800s, and most Karen groups do not share common linguistic, religious or cultural characteristics.[1] The Karen people predominately speak in Sgaw, Pwo and Pa’o, three mutually unintelligible languages. While most Karens practice a mixture of Buddhism and animism, the group does not have a single religion, with some groups adopting other local faiths, or even western faiths such as Christianity. Despite cultural differences, Karens have not been exempt from atrocities committed by the Burmese military government.
					</p>
					<p>
						The dispute between the Karen people and the government began shortly after Burma's independence in 1948. The campaign was initiated by the Karen National Union (KNU), a political organization representing the Karen people of Burma with the goal of achieving an independent Karen state. The growing tension between the newly established Burmese government and KNU resulted in armed conflict between the central government and the union’s armed force, Karen National Liberation Army (KNLA). In spite of KNLA’s initial success, the government adopted a scorched-earth policy and other brutal tactics to reverse the group’s territorial gains. A commissioned report from the global law firm DLA Piper identified the tactics that were used against the Karen people as ethnic cleansing.[2]
					</p>
					<p>
						The on-going conflict has caused thousands of civilian deaths, refugees, and internally displaced persons within Myanmar. Due to the Karen State’s close proximity to Thailand, a large number of refugees fled to the neighbouring country to seek asylum. An estimated140,000 Karen refugees are temporarily living along the Thailand-Myanmar border, some living there for up to 20 years. Each camp contains around 10,000 refugees, facing problems with sanitation, overcrowding, and deteriorating living conditions.[3] Furthermore, despite being in Thai territory, Karen refugees continue to face security issues, as the Burmese military government periodically attacks the area.[4] In the 2000s, some Western countries have initially responded to United Nations High Commissioner for Refugees’ (UNHCR) urge for resettlement. However, the resettlement project must be continued to bring the Karen refugees out of this life-threatening environment.
					</p>
					<p>
						 ********
					</p>
					<p><br>
						Manfred Lai is a second year student studying International Relations and Political Science at the University of Toronto
					</p>
					<p><i>
						[1] <a target=\"_blank\" href=\"http://www.tandfonline.com/doi/pdf/10.1080/14631360220132736\">http://www.tandfonline.com/doi/pdf/10.1080/14631360220132736</a> <br>
						[2] <a target=\"_blank\" href=\"http://www.ibiblio.org/obl/docs3/threat.pdf\">http://www.ibiblio.org/obl/docs3/threat.pdf</a> <br>
						[3] <a target=\"_blank\" href=\"http://www.cic.gc.ca/english/department/media/backgrounders/2006/2006-06-20.asp\">http://www.cic.gc.ca/english/department/media/backgrounders/2006/2006-06-20.asp</a> <br>
						[4] Phan, Zoya and Damien Lewis. Undaunted: My Struggle for Freedom and Survival in Burma. New York: Free Press, 2010. (108) <br>
					</i>
					</p>




			</div> <!-- /.row -->

		</div>

	</div>";
        break;
    case 3:
        echo "<div class=\"page-heading text-center\">

		<div class=\"container zoomIn animated\">

			<h1 class=\"page-title\">11/24/15: BURMESE DAYS: MODERN MYANMAR/BURMA IN HISTORY<span class=\"title-under\"></span></h1>

		</div>

	</div>
	<div class=\"main-container\">

		<div class=\"container\">

			<div class=\"row fadeIn animated\">

				<!--<div class=\"col-md-6\">

					<img src=\"assets/images/about-us.jpg\" alt=\"\" class=\"img-responsive\">

				</div>-->

					<h2 class=\"title-style-2\">BURMESE DAYS: MODERN MYANMAR/BURMA IN HISTORY<span class=\"title-under\"></span></h2>

					<p>
						Keith Garrett, University of Toronto student, reports on Myanmar's tragic history of war and dictatorship.
					</p>

					<p>
						 ********
					</p>


					<p>
						There is an old Burmese folktale that goes like this: a merry king and his chief minister, dining by the windowsill, spill a drop of honey. The honey attracts a fly, the fly is then eaten by a spider, and the spider in turn is snatched by a lizard. Things carry on to this effect until people join the fray, then their friends, and at last the palace guards. Within the next few hours, civil war breaks out, the city burns, and a kingdom, in effect, is lost to a drop of honey.
					</p>
					<p>
						Burma today has fared little better: subject to over half a century of foul dictatorship, the country has suffered from civil wars and vicious ethnic strife. Modern Myanmar (formerly Burma) runs the risk of being lost, not to a drop of honey, but to a military junta that mauls the slightest democratic reform—until last month. On November 8th, Burma held a translucent election, resulting in a landslide victory of the opposition candidate Nobel peace-prize recipient Aung San Suu Kyi, the National League for Democracy (NLD). But to understand the full implications and limitations of Ms Suu Kyi's victory, an overview of modern Burmese history is in order.
					</p>
					<p>
						It began at the peculiar time of 4:20 am, January 4th, 1948, when Burma declared independence from the British Empire. The newly christened Union of Burma, a representative democracy, was bemired by ethnic conflict from the outset. The new government reigned in on a constitutional promise of autonomy for some of the largest ethnic minorities, becoming a continual source of unrest in the multi-ethnic nation of Burma: ethnic Burmese make up only two-thirds of the population, the rest belonging to well over a hundred different ethnicities, the largest being the Shan, Karen, Kachin, Rakhine and Mon peoples.
					</p>
					<p>
						Burma’s fragile democracy ended in 1962: a military coup established the military dictatorship that ruled directly until recently. The press muzzled, dissent crushed, and human rights dryly discarded, Burma submerged into international isolation and authoritarianism. It was controversially renamed Myanmar in 1989. Meanwhile, numerous ethnic militias, demanding political sovereignty, violently clashed with the central government in a series of civil wars, some of which, despite cease-fires, continue to claim lives today. Protracted ethnic violence has displaced millions in the ethnic peripheries of Burma, generating an outpour of refugees into neighbouring states of India and China.
					</p>
					<p>
						Yet, since 2010, the government has moved towards democratic reform. Nevertheless, mob violence against Muslim Rohingyas (Burma is a predominately Buddhist country) has continued, underlying far-from-resolved ethnic tensions. While the NLD soundly defeated the military in elections, Ms Suu Kyi remains ineligible to become President due to a constitutional provision, which stems from the military's constitution, which cannot be altered without over 75% of the parliament's vote. The not-so-subtle irony here is that the military permanently holds 25% of parliamentary seats.
					</p>
					<p>
						Despite obvious hindrances, Burma today is closer to democratic government than it has been since perhaps the 1950s. But as history shows, this has been a long and painful path. Nevertheless, the Burmese do not go without a hint of humour when it comes to their past. There is a sort of a national joke that goes: George Orwell wrote not just one novel about Burma, but three: Burmese Days, of course, and then Animal Farm and Nineteen-Eighty-four. And while Orwell did not pen many happy endings, the next chapter of Burmese history may just have the chance of reaching one. It certainly deserves it.
					</p>
					<p>
						*********
					</p>

					<p><br>
						Keith Garrett is a second year student double majoring in Economics and History.
					</p>
			</div> <!-- /.row -->
		</div>
	</div>";
        break;
    default:
        echo "<div>default page</div>";
}
?>

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
                                    js.src = p +"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>

                </div>


                <div class="col-md-4">

                    <div class="footer-col">

                        <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                        <div class="footer-content">

                            <div class="footer-form">

                                <div class="footer-form">

                                    <form id="contact-form" name="form" class="form-email" method="post"
                                          action="javascript:void(0);"
                                          data-form-type="nob" data-success-msg="Thanks :)" data-error-msg="Sorry, We hit a technical issue.">

                                    <div class="form-group">
                                        <input type="text" name="your-name" id="your-name" class="form-control"
                                               placeholder="Name" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="your-email" id="email" class="form-control"
                                               placeholder="E-mail" required>
                                    </div>

                                    <div class="form-group">
                                        <textarea name="your-message" id="your-message" class="form-control"
                                                  placeholder="Message" required></textarea>
                                    </div>

                                    <div class="form-group alerts">

                                    <div class="alert alert-success" role="alert">

                                </div>

                                <div class="alert alert-danger" role="alert">

                            </div>

                        </div>

                        <div class="form-group">
                            <button type="submit" id="submit" class="btn btn-submit pull-right">Send message</button>
                        </div>
                        <div class="form-status" style="display: none;">
                    </div>
                    </form>

                </div>

            </div>
        </div>

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
<script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"></script>')</script>

<!-- Bootsrap javascript file -->
<script src="assets/js/bootstrap.min.js"></script>


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