

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>clone netflix</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../css/bienvenue.css" type="text/css" />
	    <link rel="icon" type="image/png" href="../assets/netflix_icon.png"/>
		<script
			src="https://kit.fontawesome.com/65211b898e.js"
			crossorigin="anonymous"
		></script>
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
			  <img class="row__poster row__posterLarge" src="../images/tendances/under_the_skin.webp" alt="" />
			  <img class="row__poster row__posterLarge" src="../images/tendances/apocalyptico.jpg" alt="" />
			  <img class="row__poster row__posterLarge" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
			  <img class="row__poster row__posterLarge" src="../images/tendances/Conan.jpg" alt="" />
			  <img class="row__poster row__posterLarge" src="../images/tendances/her.webp" alt="" />
			  <img class="row__poster row__posterLarge" src="../images/tendances/knifes_out.jpg" alt="" />
			  <img class="row__poster row__posterLarge" src="../images/tendances/big_fish.jpg" alt="" />
			  <img class="row__poster row__posterLarge" src="../images/tendances/la_planete_des_singes.jpg" alt="" />
			  <img class="row__poster row__posterLarge" src="../images/tendances/volver.jpg" alt="" />
			  <img class="row__poster row__posterLarge" src="../images/tendances/Les_Enfants_du_marais.jpg" alt="" />
			  <img class="row__poster row__posterLarge" src="../images/tendances/lotr.jpg" alt="" />
			  <img class="row__poster row__posterLarge" src="../images/tendances/midnight_in_the_garden_of_good_and_evil.webp" alt="" />
			  <img class="row__poster row__posterLarge" src="../images/tendances/shutter_island.jpg" alt="" />
			  <img class="row__poster row__posterLarge" src="../images/tendances/sw_4.png" alt="" />
			  <img class="row__poster row__posterLarge" src="../images/tendances/stand_by_me.jpg" alt="" />
			  <img class="row__poster row__posterLarge" src="../images/tendances/stargate.jpg" alt="" />
			</div>
			<i class="fa-solid fa-angle-left"></i>
			<i class="fa-solid fa-angle-right"></i>
		  </div>
	  
		  <!-- Trending Now -->
		  <div class="row">
			<h2>Trending Now</h2>
			<div class="row__posters new slide2">
				<img class="row__poster new" src="../images/comedie/amélie.jpg" alt="" />
				<img class="row__poster new" src="../images/comedie/i_origins.jpg" alt="" />
				<img class="row__poster new" src="../images/comedie/empire_du_soleil.webp" alt="" />
				<img class="row__poster new" src="../images/comedie/forest_gump.png" alt="" />
				<img class="row__poster new" src="../images/comedie/pink_floyd_the_wall.jpg" alt="" />
				<img class="row__poster new" src="../images/comedie/intouchable.png" alt="" />
				<img class="row__poster new" src="../images/comedie/le_grand_bain.png" alt="" />
				<img class="row__poster new" src="../images/comedie/le_vieux_fusil.jpg" alt="" />
				<img class="row__poster new" src="../images/comedie/like_father.jpg" alt="" />
				<img class="row__poster new" src="../images/comedie/ninja_kid.jpg" alt="" />
				<img class="row__poster new" src="../images/comedie/oss_117_1.png" alt="" />
				<img class="row__poster new" src="../images/comedie/oss_117_2.jpg" alt="" />
				<img class="row__poster new" src="../images/comedie/problemos.jpg" alt="" />
				<img class="row__poster new" src="../images/comedie/step_brother.jpg" alt="" />
				<img class="row__poster new" src="../images/comedie/clerks.jpg" alt="" />
				<img class="row__poster new" src="../images/comedie/la_folie_des_grandeurs.jpg" alt="" />
			</div>
			<i class="fa-solid fa-angle-left"></i>
			<i class="fa-solid fa-angle-right"></i>
		  </div>
	  
		  <!-- Top Rated -->
		  <div class="row">
			<h2>Top Rated</h2>
			<div class="row__posters slide3">
				<img class="row__poster new" src="../images/sf/2001_a_space_odyssey.jpg" alt="" />
				<img class="row__poster new" src="../images/sf/avatar.jpg" alt="" />
				<img class="row__poster new" src="../images/sf/blade_runner.jpg" alt="" />
				<img class="row__poster new" src="../images/sf/hollow_man.jpg" alt="" />
				<img class="row__poster new" src="../images/sf/i_am_a_legend.jpg" alt="" />
				<img class="row__poster new" src="../images/sf/interstellar.png" alt="" />
				<img class="row__poster new" src="../images/sf/l_effet_papillon.png" alt="" />
				<img class="row__poster new" src="../images/sf/l_homme_bicentenarie.jpg" alt="" />
				<img class="row__poster new" src="../images/sf/l_île_du_docteur_moreau.jpg" alt="" />
				<img class="row__poster new" src="../images/sf/la_machine_a_explorer_le_temps.jpg" alt="" />
				<img class="row__poster new" src="../images/sf/la_planete_des_singes.jpg" alt="" />
				<img class="row__poster new" src="../images/sf/matrix.png" alt="" />
				<img class="row__poster new" src="../images/sf/men_in_black.jpg" alt="" />
				<img class="row__poster new" src="../images/sf/stargate.jpg" alt="" />
				<img class="row__poster new" src="../images/sf/starship_troopers.jpg" alt="" />
				<img class="row__poster new" src="../images/sf/the_fly.jpg" alt="" />
				<img class="row__poster new" src="../images/sf/the_mist.jpg" alt="" />
				<img class="row__poster new" src="../images/sf/total_recall.jpg" alt="" />
			

			</div>
			<i class="fa-solid fa-angle-left"></i>
			<i class="fa-solid fa-angle-right"></i>
		  </div>
	  
		  <!-- Action Movies -->
		  <div class="row">
			<h2>Action Movies</h2>
			<div class="row__posters slide4">
				<img class="row__poster new" src="../images/fantastique/asterix_et_cleo.jpg" alt="" />
				<img class="row__poster new" src="../images/fantastique/Beetlejuice.jpg" alt="" />
				<img class="row__poster new" src="../images/fantastique/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/fantastique/Conan.jpg" alt="" />
				<img class="row__poster new" src="../images/fantastique/D&D.jpg" alt="" />
				<img class="row__poster new" src="../images/fantastique/dracula.jpg" alt="" />
				<img class="row__poster new" src="../images/fantastique/Highlander.jpg" alt="" />
				<img class="row__poster new" src="../images/fantastique/la_ligne_verte.jpg" alt="" />
				<img class="row__poster new" src="../images/fantastique/La_Momie.jpg" alt="" />
				<img class="row__poster new" src="../images/fantastique/le_choc_des_titans.jpg" alt="" />
				<img class="row__poster new" src="../images/fantastique/Le_roi_scorpion.jpg" alt="" />
				<img class="row__poster new" src="../images/fantastique/legend.jpg" alt="" />
				<img class="row__poster new" src="../images/fantastique/princess_bride.jpg" alt="" />
				<img class="row__poster new" src="../images/fantastique/the_hill_have_eyes.jpg" alt="" />
				<img class="row__poster new" src="../images/fantastique/the_man_from_earth.jpg" alt="" />
			</div>
			<i class="fa-solid fa-angle-left"></i>
			<i class="fa-solid fa-angle-right"></i>
		  </div>
	  
		  <!-- Comedy Movies -->
		  <div class="row">
			<h2>Comedy Movies</h2>
			<div class="row__posters slide5">
				<img class="row__poster new" src="../images/cartoon/aladin1.webp" alt="" />
				<img class="row__poster new" src="../images/cartoon/asterix.jpg" alt="" />
				<img class="row__poster new" src="../images/cartoon/bambi_1.jpg" alt="" />
				<img class="row__poster new" src="../images/cartoon/chateau.jpg" alt="" />
				<img class="row__poster new" src="../images/cartoon/chihiro.png" alt="" />
				<img class="row__poster new" src="../images/cartoon/dino.png" alt="" />
				<img class="row__poster new" src="../images/cartoon/hotel_transylvania.jpg" alt="" />
				<img class="row__poster new" src="../images/cartoon/jhin_roh.jpg" alt="" />
				<img class="row__poster new" src="../images/cartoon/mononoke.jpg" alt="" />
				<img class="row__poster new" src="../images/cartoon/perfect_blue.jpg" alt="" />
				<img class="row__poster new" src="../images/cartoon/pocahontas.jpg" alt="" />
				<img class="row__poster new" src="../images/cartoon/porco_rosso.png" alt="" />
				<img class="row__poster new" src="../images/cartoon/ronald.jpg" alt="" />
				<img class="row__poster new" src="../images/cartoon/souris.jpg" alt="" />
				<img class="row__poster new" src="../images/cartoon/the_simpsons.jpg" alt="" />
			</div>
			<i class="fa-solid fa-angle-left"></i>
			<i class="fa-solid fa-angle-right"></i>
		  </div>
	  
		  <!-- Horror Movies -->
		  <div class="row">
			<h2>Horror Movies</h2>
			<div class="row__posters slide6">
				<img class="row__poster new" src="../images/horreur/alien_1.jpg" alt="" />
				<img class="row__poster new" src="../images/horreur/apocalyptico.jpg" alt="" />
				<img class="row__poster new" src="../images/horreur/chromosomes_3.jpg" alt="" />
				<img class="row__poster new" src="../images/horreur/elephant_man.jpg" alt="" />
				<img class="row__poster new" src="../images/horreur/ghost_of_mars.jpg" alt="" />
				<img class="row__poster new" src="../images/horreur/hannibal.png" alt="" />
				<img class="row__poster new" src="../images/horreur/la_peau_sur_les_os.jpg" alt="" />
				<img class="row__poster new" src="../images/horreur/land_of_the_dead.jpg" alt="" />
				<img class="row__poster new" src="../images/horreur/loup_paris.jpg" alt="" />
				<img class="row__poster new" src="../images/horreur/planete_hurlante.jpg" alt="" />
				<img class="row__poster new" src="../images/horreur/simetierre.jpg" alt="" />
				<img class="row__poster new" src="../images/horreur/the_blob.jpg" alt="" />
				<img class="row__poster new" src="../images/horreur/the_descent.jpg" alt="" />
				<img class="row__poster new" src="../images/horreur/vampires.jpg" alt="" />
			</div>
			<i class="fa-solid fa-angle-left"></i>
			<i class="fa-solid fa-angle-right"></i>
		  </div>
	  
		  <!-- Romance Movies -->
		  <div class="row">
			<h2>Romance Movies</h2>
			<div class="row__posters slide7">
				<img class="row__poster new" src="../images/historique/aguirre_la_colère_de_dieu.jpg" alt="" />
				<img class="row__poster new" src="../images/historique/apocalyptico.jpg" alt="" />
				<img class="row__poster new" src="../images/historique/après_la_pluie.jpg" alt="" />
				<img class="row__poster new" src="../images/historique/barry_lyndon.jpg" alt="" />
				<img class="row__poster new" src="../images/historique/ben_hur.png" alt="" />
				<img class="row__poster new" src="../images/historique/brave_heart.jpg" alt="" />
				<img class="row__poster new" src="../images/historique/cyrano_de_bergerac.png" alt="" />
				<img class="row__poster new" src="../images/historique/gladiator.jpg" alt="" />
				<img class="row__poster new" src="../images/historique/hua_mulan.jpg" alt="" />
				<img class="row__poster new" src="../images/historique/ivanhoe.jpg" alt="" />
				<img class="row__poster new" src="../images/historique/la_citée_interdite.jpg" alt="" />
				<img class="row__poster new" src="../images/historique/lincoln.webp" alt="" />
				<img class="row__poster new" src="../images/historique/robin_des_bois.png" alt="" />
				<img class="row__poster new" src="../images/historique/spartacus.jpg" alt="" />
				<img class="row__poster new" src="../images/historique/troie.png" alt="" />
			</div>
			<i class="fa-solid fa-angle-left"></i>
			<i class="fa-solid fa-angle-right"></i>
		  </div>
	  
		  <!-- Documentaries -->
		  <div class="row">
			<h2>Documentaries</h2>
			<div class="row__posters slide8">
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
				<img class="row__poster new" src="../images/tendances/coeur_de_pierre.jpg" alt="" />
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
