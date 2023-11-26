<!DOCTYPE html>
<html lang="fr">

<head>
	<title>clone netflix</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="../css/bienvenue.css" type="text/css" />
	<link rel="icon" type="image/png" href="../assets/netflix_icon.png" />
	<script src="https://kit.fontawesome.com/65211b898e.js" crossorigin="anonymous"></script>
</head>

<body>
	<!-- Barre de navigation -->
	<nav id="nav" class="nav">
		<div class="gauche">
			<img src="../images/logo/logo_netflix.png" alt="" height="40" />
			<div class="onglets">
				<p>Acceuil</p>
				<p>Séries TV</p>
				<p>Films</p>
				<p>Programmes originaux</p>
				<p>Ajouts récents</p>
				<p>Ma liste</p>
			</div>
		</div>
		<div class="droite">
			<?php // Vérifier si l'utilisateur est connecté
			session_start();
			if (isset($_SESSION['user_id'])) {
				$userId = $_SESSION['user_id'];
				$name = $_SESSION['user_name'];
				echo "Bienvenue, " . $name;

				// Formulaire de déconnexion
				echo '<form method="post" action="logout.php">';
				echo '<input type="submit" value="Se déconnecter" />';
				echo '</form>';
			} else {
				echo "Veuillez vous connecter pour accéder à cette page.";
				header('location: ../index.php');
				exit();
			}

			?>
			<p><i class="fa-solid fa-magnifying-glass"></i></p>
			<p><i class="fa-regular fa-bell"></i></p>
			<p>Mon compte</p>
		</div>
	</nav>
	<!-- Fin de la barre de navigation -->



	<!-- header -->
	<header class="banner">
		<div class="banner__contents">
			<h1 class="banner__title">La casa de papel</h1>
			<div class="banner__buttons">
				<button class="banner__button">Play</button>
				<button class="banner__button">My List</button>
			</div>
			<h1 class="banner__description">
				To carry out the biggest heist in history, a mysterious man called The Professor recruits
				a band of eight robbers who have a single characteristic: n...
			</h1>
		</div>
		<div class="banner--fadeBottom"></div>
	</header>

	<!-- Netflix Originals -->
	<div class="row">
		<h2>NETFLIX ORIGINALS</h2>
		<div class="row__posters slide1">
			<?php
			for ($i = 0; $i < 15; $i++) {
				echo '<img class="row__poster row__posterLarge" src="../images/films/under_the_skin.webp" alt="" />';
			}
			?>


		</div>
		<i class="fa-solid fa-angle-left"></i>
		<i class="fa-solid fa-angle-right"></i>
	</div>

	<!-- Trending Now -->
	<div class="row">
		<h2>Trending Now</h2>
		<div class="row__posters new slide2">
			<?php
			for ($i = 0; $i < 15; $i++) {
				echo '<img class="row__poster new" src="../images/films/amélie.jpg" alt="" />';
			}
			?>


		</div>
		<i class="fa-solid fa-angle-left"></i>
		<i class="fa-solid fa-angle-right"></i>
	</div>

	<!-- Top Rated -->
	<div class="row">
		<h2>Top Rated</h2>
		<div class="row__posters slide3">
			<?php
			for ($i = 0; $i < 15; $i++) {
				echo '<img class="row__poster new" src="../images/films/barry_lyndon.jpg" alt="" />';
			}
			?>




		</div>
		<i class="fa-solid fa-angle-left"></i>
		<i class="fa-solid fa-angle-right"></i>
	</div>

	<!-- Action Movies -->
	<div class="row">
		<h2>Action Movies</h2>
		<div class="row__posters slide4">
			<?php
			for ($i = 0; $i < 15; $i++) {
				echo '<img class="row__poster new" src="../images/films/chihiro.png" alt="" />';
			}
			?>



		</div>
		<i class="fa-solid fa-angle-left"></i>
		<i class="fa-solid fa-angle-right"></i>
	</div>

	<!-- Comedy Movies -->
	<div class="row">
		<h2>Comedy Movies</h2>
		<div class="row__posters slide5">
			<?php
			for ($i = 0; $i < 15; $i++) {
				echo '<img class="row__poster new" src="../images/films/coeur_de_pierre.jpg" alt="" />';
			}
			?>
		</div>
		<i class="fa-solid fa-angle-left"></i>
		<i class="fa-solid fa-angle-right"></i>
	</div>

	<!-- Horror Movies -->
	<div class="row">
		<h2>Horror Movies</h2>
		<div class="row__posters slide6">
			<?php
			for ($i = 0; $i < 15; $i++) {
				echo '<img class="row__poster new" src="../images/films/the_blob.jpg" alt="" />';
			}
			?>
		</div>
		<i class="fa-solid fa-angle-left"></i>
		<i class="fa-solid fa-angle-right"></i>
	</div>

	<!-- Romance Movies -->
	<div class="row">
		<h2>Romance Movies</h2>
		<div class="row__posters slide7">
			<?php
			for ($i = 0; $i < 15; $i++) {
				echo '<img class="row__poster new" src="../images/films/the_mist.jpg" alt="" />';
			}
			?>


		</div>
		<i class="fa-solid fa-angle-left"></i>
		<i class="fa-solid fa-angle-right"></i>
	</div>

	<!-- Documentaries -->
	<div class="row">
		<h2>Documentaries</h2>
		<div class="row__posters slide8">
			<?php
			for ($i = 0; $i < 15; $i++) {
				echo '<img class="row__poster new" src="../images/films/volver.jpg" alt="" />';
			}
			?>


		</div>
		<i class="fa-solid fa-angle-left"></i>
		<i class="fa-solid fa-angle-right"></i>
	</div>

	<!-- Pied de page -->
	<footer>
		<h5>Des questions ? Appelez le 0805-220-512</h5>
		<div class="colonnes">
			<div class="colonne">
				<p>FAQ</p>
				<p>Relations Investisseurs</p>
				<p>Modes de lecture</p>
				<p>Mentions légales</p>
				<p>Programmes originaux Netflix</p>
			</div>
			<div class="colonne">
				<p>Centre d'aide</p>
				<p>Relations Investisseurs</p>
				<p>Modes de lecture</p>
				<p>Mentions légales</p>
				<p>Programmes originaux Netflix</p>
			</div>
			<div class="colonne">
				<p>FAQ</p>
				<p>Recrutement</p>
				<p>Conditions d'utilisation</p>
				<p>Nous contacter</p>
			</div>
			<div class="colonne">
				<p>Compte</p>
				<p>Utiliser des cartes cadeaux</p>
				<p>Confidentialité</p>
				<p>Test de vitesse</p>
			</div>
		</div>
		<p>Netflix, France</p>
	</footer>
	<!-- Fin du pied de page -->
	<script src="../js/bienvenue.js"></script>
</body>

</html>