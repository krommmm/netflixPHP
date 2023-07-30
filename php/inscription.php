<?php

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['name']) && !empty($_POST['name'])) {

    //  VARIABLES
    $serverName = "localhost";
    $dbName = "test_session";
    $userName = "root";
    $passwordUserName = "";
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    //  CONNEXION PDO
    try {
        $bdd = new PDO('mysql:host=' . $serverName . ';dbname=' . $dbName . ';charset=utf8', $userName, $passwordUserName);
    } catch (Exception $e) {
        die('La connexion à la base de données a échoué  : ' . $e->getMessage());
    }

    try {

        // ADRESSE EMAIL VALIDE (a vérifier en changant le input en type="text")
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('location: inscription.php?error=1&message=Votre adresse email est invalide.');
            exit();
        }

        // Je selectionne tous les emails dans la bdd
        $requete = $bdd->prepare('SELECT * FROM user WHERE email = :email');
        $requete->execute(array('email' => $email));

        // est-ce que l'email est déjà pris ?
        $isEmailTaken = false;
        while ($donnees = $requete->fetch()) {
            if ($donnees['email'] == $email) {
                $isEmailTaken = true;
            }
        }

        // si l'email est pris:
        if ($isEmailTaken) {
            header('location: inscription.php?error=1&message=Impossible de s\'inscrire');
            exit();
        } else {

            // Generate the bcrypt hash of the password
            $options = ['cost' => 12]; // You can adjust the cost factor for the desired strength (higher is more secure but slower)
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

            //sinon je créé l'utilisateur
            $requete = $bdd->prepare('INSERT INTO user(name,email,password) VALUES(:name,:email,:password)');
            $requete->execute(
                array(
                    'name' => $name,
                    'email' => $email,
                    'password' => $hashedPassword,
                )
            );
            header('location: inscription.php?success=1&message=Vous êtes désormais inscrit');
            exit();
        }


    } catch (Exception $e) {
        die('Erreur lors de l\'inscription : ' . $e->getMessage());
    }


}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>clone netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <link rel="icon" type="image/png" href="../assets/netflix_icon.png" />
</head>

<body>
    <header>
        <nav>
            <img src="../assets/logo.png" alt="logo" />
        </nav>
    </header>

    <section>
        <div class="formulaire_container">
            <h1>S'inscrire</h1>
            <?php
            if (isset($_GET['error'])) {
                if (isset($_GET['message'])) {
                    echo '<div class="error">' . htmlspecialchars($_GET['message']) . '</div>';

                }
            } else if (isset($_GET['success'])) {
                echo '<div class="success">' . htmlspecialchars($_GET['message']) . '</div>';

            }

            ?>
            <form method="post" action="inscription.php">
                <input class="input" type="text" name="name" placeholder="Name" />
                <input type="email" name="email" placeholder="E-mail" />
                <input type="password" name="password" placeholder="mot de passe">
                <input type="submit" value="S'inscrire" />
            </form>
            <p>Déjà inscrit ? <a href="../index.php"><span class="switch_log">Connectez-vous</span></a></p>
        </div>

    </section>
    <?php
    include("footer.php");
    ?>
    <script src="../js/index.js"></script>
</body>

</html>