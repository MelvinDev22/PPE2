<!DOCTYPE html>
<head>
    <meta http-equiv="refresh" content="1;URL=inscription.php">
</head>
<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=ppe2;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$prenom = $_POST['prenom'];
$nom = $_POST['nom'] ;
$email = $_POST['email'] ;
$nom_utilisateur = $_POST['nom_utilisateur'] ;
$birthdate = $_POST['birthdate'] ;


    // Vérification que les champs ne soient pas vides
    if (strlen($email)>1)
    {
        if (strlen($nom_utilisateur)>1)
        {
            if (strlen($nom)>1)
            {
                if (strlen($prenom)>1)
                {
                    // Vérification taille du mot de passe
                    if (strlen($_POST['password'])>=8)
                    {
                        // Vérification Mot de passe vérifié = Mot de passe initial
                        if ($_POST['password'] == $_POST['verif_mdp'])
                        {                            
                            // Requête SQL pour insérer les données du formulaire dans la base de données
                            $req = $bdd->prepare('INSERT INTO membre(prenom, nom, email, password, nom_utilisateur, birthdate) VALUES(:prenom, :nom, :email, :password, :nom_utilisateur, :birthdate)');
                            // Cryptage du mdp
                            $hashsecure = password_hash($_POST['password'], PASSWORD_DEFAULT);
                            $req->execute(array(
                                'prenom' => $prenom,
                                'nom' => $nom,
                                'email' =>  $email,
                                'password' => $hashsecure,
                                'nom_utilisateur' => $nom_utilisateur,
                                'birthdate' => $birthdate,
                                ));
                                echo 'Inscription terminée ! Vos données ont parfaitement été inscrite dans notre Base de données.';
                        }
                        else  
                        {
                            echo 'Mot de passe incorrect';
                        }
                    }
                }
            }
        }
    }
?>
</html>
