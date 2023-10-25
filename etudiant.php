<?php
class Etudiant{
    protected $prenom;
    protected $nom;
    private $matricule;
    public $dateNaissance;

    public function __construct($prenomEnvoy,$nomEnvoy,$matriculeEnvoy,$dateEnvoy){

        $this->setPrenom($prenomEnvoy);
        $this->setNom($nomEnvoy);
        $this->setMatricule($matriculeEnvoy);
        $this->dateNaissance = $dateEnvoy;
    }

    public function setPrenom($prenomEnvoy){
        if (is_string($prenomEnvoy)) {
            $this->prenom=$prenomEnvoy;
        }else{
            throw new Exception("le prenom doit etre un string");
            
        }
    }
    public function setNom($nomEnvoy){
        if (is_string($nomEnvoy)) {
            $this->nom=$nomEnvoy;
        }else{
            throw new Exception("le nom doit etre un string");
            
        }
    }
    public function setMatricule($matriculeEnvoy){
        if (is_string($matriculeEnvoy)) {
            $this->matricule=$matriculeEnvoy;
        }else{
            throw new Exception("la matricule doit etre un string");
            
        }
    }


    public function presentationApprenent(){
        echo "hello! je suis  $this->prenom $this->nom, matricule:  $this->matricule et ma date de naissance est: $this->dateNaissance";
    }
    public function ecrireCours(){
        echo "j'ecrit des cours ";
        
    }
    public function faireEvaluation(){
        echo "je fais des evaluations";
        
    }
}
$etudiant1 = new Etudiant("Djiyé", "NGOM", "ABC" ,"26-06-1999 ");
$etudiant1->presentationApprenent();  echo '<br>';
$etudiant1->ecrireCours();  echo '<br>';
$etudiant1->faireEvaluation();
?>