<?php
session_start();

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {

    //  VARIABLES
    $serverName = "localhost";
    $dbName = "test_session";
    $userName = "root";
    $passwordUserName = "";
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    //  CONNEXION PDO
    try {
        $bdd = new PDO('mysql:host=' . $serverName . ';dbname=' . $dbName . ';charset=utf8', $userName, $passwordUserName);
    } catch (Exception $e) {
        die('La connexion à la base de données a échoué  : ' . $e->getMessage());
    }




    try {
        // Je sélectionne l'utilisateur avec l'email donné
        $requete = $bdd->prepare('SELECT * FROM user WHERE email = :email');
        $requete->execute(array('email' => $email));
        $donnees = $requete->fetch();

        // Si l'utilisateur existe
        if ($donnees) {
            // Vérifier le mot de passe haché
            if (password_verify($password, $donnees['password'])) {

                // Créer la session pour l'utilisateur
                $_SESSION['user_id'] = $donnees['id'];
                $_SESSION['user_name'] = $donnees['name'];

                // on redirige vers la page welcome
                header('location: php/welcome.php');
                exit();
            } else {
                // Mot de passe incorrect
                header('location: index.php?error=1&message=Paire login/mdp inccorecte.');
                exit();
            }
        } else {
            // Utilisateur non trouvé
            header('location: index.php?error=1&message=Paire login/mdp inccorecte.');
            exit();
        }

    } catch (Exception $e) {
        die('Erreur lors de la connexion : ' . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>clone netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="icon" type="image/png" href="assets/netflix_icon.png" />
</head>

<body>
    <?php
    include("php/header.php");
    ?>
    <section>
        <div class="formulaire_container">
            <h1>S'identifier</h1>
            <?php
            if (isset($_GET['error'])) {
                if (isset($_GET['message'])) {
                    echo '<div class="error">' . htmlspecialchars($_GET['message']) . '</div>';

                }
            }

            ?>
            <form method="post" action="index.php">
                <input type="email" name="email" placeholder="E-mail" />
                <input type="password" name="password" placeholder="mot de passe" />
                <input type="submit" value="S'identifier" />
            </form>
            <p>Première fois sur netflix ? <a href="php/inscription.php"><span
                        class="switch_log">Inscrivez-vous</span></a></p>
        </div>

    </section>
    <?php
    include("php/footer.php");
    ?>
    <script src="js/index.js"></script>
</body>

</html>