<?php 
session_start();

try {
    $bdd = new PDO("mysql:host=localhost:3308;dbname=inscription_site;charset=utf8;", 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ----- INSCRIPTION -----
    if (isset($_POST['register'])) {
        if (!empty($_POST['Nom']) && !empty($_POST['Email']) && !empty($_POST['Mot_de_passe'])) {
            $Nom = htmlspecialchars($_POST['Nom']);
            $Email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
            $Mot_de_passe = $_POST['Mot_de_passe'];
            $Mot_de_passe_hache = password_hash($Mot_de_passe, PASSWORD_DEFAULT);

            $checkUser = $bdd->prepare("SELECT * FROM users WHERE Email = ?");
            $checkUser->execute([$Email]);

            if ($checkUser->rowCount() == 0) {
                $insertUser = $bdd->prepare("INSERT INTO users (Nom, Mot_de_passe, Email) VALUES (?, ?, ?)");
                $insertUser->execute([$Nom, $Mot_de_passe_hache, $Email]);

                $getUser = $bdd->prepare("SELECT * FROM users WHERE Email = ?");
                $getUser->execute([$Email]);
                $user = $getUser->fetch();

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['Nom'] = $user['Nom'];
                $_SESSION['Email'] = $user['Email'];

                header("Location: inscription.php");
                exit();
            } else {
                $erreur = "❌ Cet email est déjà utilisé.";
            }
        } else {
            $erreur = "⚠️ Veuillez remplir tous les champs.";
        }
    }

    // ----- CONNEXION -----
    if (isset($_POST['login'])) {
        if (!empty($_POST['Email']) && !empty($_POST['Mot_de_passe'])) {
            $Email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
            $Mot_de_passe = $_POST['Mot_de_passe'];

            $checkUser = $bdd->prepare("SELECT * FROM users WHERE Email = ?");
            $checkUser->execute([$Email]);

            if ($checkUser->rowCount() > 0) {
                $user = $checkUser->fetch();

                if (password_verify($Mot_de_passe, $user['Mot_de_passe'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['Nom'] = $user['Nom'];
                    $_SESSION['Email'] = $user['Email'];

                    header("Location: index.php");
                    exit();
                } else {
                    $erreur = "❌ Mot de passe incorrect.";
                }
            } else {
                $erreur = "❌ Aucun compte trouvé avec cet email.";
            }
        } else {
            $erreur = "⚠️ Veuillez remplir tous les champs.";
        }
    }

} catch (PDOException $e) {
    $erreur = "Erreur : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'><link rel="stylesheet" href="./style-login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<?php if (isset($erreur)) echo "<p style='color:red;text-align:center;'>$erreur</p>"; ?>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form method="POST" action="#">
            <h1>Créer un compte</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>ou utiliser votre email pour l'enregistrement</span>
            <input type="text" name="Nom" placeholder="Nom" autocomplete="off" />
            <input type="email" name="Email" placeholder="Email" autocomplete="off" />
            <input type="password" name="Mot_de_passe" placeholder="Mot de passe" autocomplete="off" />
            <button type="submit" name="register" value="Créer">Créer</button>
        </form>  
    </div>
    <div class="form-container sign-in-container">
        <form method="POST" action="#">
            <h1>Connexion</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>ou utiliser un compte</span>
            <input type="email" name="Email"  placeholder="Email" autocomplete="off" />
            <input type="password" name="Mot_de_passe" placeholder="Mot de passe" autocomplete="off" />
            <a href="#">Mot de passe oublié?</a>
            <button type="submit" name="login" value="Connexion" >Connexion</button> 
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Bienvenue!</h1>
                <p>Pour rester connecter, veuillez saisir vos informations</p>
                <button class="ghost" id="signIn">Connexion</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Bonjour,cher visiteur!</h1>
                <p>Entrer vos informations et commencer à redécouvrir les plaisirs du shopping</p>
                <button class="ghost" id="signUp">Inscription</button>
            </div>
        </div>
    </div>
</div>

<!-- partial -->
  <script src="./javascript-login.js"></script>

</body>
</html>