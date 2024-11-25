<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de Projets</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
    integrity="sha512-rmI4EfT2U1OJXXKuMKPH6s84TaQp2LXgjzhpBVT5fryCn1xAshdv7T/LnVzzp+5qkGRnhLeYABuphMBrBnQgHQ=="
    crossorigin="anonymous"/>
</head>

<body>
    <?php
        include("../commun/header.html");
    ?>

    <main>
		
        <!-- Boutons de navigation pour différents projets -->
        <div class="btn-codes d-flex align-items-center">
            <div class="dropdown mr-3">
                <a href="#" class="common-btn dropdown-toggle" id="webDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Développeur Web
                </a>
                <div class="dropdown-menu text-center" aria-labelledby="webDropdown">
				<a class="dropdown-item" href="#project-nft">Academique - Projet Angular & Symfony</a>
                    <a class="dropdown-item" href="#wordpress-projects">stage - Projets WordPress</a>
                </div>
            </div>

            <div class="dropdown">
                <a href="#" class="common-btn dropdown-toggle" id="designDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Design UI & Graphique
                </a>
                <div class="dropdown-menu" aria-labelledby="designDropdown">
                    <a class="dropdown-item" href="#logo-design">Academique & stage - Infographie Web & printe</a>
                    <a class="dropdown-item" href="#video-production">Academique - Production video</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="#" class="common-btn dropdown-toggle" id="designDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Création de ce site
                </a>
                <div class="dropdown-menu" aria-labelledby="designDropdown">
                    <a class="dropdown-item" href="concept.php">Concepts</a>
                    <a class="dropdown-item" href="method.php">Outils utilisés pour ce site</a>
                    <a class="dropdown-item" href="codes.php">explications du code</a>
                </div>
            </div>
        </div>


        <!-- Section d'introduction -->
        <div class="container">
			<section id="contact-section" class="contact-me position-relative overflow-hidden">
                <h2 class="title text-center">Portfolio de Projets</h2>

                <!-- Projet NFT avec Angular & Symfony -->
                <section id="project-nft" class="code-section">
                    <h1 class="mt-5 mb-2">1. Projet NFT : Angular & Symfony</h1>
                    <p>Ce projet NFT a été développé durant ma formation en développement web, 
                        en utilisant Angular pour le front-end et Symfony pour le back-end, afin de créer une application sécurisée, performante 
                        et conviviale.</p><br>

                    <h3>Compétences et Technologies Clés :</h3>
                    <ul>
                        <li><strong>Back-End :</strong> Symfony, PHP, MySQL pour une architecture robuste et sécurisée.</li>
                        <li><strong>Front-End :</strong> Angular, HTML5, CSS3, JavaScript pour une interface dynamique et réactive.</li>
                        <li><strong>Fonctionnalités Principales :</strong> Système d'authentification sécurisé et gestion des NFT.</li>
                        <li><strong>Optimisations :</strong> Code maintenable et amélioration des performances pour les appareils mobiles et de bureau.</li>
                    </ul>

                    <h3 class="mt-5">Développement Back-End :</h3>
                    <p>Structuration d'un back-end évolutif et sécurisé avec Symfony, optimisant la gestion des données et les temps de réponse.</p>
                    <div class="text-center mt-3 mb-3">
                        <iframe src="https://misun-jang.alwaysdata.net/asset/images/pdf/developerWeb_backend.pdf"></iframe>
                    </div>

                    <h3>Développement Front-End :</h3>
                    <p>Création d'une interface utilisateur moderne et fluide avec Angular, en mettant l'accent sur l'optimisation SEO et l'accessibilité.</p>
                    <div class="text-center mt-3">
                        <iframe src="https://misun-jang.alwaysdata.net/asset/images/pdf/developerWeb_frontend.pdf"></iframe>
                    </div>

                    <h3 class="mt-5">Défis & Solutions :</h3>
                    <ul>
                        <li><strong>Intégration en Temps Réel :</strong> Mise en œuvre de WebSockets pour des mises à jour dynamiques 
                        et JWT pour des transactions sécurisées.</li>
                        <li><strong>Adaptabilité Mobile :</strong> Application de techniques de design réactif et de stratégies de 
                        mise en cache pour de meilleures performances.</li>
                    </ul>

                    <a href="https://github.com/Mi-Seun" class="common-btn" target="_blank" rel="noopener">
                        <i class="fab fa-github"></i> Voir le Code sur GitHub
                    </a>
                </section>

                <!-- Section Projets WordPress -->
                <section id="wordpress-projects" class="code-section">
                    <h1 class="mt-5 mb-2">2. Projets WordPress</h1>
                    <p>Durant mon stage, j'ai développé plusieurs projets WordPress 
                        en me concentrant sur la performance, l'UX/UI, et l'optimisation SEO.</p><br>

                    <!-- Projet Mecaforest -->
                    <article class="project">
                        <h3>Refonte de Mecaforest : <a href="https://www.mecaforest.com/" target="_blank">Mecaforest</a></h3>
                        <p><strong>Objectif :</strong> Optimiser un site e-commerce pour une meilleure expérience utilisateur et une augmentation des ventes.</p>
                        <ul>
                            <li>Boutique WooCommerce personnalisée avec des filtres avancés pour une meilleure expérience utilisateur.</li>
                            <li>Amélioration de la vitesse de chargement et du SEO pour une meilleure visibilité.</li>
                        </ul>
                        <p><strong>Technologies :</strong> WordPress, WooCommerce, PHP, CSS, MySQL.</p>

                        <a href="https://www.mecaforest.com/" target="_blank" class="common-btn">
                            <i class="fa-solid fa-computer-mouse"></i>Visiter le Site</a>

                        <div class="text-center mt-3 mb-3">
                            <iframe src="https://misun-jang.alwaysdata.net/asset/images/pdf/developerWeb_wordpress.pdf"></iframe>
                        </div>
                    </article>

                    <!-- Projet Institut Paul Bouchet -->
                    <article class="project mt-5">
                        <h3>Contribution à l'Institut Paul Bouchet : <a href="https://www.institutpaulbouchet.org" target="_blank">Institut Paul Bouchet</a></h3>
                        <p><strong>Objectif :</strong> Améliorer la navigation du site, la performance, et l'intégration du contenu.</p>
                        <ul>
                            <li>UX simplifiée pour une navigation plus facile et des temps de chargement plus rapides.</li>
                            <li>Mises à jour du contenu pour une meilleure accessibilité de l'information.</li>
                        </ul>
                        <p><strong>Thème :</strong> Ona</p>
                        <p><strong>Technologies :</strong> WordPress, PHP, CSS.</p>

                        <a href="https://www.institutpaulbouchet.org" target="_blank" class="common-btn">
                            <i class="fa-solid fa-computer-mouse"></i>Visiter le Site</a>
                    </article>

                    <!-- Projet Centre Prestance -->
                    <article class="project mt-5">
                        <h3>Optimisation du Site : <a href="https://www.centreprestance.fr" target="_blank">Centre Prestance</a></h3>
                        <p><strong>Objectif :</strong> Mise à jour rapide pour améliorer la convivialité et la performance.</p>
                        <ul>
                            <li>Correction de bugs, ajustements UX/UI, et optimisation des temps de chargement.</li>
                        </ul>
                        <p><strong>Technologies :</strong> WordPress, CSS, JavaScript.</p>

                        <a href="https://www.centreprestance.fr" target="_blank" class="common-btn">
                            <i class="fa-solid fa-computer-mouse"></i>Visiter le Site</a>
                    </article>
                </section>

				<!-- Section Design UI & Graphique -->
				<section id="logo-design" class="code-section">
					<h1 class="mt-5 mb-2">3. Design UI & Graphique</h1>
					<h3>Infographie & Mise en Page</h3>
					<p>Création de visuels percutants pour logos, affiches, et documents. Chaque design combine esthétisme et efficacité pour transmettre un message clair et mémorable.</p>
					<p>Mon approche axée sur le client garantit des visuels qui renforcent la marque et atteignent les objectifs marketing.</p>
					<p><strong>Outils :</strong> Adobe Illustrator, Photoshop, InDesign, et Premiere Pro.</p>
					
					<a href="https://www.behance.net/mi-sunjang" class="common-btn" target="_blank" rel="noopener">
						Voir les designs sur Behance</a>
				</section>

				<!-- Section Production Vidéo -->
				<section id="video-production" class="code-section">
					<h3>Production Vidéo</h3>
					<p>Production de vidéos impactantes pour maximiser l'impact marketing. Montage soigné pour capter l’attention avec une combinaison stratégique de musique et d'images.</p>
					<ul>
						<li>Tournage et montage rapide d'une minute en un jour, prouvant efficacité et qualité.</li>
						<li>Créativité avec un équipement minimal pour un rendu professionnel, même avec des contraintes.</li>
					</ul>

					<!-- 
					<div class="text-center mt-3">
						<video controls width="80%">
							<source src="../asset/video/montage_video_sur_onlineformapro.mp4" type="video/mp4">
						</video>
					</div> 
					-->

				</section>
		</div>

		<div onclick="topFunction()" id="myBtn" title="Go to top">
			<i class="fa-solid fa-circle-chevron-up"></i>
		</div>
	</main>

	<?php	
			include("../commun/footer.html");
	?>


<script src="https://kit.fontawesome.com/74d3ecc422.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="../script/main.js"></script>
</body>

</html>
