<?php session_start();
include_once ('function/connect.php');
//include_once ('function/classconnexion.php');
//$data = data();
if(isset($_POST['email']) and  isset($_POST['mdp'])){
     $connection = new connection($_POST['email'],$_POST['mdp']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Connection</title>
    <link rel="stylesheet" href="style.css" />
</head>
<?php include 'navbar.php';?>
<body>
<div class="page">

  <section id="content">
        <div class="container">
        <h5><p>Hi! Si vous etes ici, c'est que vous avez deja eu un compte. </br>
Sinon, Veuillez cliquez sur inscrire dans la barre de menu. Merci</p></h5>
                        <h2 class="header_2 indent_3">
                                    <fieldset>
                                    <div>
                                    
<h1> Connection </h1>

<div id=*Cforum*>
        <form action="connexion.php" method="post">
        <p>
            <input type="text" name="user" placeholder="Nom utilisateur..."/> </br>
            <input type="password" name="mdp" placeholder="Mot de passe..." /><br>
            <input type="submit" value="Connection !" />
        </p>
        </form>
</div>
</div>
                                </fieldset>
                        </h2>   
    </section>
</div>
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