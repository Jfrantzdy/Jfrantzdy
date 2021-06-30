<?php
//include_once 'function.php';
class connexion{
    private $user;
    private $mdp;
    //private $data;

    public function __construct($user,$mdp){
        $this->pseudo = $user;
        $this->mdp = $mdp;
       // $this->data = data();
    }
    public function verif(){
        $requete = $this->data->prepare('SELECT *FROM MEMBRES WHERE pseudo = :pseudo');
        $requete -> execute(array('pseudo'=> $this->pseudo));
        $rep = $requete->fetch();
        if($rep){
            if($this->mdp == $rep['mdp']){
                return 'Ok';
            }else
            {
                $erreur = 'Le mot de passe est incorrect';
                return $erreur;
            }
        }else
        {
            $erreur = 'Le speudo est inexistant';
            return $erreur;
        }
    }
    public function session(){
        $requete = $this->data-> prepare('SELECT id from membres where pseudo = :pseudo');
        $requete -> execute(array('pseudo'=> $this->pseudo));
        $requete = $requete->fetch();
        $_SESSION['id'] = $requete['id'];
        $_SESSION['pseudo'] = $this->pseudo;
        return 1;
      }
}
?>