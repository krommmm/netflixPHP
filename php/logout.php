<?php
session_start();

// Détruire la session pour déconnecter l'utilisateur
session_destroy();

// Rediriger l'utilisateur vers la page d'accueil ou une autre page après la déconnexion
header('location: ../index.php');
exit();
?>
