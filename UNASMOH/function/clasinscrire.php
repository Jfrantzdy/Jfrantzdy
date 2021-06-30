<?php 
include_once ('function.php');

    class inscription{
      private $nom;
      private $prenom;
      private $nais;
      private $adress;
      private $mdp;
      private $email;
      private $faculte;
  
      private $execute;
    
    public function __construct($nom,$prenom,$nais,$adress,$email,$faculte){
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->nais = $nais;
      $this->adress = $adress;
      $this->email = $email;
      $this->faculte = $faculte;
      $this->mdp = $mdp;
    }
    public function verif(){
      if(strlen($this->nom)>4 and strlen($this->nom)<20){/* si le nom est ok*/ 

        if (strlen($this->prenom)>4 and strlen($this->nom)<30){/* si le prenom est ok*/

        if(strlen($this->nais)>5 and strlen($this->nais)<15){/* naissance est ok*/
        
        }else{/*nais pa bon*/
         $erreur = 'Le prenom est incorrect, recommencez !';
         return $erreur;
        }
      }else{/*Le nom est trop long*/
        $erreur = 'Votre nom doit contenir entre 4 et 20 caracteres';
        return $erreur;
      }
    }
    public function enregistrement(){
      $requete = $this->data->prepare("INSERT INTO inscrire(nom,prenom,nais,adress,email,faculte) values(:nom,:prenom,:nais,:adress,:email,:faculte)");
      $requete -> execute(array('nom' => $this->nom,'prenom' => $this->prenom,'nais' => $this->nais,'adress'=> $this->adress,'email' => $this->email,'faculte'=> $this->faculte));
      return 1;
    }
  }
    ?>