<<<<<<< HEAD
=======

        
        
        <!-- My Curriculum Vitae -->
        
        <!-- 
			Utilisation de HTML5, CSS3, Bootstrap5 (https://getbootstrap.com/), JavaScript, npm, nodeJs
			
            

			Structure globale de la page :
			
			HEADER_________________________________________
			| NAVlogo__              NAVmenu & burger__
			
			MAIN_____________________________
			| SECTIONpresentation___________________________
			| SECTIONskills_________________________________
			| SECTIONexperiences____________________________
			| SECTIONprojects_______________________________
			| SECTIONtrainings______________________________
			| SECTIONrecommendations________________________
			| SECTIONmotivations____________________________
			| SECTIONlanguages & hobbies____________________
			| SECTIONcontact & skills used _________________

			FOOTER__________________________________________
			
			
			
			
			
			Styles répartis en plusieurs fichiers selon la structure de la page :
			
			_site.css
			HEADER______________________________________________________________
			| _site_header.css
			
			MAIN________________________________________________________________
			| | _main.css 
			| |  
			| | SECTIONpresentation_____________________________________________
            | |                 | | _main_presentation.css
			| |                 | | 
			| | SECTIONskills___________________________________________________
            | |                 | | _main_skill.css
			| |                 | | 
			| | SECTIONexperiences______________________________________________
            | |                 | | _main_exprience.css
			| |                 | | 
			| | SECTIONprotfolios_______________________________________________
            | |                 | | _main_project.css
			| |                 | | 
			| | SECTIONtrainings________________________________________________
            | |                 | | _main_training.css
			| |                 | | 
			| | SECTIONrecommandations__________________________________________
            | |                 | | _main_recommandation.css
			| |                 | | 
			| | SECTIONmotivation_______________________________________________
            | |                 | | _main_motivation.css
			| |                 | | 
			| | SECTIONlanguages & hobbies______________________________________
            | |                 | | _main_langue.css
			| |                 | | 
			| | SECTIONcontact & skills used____________________________________
            | |                 | | _main_contact.css
			
			FOOTER______________________________
            | | _site_footer

		
		-->
		








>>>>>>> 6e8275a1489c51cdb28fd570481fe9facd83f92d
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Mi-Sun's CV</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    
    <link rel="stylesheet" href="asset/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-rmI4EfT2U1OJXXKuMKPH6s84TaQp2LXgjzhpBVT5fryCn1xAshdv7T/LnVzzp+5qkGRnhLeYABuphMBrBnQgHQ=="
    crossorigin="anonymous" />
</head>

<body>
	<?php
		include("commun/header.html");
	?>

	<main>
	<!-- Presentation Start -->
	<section class="presentation">
		<div class="container">
			<div class="presentation-box">
				<h2 id="headingBig">Bonjour,</h2>
				<div class="row gx-0 ">
					<div class="col-md-11 col-xxl-7 ms-auto">
						<div class="presentation-text">
							<h1 id="headingSmall">Mi-Sun JANG</h1>
							<h3 id="headingText" class="headingText">Développeuse Web  & mobile | Infographiste-UI Designer</h3>
							<div class="icon-sociaux">
								<a href="https://github.com/Mi-Seun" class="icon-presentation" target="_blank" rel="noopener">
									<i class="fa-brands fa-github"></i></a>
								<a href="https://www.behance.net/mi-sunjang" class="icon-presentation" target="_blank" rel="noopener">
									<i class="fa-brands fa-square-behance"></i></a>
								<a href="https://www.linkedin.com/in/misun-jang/" class="icon-presentation" target="_blank" rel="noopener">
									<i class="fa-brands fa-linkedin"></i></a>
								<a href="tel:33782130660" class="icon-presentation">
									<i class="fa-solid fa-phone"></i></a>
								<a href="mailto:misun.jang@free.fr" class="icon-presentation">
								<i class="fa-regular fa-envelope"></i></a>
							</div>
							<h6>
							Avec un parcours en développement web, design UI/UX et gestion d'entreprise, je suis une développeuse passionnée, 
							cherchant à allier créativité et compétences techniques. Mon expertise en développement web, design graphique 
							et gestion de projet agile me permet de créer des expériences numériques uniques, 
							en répondant aux besoins des utilisateurs et en contribuant au succès de votre entreprise.
							</h6>
							<!-- 
							<a href="#portfolio-section" class="common-btn">Découvrez mon travail</a>
							<a href="../pages/concept.php" target="_blank" class="common-btn">Concept du site web</a>
							<a href="../pages/codes.php" target="_blank" class="common-btn">Explications du Codes</a>
							-->
						</div>
						
				</div>
				<div class="row gx-0 ">
					<div class="col-md-4 col-xxl-7 ms-auto">
						<div id="root">
							<svg id="Metro_Map_Lines" class="map" data-name="Metro Map Lines" 
							xmlns="http://www.w3.org/2000/svg" viewBox="0 0 208.5 204.5"><defs>
								<style>
									.cls-1,.cls-2,.cls-3,.cls-4,.cls-5,.cls-6{fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3px;}
									.cls-1{stroke:#0aa848;}
									.cls-2{stroke:#fcd000;}
									.cls-3{stroke:#f49506;}
									.cls-4{stroke:#9fa5a4;}
									.cls-5{stroke:#1076c4;}
									.cls-6{stroke:#e72434;}
								</style>
								</defs>
								<title>metro-map-svg</title>
								<path id="green-line" class="line cls-1" d="M205,183l-14-14c-.7-1-2.77-.83-3.95-.57l-4.17,2.15a3.32,3.32,0,0,1-3.17-1l-8.07-8.79a5.51,5.51,0,0,0-4.06-1.79H153.34a4.37,4.37,0,0,1-4.37-4.33l.53-58.38a4.84,4.84,0,0,0-4.84-4.89h-3.19a4,4,0,0,1-4-4V85.5a4,4,0,0,1,4-4h6.73a8,8,0,0,0,7.36-4.84L157.14,73a6.64,6.64,0,0,1,.83-1L180.5,49.5" transform="translate(-27 -21)"/>
								<path id="yellow-line" class="line cls-2" d="M128,224V187c0-4.43-2.57-6.13-7-6,0,0-6,1.22-6-2V164c0-2.13,11-11,11-11,1.39-1.33,4.08-1,6-1h10c3,0,3-1.1,3-6V101c0-3.35.65-5.63-2.66-5.68h-1.72a6.83,6.83,0,0,1-6.81-6.83V84.65a7,7,0,0,1,7-7c3.39,0,6.77,0,6.94,0a6,6,0,0,0,2-.38l1.84-1.28,1.7-1.6" transform="translate(-27 -21)"/>
								<path id="orange-line" class="line cls-3" d="M28.5,123.5H72.4c5.1,0,11.6,1.5,11.6-3.5v-5.5c0-9,7.5-12,9.5-12h32c2.54,0,10,1,10,12v13c0,2.54,0,7,6,7h26a4.51,4.51,0,0,0,2.93-1.08l6.77-5.81a4.6,4.6,0,0,1,3-1.11h15.39a4.6,4.6,0,0,0,3.26-1.35L219.5,104.5" transform="translate(-27 -21)"/>
								<path id="silver-line" class="line cls-4" d="M30,104l22.17,22.17a2.84,2.84,0,0,0,2,.83H81a7,7,0,0,0,7-7l0-7.38c.15-2,2.64-5.42,5.75-5.66l30.22-.32c4.43,0,7.35,3.55,7.35,8l.1,15.83c0,4.18,4,7.56,8.16,7.56h29.79a4.35,4.35,0,0,0,2.89-1.1l6.31-5.61a4,4,0,0,1,2.91-1.3H234" transform="translate(-27 -21)"/>
								<path id="blue-line" class="line cls-5" d="M82,223v-8.58A6.42,6.42,0,0,1,88.42,208h32.33a3.25,3.25,0,0,0,3.25-3.25V190.88a4.88,4.88,0,0,0-4.88-4.88h-2.88a5.24,5.24,0,0,1-5.24-5.24V159.25a7.84,7.84,0,0,0-2.3-5.54L95,140a12.07,12.07,0,0,1-3.54-8.54v-17a4,4,0,0,1,4-4h27.93a3.57,3.57,0,0,1,3.57,3.57v14.84A13.09,13.09,0,0,0,140.09,142h30.26a4.7,4.7,0,0,0,2.94-1l7-5.57a6.4,6.4,0,0,1,4-1.4H234" transform="translate(-27 -21)"/>
								<path id="red-line" class="line cls-6" d="M137.5,22.5V54a6.2,6.2,0,0,0,1.69,4.26l27.74,28.59A5,5,0,0,1,168,88.65a5.22,5.22,0,0,1,.3,2.06c-.28,7.59.3,15.2.16,22.79a4.32,4.32,0,0,1-1,3,3.68,3.68,0,0,1-2,1c-11.33,0-26.67-.15-38,0-7.89.1-7.29-3.89-7.29-3.89L120,97.15c-.3-1.25-2-3.14-2.87-4.08L107.08,82.41a5.25,5.25,0,0,0-4-1.91H100.7c-2.69,0-5.27-3.08-7.15-5L52.5,34.5" transform="translate(-27 -21)"/>
							</svg>
						</div>
					</div>
				</div>
				</div>
			</div>
		</section>
		<!-- Presentation End -->


		<!-- Skills Start -->
		<section id="skills-section" class="contact-me position-relative overflow-hidden">
			<h2 class="title text-center">Compétences</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="skill-box position-relative">
							<div class="part-skill part1" onclick="scrollToSkill(1)">
								<img src="asset/images/map/world_map1.jpg" class="img-fluid" alt="skill of developer">
								<a  class="common-btn">Développeur web & mobile</a>
							</div>
							<div class="part-skill part2" onclick="scrollToSkill(2)">
								<img src="asset/images/map/map12.jpg" class="img-fluid" alt="skill of designer">
								<a href="#popUp-skill javascript:void(0)" class="common-btn">Infographiste - UI Designe</a>
							</div>
							<div class="part-skill part3" onclick="scrollToSkill(3)">
								<img src="asset/images/map/world_map2.jpg" class="img-fluid" alt="skill of management">
								<a href="#popUp-skill javascript:void(0)" class="common-btn">Gestion de projet Agile</a>
							</div>
							<div class="box-border"></div>
						</div>
					</div>
					
					<div class="col-md-6 align-self-center">
						<div id="popUp-skill javascript:void(0)" class="popUp-skill">
							<div class="text-skill part1">
								<h3>Développeur informatique</h3>
								<div class="detail-text-skill">
									<i class="fa-solid fa-u"></i>  Shell Unix<br>
									<i class="fa-solid fa-c"></i>  C<br>
									<i class="fa-brands fa-angular"></i>  Angular<br>
									<i>Ts</i>  TypeScript<br>
									<i class="fa-brands fa-js"></i>  JavaScript<br>
									<i class="fa-brands fa-unity"></i>  Three.js<br>
									<i class="fa-brands fa-symfony"></i>  Symfony5<br>
									<i class="fa-brands fa-php"></i>  php<br>
									<i class="fa-solid fa-database"></i>  SQL<br>
									<i class="fa-solid fa-server"></i>  mySql<br>
									<i class="fa-brands fa-html5"></i>  HTML5<br>
									<i class="fa-brands fa-css3-alt"></i>  CSS3<br>
									<i class="fa-brands fa-wordpress-simple"></i>  Wordpress<br>
								</div>
							</div>
							<div class="text-skill part2">
								<h3>Infographie - UI Design</h3>
								<div class="detail-text-skill">Illustrator<br>Photoshop<br>Indesign<br>Premier Pro<br>Figma</div>
							</div>
							<div class="text-skill part3">
								<h3>Gestion de projet Agile</h3>
								<div class="detail-text-skill">Scrum<br>Git</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Skills End -->


		<!-- Experiences Start -->
		<section id="experiences-section" class="experiences-section black-bg theme-dark position-relative">
			<h2 class="title text-center">Expériences</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div id="map"></div>
					</div>
					<div class="col-md-6">
						<div class="experience-box position-relative">
							<div class="list-experience">
								<div class="experience">
									<div class="text-experience part1">
										<h3>Informatique</h3>
										<h5>La piscine, Ecole 42 Lyon , Sept-Oct. 2024</h5>
										<p class="detail-text-experience">Numérique,<br>
											42 Lyon, Auvergne-Rhône-Alpes
										</p>
										<h5>Stage - La piscine discovery, Ecole 42 Lyon , Fév. 2024</h5>
										<p class="detail-text-experience">Numérique,<br>
											42 Lyon, Auvergne-Rhône-Alpes
										</p>
										<h5>Développeur web 2023</h5>
										<p class="detail-text-experience">Réalisation sites web,<br>
											Ice development, Lyon 7
										</p>
									</div>
									<div class="text-experience part2">
										<h3>Créativité</h3>
										<h5>Infographie-Design 2007-2013, 2022, 2023</h5>
										<p class="detail-text-experience">Design libre, logo, présentation de LinkedIn<br>
										The Happinessology Project-Cogethers, Lyon
										</p>
										<p class="detail-text-experience">Création de supports de communication papier & site Web, photographie,<br>
											Restaurants Minanée & Séoul to go, Lyon & Rennes
										</p>
										<h5>Art culinaire 2007-2013, 2022</h5>
										<p class="detail-text-experience">Création cuisine coréenne & japonaise fusion,<br>
											Restaurants Minanée, Sushido & Séoul to go, Lyon & Rennes
										</p>
										<h5>Décoration d'intérieur 2007-2013, 2022</h5>
										<p class="detail-text-experience">Décoration du restaurant <br>
											restaurant Minanée, Lyon & restaurant Séoul to go, Rennes</p>
									</div>
									<div class="text-experience part3">
										<h3>Management</h3>
										<h5>Restauration 2007-2019</h5>
										<p class="detail-text-experience">2007-2013 : Gérante de 2 restaurants, Minanée & Sushido, Lyon</p>
										<p class="detail-text-experience">2022 : Consulting management développement de restaurant, Séoul to go, Rennes</p>
										<h5>Événementiel</h5>
										<p class="detail-text-experience">Présidente de l’association des Lyonnais coréens, représentante européenne,
											organisatrice d’événements, Japan Touch, fêtes consulaires, mode, culture/langue, <br>
											Lyon
										</p>
										<h5>Réseaux 2011-2019</h5>
										<p class="detail-text-experience">Gérante d’entreprises internationales Kowiner</p>
									</div>
									<div class="text-experience part4"> <!-- Changed part3 to part4 for correct numbering -->
										<h3>Humanitaire</h3>
										<h5>Bénévole ONG caritative 2014-2019</h5>
										<p class="detail-text-experience">Chef d’équipe, Aide sociale, Cuisinière <br>
											Afrique du Sud, Londres, Séoul</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
			<!-- Experiences End -->


		<!-- Portfolio Start -->
		<section id="portfolio-section" class="portfolio-section white-bg position-relative overflow-hidden">
			<h2 class="title text-center">Portfolio</h2>
			<div class="container">
				<div class="row align-items-stretch overflow-hidden mb-5 gy-1 gy-md-0 gx-1 gx-md-3 gx-lg-4">
				<div class="col-md-9">
					<div class="row g-1 g-md-3 g-lg-4 overflow-hidden">
						<div class="col-8">
							<div class="portfolio-box portfolio-content pbox-left">
							<img src="asset/images/metro/metro.jpeg" class="img-fluid" alt="portfolio">
								<a href="pages/projet.php" class="common-btn" target="_blank" rel="noopener">
									<i class="fa-solid fa-computer-mouse"></i>description</a>
							</div>
						</div>
						<div class="col-4">
							<div class="portfolio-box portfolio-content pbox-right">
								<img src="asset/images/metro/metro7.jpeg" class="img-fluid" alt="portfolio">
									<a href="https://github.com/Mi-Seun" class="common-btn " target="_blank" rel="noopener">
										<i class="fa-brands fa-github"></i>ressources sur github</a>
									</div>
						</div>
						<div class="col-4">
							<div class="portfolio-box portfolio-content pbox-left">
							<img src="asset/images/metro/metro5.jpeg" class="img-fluid" alt="portfolio">
							<!-- 
							<a href="https://www.linkedin.com/in/misun-jang/" class="common-btn" target="_blank" rel="noopener">
								<i class="fa-brands fa-linkedin"></i>LinkedIn</a>
							-->
						</div>
						</div>
						<div class="col-8 overflow-hidden">
							<div class="portfolio-box portfolio-content">
							<img src="asset/images/metro/bus.jpeg" class="img-fluid bg-img" alt="portfolio">
								<div class="row align-items-center h-100">
									<div class="col-10 col-md-8 col-xxl-7 ms-auto">
								<a href="https://www.behance.net/mi-sunjang" class="common-btn " target="_blank" rel="noopener">
									<i class="fa-brands fa-square-behance"></i>ressoureces sur behance</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="portfolio-box portfolio-content big pbox-right">
						<img src="asset/images/metro/metro4.jpeg" class="img-fluid" alt="portfolio">
					</div>
				</div>
				</div>
			</div>
		</section>
		<!-- Portfolio End -->

		<!-- Formation Start -->
		<section id="trainings-section" class="trainings-section black-bg theme-dark position-relative overflow-hidden">
			<h2 class="title text-center">Formations</h2>
			<div class="container">
				<div class="row g-0 left-row">
				<div class="col-md-6">
					<div class="img-box">
						<img src="asset/images/photo/photo.jpg" class="img-fluid" alt="person">
					</div>
				</div>
				<div class="col-md-6">
					<div class="content border-end-0">
						<div id="part1" class="text-trainings part1">
							<h3>La piscine prog algorithme 2024</h3>
							<p class="detail text-trainings">42 Lyon, 69260 Charbonnières-les-bains</p>
							<h3>Formation de développeur Three.js 2024</h3>
							<p class="detail text-trainings">
								<a href="https://threejs-journey.com">Three.js Journey,</a> en ligne</p>
							<h3>Diplôme développeur web & web mobile 2023</h3>
							<p class="detail text-trainings">HumanBooster, Lyon / Stage, Ice developement, Lyon</p>
							<h3> Diplôme infographiste-designer 2022</h3>
							<p class="detail text-trainings"> Online Formapro, Lyon / Stage, Cogethers, Lyon</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row g-0 reverse-row right-row">
					<div class="col-md-6">
						<div class="img-box">
							<img src="asset/images/photo/asso.jpg" class="img-fluid" alt="person">
							<a href="#part2 javascript:void(0)" class="common-btn">Formation developpement & design</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="content border-start-0">
							<div id="part2" class="text-trainings part1">
								<h3>Diplôme de français professionnel DELF B1 & B2 2021</h3>
								<p class="detail text-trainings">Côté Projet & ACFAL / Stage assistante administrative, JPFA, Lyon</p>
								<h3> Arts plastiques 2021</h3>
								<p class="detail text-trainings">Cours d’arts plastiques, Quartier Vitalité, Lyon</p>
								<h3>Diplôme art culinaire traditionnel japonais 2007</h3>
								<p class="detail text-trainings">Seoul Culinary Institute</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>  
		<!-- Formation endd -->

		<!-- Recommandation Start -->
		<section id="recommendations-section" class="recommendations-section white-bg position-relative overflow-hidden">
			<h2 class="title text-center">Recommandations</h2>
			<div class="container">
				<div class="row g-0 left-row">
				<div class="col-md-7">
					<div class="content border-end-0">
					<h3>Guy COURTOIS</h3>
					<h5>CoGethers-Author, serial entrepreneur & investor</h5><br />
					<p>"Le travail de Mi-Sun a été à la hauteur de mon exigence. Au-delà de ses compétences techniques, MiSun a fait preuve de ponctualité, de rigueur, de disponibilité, d’autonomie et d'intérêt pour les tâches
						qui lui ont été confiées. Mi-Sun a également démontré des qualités humaines, notamment d’esprit
						d’équipe en aidant ses collègues sur leurs projets respectifs. Son désir de partage de connaissances a
						été un réel atout pour notre équipe."</p>
						<a href="javascript:void(0)" class="common-btn" id="openPdfBtn1">Lire la lettre recommandation</a>
					</div>
				</div>
				<div class="col-md-5">
					<div class="img-box">
					</div>
				</div>
				</div>
				<div class="row g-0 reverse-row right-row">
				<div class="col-md-5">
					<div class="img-box">
					</div>
				</div>
				<div class="col-md-7">
					<div class="content border-start-0">
					<h3>Denise NOVEL</h3>
					<h5>Directrice, centre de formation JPFA</h5><br />
					<p>"Son travail a été tout à fait sérieux et satisfaisant. Mme JANG est trés agréable, dynamique et enthousiaste. Elle est pleine de ressoures et maîtrise très bien l'outil informatique et la langue française..."</p>
						<a href="javascript:void(0)" class="common-btn" id="openPdfBtn2">Lire la lettre recommandation</a>
					</div>
				</div>
				</div>
			</div>
		</section>
		<!-- Randationecomm end -->
		
		<!-- Motivation Start -->
		<section id="motivations-section" class="motivations-section white-bg position-relative overflow-hidden">
			<h2 class="title text-center">Motivations</h2>
			<div class="container">
				<div class="row g-0 left-row">
				<div class="col-md-12">
					<div class="content border-end-0">
					<h3>Pourquoi travailler avec Mi-Sun?</h3>
					<p>"Originaire de Corée du Sud et installée en France depuis plusieurs années, 
						j'ai une riche expérience professionnelle. Passionnée par la cuisine, 
						j'ai évolué vers la gestion de restaurants et l'organisation d'événements 
						pour des associations et des ONG, notamment à Londres.<br><br> 
						Ces expériences m'ont fait comprendre l'importance de la communication, notamment sur le Web. 
						J'ai acquis mes compétences de manière autodidacte et grâce 
						à des formations professionnelles en infographie, design Print et Web, ainsi qu'en développement Web.<br><br> 
						Je suis motivée pour continuer à apprendre et à explorer de nouveaux domaines, appréciant le travail d'équipe 
						et faisant preuve de diligence, de participation et d'adaptabilité..<br><br>
						En entreprise, je suis toujours respectueuse des délais, persévérante et motivée, m'intégrant aisément 
						à un environnement de travail agréable."</p>
					</div>
				</div>
				</div>
			</div>
		</section>
		<!-- Motivation End -->

		<!-- Langues & loisirs Start -->
		<section id="langues-section" class="langues-section black-bg theme-dark position-relative overflow-hidden">
			<h2 class="title text-center">Langues & Loisirs</h2>
			<div class="container">
				<div class="row g-0 left-row">
					<div class="col-md-6">
					<div class="title-hobby">Loisirs</div>
					<div class="detail-hobby">
						<p class="nav-link" >Voyage, Sport en équipe, Cuisine, Plantes comestibles, Humanitaire, Cinéma</p>
						<p class="nav-link" >Arts plastiques, Décoration d’intérieur, Design plantaie</p>
					</div>
					</div>
					<div class="langue-info col-md-6">
						<div class="langue-border"></div>
						<h3>Langues</h3>
						<div class="nav-item-langue">
							<img src="asset/images/icon/icon_france.png" class="img-fluid" alt="Drapeau français">
							<p>Français (DELF B2)</p>
						</div>
						<div class="nav-item-langue">
							<img src="asset/images/icon/icon_uk.png" class="img-fluid" alt="Drapeau anglais">
							<p>English (B1)</p>
						</div>
						<div class="nav-item-langue">
							<img src="asset/images/icon/icon_korea.png" class="img-fluid" alt="Drapeau coréen">
							<p>Coréen (Natif)</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Langues & loisirs End -->


		<!-- Contact Start -->
		<section id="contact-section" class="contact-me position-relative overflow-hidden">
			<h2 class="title text-center">Contact</h2>
				<div class="container">
					<div class="contact-info">
						<ul class="nav-contact flex-column">
							<li class="nav-contact-item">
								<a class="nav-contact-link" href="mailto:misun.jang@free.fr">
								<i class="fa-regular fa-envelope"></i>   misun.jang<i class="fa-solid fa-at"></i>free.fr</a>
							</li>
							<li class="nav-contact-item">
								<img src="" class="img-fluid" alt="">
								<a class="nav-contact-link" href="https://www.linkedin.com/in/misun-jang/">
								<i class="fa-brands fa-linkedin"></i>  LinkedIn</a> 
								</li>
							<li class="nav-contact-item">
								<img src="" class="img-fluid" alt="">
								<a class="nav-contact-link" href="tel:33782130660">
									<i class="fa-solid fa-phone"></i>   07 82 13 06 60</a> 
							</li>
							<li class="nav-contact-item">
								<img src="" class="img-fluid" alt="">
								<a class="nav-contact-link" href="https://www.google.com/maps/place/1er+Arrondissement,+Lyon/@45.7651635,4.8180472,15z/data=!4m6!3m5!1s0x47f4eb03e81f8be3:0x508ab2ae4c218c0!8m2!3d45.7698776!4d4.8293544!16s%2Fm%2F0642cg1?entry=ttu">
									<i class="fa-solid fa-map-location-dot"></i>   69001 Lyon, France</a>
							</li>
						</ul>
					</div>
				</div>
		</section>
		<!-- Contact End -->

		<!-- Scroll up -->
		<div onclick="topFunction()" id="myBtn" title="Go to top">
			<i class="fa-solid fa-circle-chevron-up"></i>
		</div>
	</main>

	<?php	
			include("commun/footer.html");
	?>
<script src="https://kit.fontawesome.com/74d3ecc422.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="script/main.js"></script>
</body>

</html>
