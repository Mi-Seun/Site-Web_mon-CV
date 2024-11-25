<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Projets</title>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="../asset/style/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-rmI4EfT2U1OJXXKuMKPH6s84TaQp2LXgjzhpBVT5fryCn1xAshdv7T/LnVzzp+5qkGRnhLeYABuphMBrBnQgHQ=="
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
				<a class="dropdown-item" href="projet.php">Academique - Projet Angular & Symfony</a>
                    <a class="dropdown-item" href="projet.php">stage - Projets WordPress</a>
                </div>
            </div>

            <div class="dropdown">
                <a href="#" class="common-btn dropdown-toggle" id="designDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Design UI & Graphique
                </a>
                <div class="dropdown-menu" aria-labelledby="designDropdown">
                    <a class="dropdown-item" href="projet.php">Academique & stage - Infographie Web & printe</a>
                    <a class="dropdown-item" href="projet.php">Academique - Production video</a>
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




		<div class="container">

		<div class="container">
			<!-- GeoJSON Data Section -->
			<section id="contact-section" class="contact-me position-relative overflow-hidden">
			<h2 class="title text-center">Outils utilisés pour ce site</h2>



					<div class="title-outil mt-5">Languages :
						<p> HTML, JavaScript, PHP, GeoJson, npm, webpack, CSS, Bootstrap, SVG</p>
					</div>
					<div class="title-outil">Design : 
						<p>Illustrator (<a href="../asset/images/logo/mon_logo_metro.png">Logo</a>, 
						<a href="../asset/images/icon/all_pointeurs.png">Pointeurs de map</a>, 
						<a href="../asset/images/icon/icon_france.png">Icônes</a>)</p>
					</div>
					<div class="title-outil">Bibliothèque : 
						<p><a href="https://leafletjs.com" class="texte-outil">Leaflet</a></p>
					</div>
					<div class="title-outil">Map : 
						<p>CartoDB, OSM, Esri, LyonMap</p>
					</div>
			</div>

				</section><br>
			</section>
		</div>


		
		<!-- Scroll up -->
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
