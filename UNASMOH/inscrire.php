<?php session_start();
//include_once 'function/function.php'; 
//include_once ('function/classinscription.php');
//$data = data(); 
if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['nais']) and isset($_POST['adress']) and isset($_POST['email']) and isset($_POST['faculte']) and isset($_POST['mdp'])){
    $inscription = new inscription($_POST['nom'],$_POST['prenom'],$_POST['nais'],$_POST['adress'],$_POST['email'],$_POST['faculte'],$_POST['mdp']);
    $verif = $inscription->verif();
    if($verif == 'Ok'){/* tout est bon */
        if($inscription->enregistrement()){/* Enregistrement ok*/
                header ('location: index.php');
      }
      else {/* Une erreur lors de enregistrement ok*/
         echo 'Une erreur est survenue';
      }
  }
  else
  {
      $erreur = $verif;
  }
    //echo 'Bon travail';
}
?>
<!doctype html>
<html lang="fr">
<head>
<title> FRANTZDY JEAN </title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php include 'navbar.php';?>
<div class="page">
  <section id="content">
        <div class="container">
        <h4> Hi! Si vous avez deja eu un compte Veuillez cliquez sur connecter dans la barre de menu sinon, inserez les informations demander. Merci</h4>
        <h1 class="header_2 indent_3">  
        Inscription</br></br>
        Veuillez entrer vos informations :</h1>
        <h5 class="header_4">
                <div>
</p>
<section>
    <aside>
<form action="dev.php" method="post">
<p>
            <br>Nom</br><input type="text" name="Nom" placeholder="Nom..."/> </br>
            <br>Prenom</br><input type="text" name="Prenom" placeholder="Prenom..."/> </br>
            <br>Date de naissance</br><input type="date" name="nais" placeholder="date de nais..."/> </br>
            <br>Adresse</br><input type="text" name="adresse" placeholder="Adresse..."/> </br>
            <br>E-mail</br><input name= "email" type="email" placeholder="Adresse email..." /> </br>
            <br>Faculte</br><select name="choix faculte">
                            <option value="choix1">SCIENCE INFORMATIQUE</option>
                            <option value="choix2">SCIENCE INFIRMIERE</option>
                            <option value="choix3">SCIENCE AGRONOMIQUE</option>
                            <option value="choix4">SCIENCE ADMINISTRATIVE</option>
                            <option value="choix5">GENIE CIVIL</option>
            </select></br>
            <br> Mot de passe</br><input type="password" name="mdp" placeholder="Mot de passe..." /><br>
            <br><input type="submit" value="INSCRIRE" /></br>
</p>
    </aside>
</section>
                </div>
        </h5>
        </div>   
    </section>
</div>
</form>
</body>
<!-- Le pied de page -->
<footer id="pied_de_page">
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Information</h4>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +509 4748 3919 / 4612 8054</p>
                  <p><span>Email:</span> jeanfrantzdy055@gmail.com</p>
                  <p><span>Heure de travail:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>JEAN FRANTZDY</strong>. Tous droits réservés
              </p>
            </div>
            <div class="credits">
              Designed by <a href="https://bootstrapmade.com/">Colas Rude-Nau</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</html>