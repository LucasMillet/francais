<?php
class ListQuestion {
		
	private $LesQuestions  = array();
	private $IndexActuel ;
	
	
	
	////////////////////  GET ans setter ///////
	public function ListQuestionPopulated(){
		
		$this->LesQuestions[0] = new Question("Combien faut-il faire de pages en synthèse ?", "4-5 Pages" ,"3-4 Pages", "2-3 Pages" , "5-6 Pages") ;
		$this->LesQuestions[1] = new Question("Peut-on faire des citations dans la synthèse ?","Non, il ne faut pas","Oui, on peut le faire si l&#146;on veut","Oui, c est obligatoire ", "Ca dépend de quelle citation") ;
		$this->LesQuestions[2] = new Question("Quel pronom personnel doit-on utiliser majoritairement lors de la synthèse ?","On, Nous","Je","Toi, Tu","Vous") ;
		$this->LesQuestions[3] = new Question("Ou doivent être situé les présentations des textes ?","Dans le développement avant leur utilisation","Dans l&#146;introduction","Dans le développement après leur utilisation", "Dans la conclusion") ;
		$this->LesQuestions[4] = new Question("A quoi sert la conclusion ?","Elle doit être le reflet du plan et synthetiser le développement","Elle doit répondre à la problématique","Elle synthetise le plan et est le reflet de l'introduction", "Elle permet une ouverture") ;
		$this->LesQuestions[5] = new Question("Dans l&#146;introduction, dans quel ordre ces éléments doivent ils être placés ?","Amorce, problématique, plan","Plan, problématique, amorce","Amorce, plan, problématique", "Problématique, plan, amorce") ;
		$this->LesQuestions[6] = new Question("Est ce qu&#146;une ouverture dans la conclusion est souhaitable","Non elle est deconseillée","Oui elle est souhaitable","Oui, elle est même obligatoire","Non elle n&#146;est pas obligatoire") ;
		$this->LesQuestions[7] = new Question("Que faut il faire sur les titres des oeuvres?","Il faut les souligner","Il faut les entourer de guillemets","Il faut les écrire en italique","Rien de spécial") ;
		$this->LesQuestions[8] = new Question("Quel est le but d&#146;une synthèse ?","Confronter les idées des documents et les résumer","Résumer les documents de manière synthetique","Présenter les documents et en dégager les idées","Regrouper les documents en thèmes communs") ;
	}
	
	public function getLesQuestions() {
		return $this->LesQuestions;
	}
	
	public function setLesQuestions($LesQuestions) {
		$this->LesQuestions = $LesQuestions;
		return $this;
	}
	
	public function GetUneQuestion($index) {
		$this->setIndexActuel($index);
		return $this->LesQuestions[$index];
	}
	
	public function getIndexActuel() {
		return $this->IndexActuel;
	}
	
	public function setIndexActuel($IndexActuel) {
		$this->IndexActuel = $IndexActuel;
		return $this;
	}
	
	public function countQuestions(){
		$compteur = -1;
		foreach ($this->LesQuestions as $question){
			$compteur++;
		}
		return $compteur;
	}
	
}