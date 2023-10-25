<?php
require('etudiant.php');
require('interface.php');
class Professeur extends Etudiant implements interfacprof{
    private $salaire;
    private $voiture;
    private $specialite;
    public $dateEvaluation  ;

    public function __construct($prenomProEnvoy,$nomProEnvoy,$matriculeProEnvoy,$salaireProEnvoy,$voitureProEnvoy,$specialiteProEnvoy,$dateEvaluationEnvoy,$dateEnvoy){
        parent:: __construct($prenomProEnvoy,$nomProEnvoy,$matriculeProEnvoy,$dateEnvoy);

        $this->setSalaire($salaireProEnvoy);
        $this->setVoiture($voitureProEnvoy);
        $this->setSpecialite($specialiteProEnvoy);
        $this->dateEvaluation= $dateEvaluationEnvoy;

    }
    public function setSalaire($salaireProEnvoy){
        if (!is_string($salaireProEnvoy)) {
            $this->salaire=$salaireProEnvoy;
           
        }else{
            throw new Exception("le salaire doit etre un numerique");
            
        }
    }

    public function setVoiture($voitureProEnvoy){
        if (is_string($voitureProEnvoy)) {
            $this->voiture=$voitureProEnvoy;
        }else{
            throw new Exception("la reponse doit etre oui ou non");
            
        }
    }

    public function setSpecialite($specialiteProEnvoy){
        if (is_string($specialiteProEnvoy)) {
            $this->specialite=$specialiteProEnvoy;
           
        }else{
            throw new Exception("la specialité doit etre un string");
            
        }
    }

public function presentationProf(){
    echo "Bonjour je suis professeur $this->prenom $this->nom je suis formateur en $this->specialite, j'ai un de $this->salaire cfa";
}
 public function EvaluationEtudiant($dateEvaluationEnvoy){
     echo "evaluation le $dateEvaluationEnvoy";
 }
}

$prof1= new Professeur ("abdou","diop","RFT32",500000,"oui","back end", "08-10-2023","20-10-1990");
// var_dump($prof1);
// die();
 $prof1->presentationProf();
 $prof1->EvaluationEtudiant("29-23-2023");

?>