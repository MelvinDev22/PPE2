<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Page-->
    <title>* Inscription *</title>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                <h1><span class="Accédez">Accédez à &nbsp;</span><span class="PPE2">PPE2 PANEL</span></h1>
                </div>
                <hr class="Barre"></hr>
                <div class="card-body">
                    <form method="post" action="cible.php" enctype="multipart/form-data">
                        <div class="form-row m-b-55">
                            <div class="name">Nom - Prénom</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nom" id="nom" placeholder="Nom" required>                                            
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="prenom" id="prenom" placeholder="Prénom" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Mot de passe</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Le mot de passe doit contenir 8 caractères dont 1 majuscule, 1 miniscule et 1 chiffre" placeholder="Mot de passe" required >                                            
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="verif_mdp" id="verif_mdp" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="************" required >
                                            <label class="label--desc">  &nbsp; Vérification mot de passe</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Date de naissance</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="date" name="birthdate"  id="birthdate" class="birthdate" placeholder="xx/xx/xxxx" required >                                            
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text"name="nom_utilisateur" id="nom_utilisateur" placeholder="Nom d'utilisateur" required>
                                            <label class="label--desc">&nbsp; Nom utilisateur </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="row row-refine">                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="email" name="email" id="email" placeholder="Adresse mail" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">                            
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit" value="S'inscrire" id="boutonsinscrire" >S'inscrire</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
