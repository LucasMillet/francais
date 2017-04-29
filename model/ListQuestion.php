<?php
class ListQuestion {
		
	private $LesQuestions  = array();
	private $IndexActuel ;
	
	
	
	////////////////////  GET ans setter ///////
	public function ListQuestionPopulated(){
		
		$this->LesQuestions[0] = new Question("Combien faut-il faire de pages en synthese ?", "4-5 Pages" ,"3-4 Pages", "2-3 Pages" , "5-6 Pages") ;
		$this->LesQuestions[1] = new Question("Peut-on faire des citations dans la synthese ?","Non, il ne faut pas","Oui, on peut le faire si l'on veut","Oui, c est obligatoire ", "Ca depend de quelle citation") ;
		$this->LesQuestions[2] = new Question("Quel pronom personnel doit-on utiliser majoritairement lors de la synthese ?","On, Nous","Je","Toi, Tu","Vous") ;
		$this->LesQuestions[3] = new Question("Ou doivent etre situe les presentations des textes ?","Dans le developpement avant leur utilisation","Dans l introduction","Dans le developpement apres leur utilisation", "Dans la conclusion") ;
		$this->LesQuestions[4] = new Question("A quoi sert la conclusion ?","Elle doit etre le reflet du plan et synthetiser le developpement","Elle doit repondre a la problematique","Elle synthetise le plan et est le reflet de l'introduction", "Elle permet une ouverture") ;
		$this->LesQuestions[5] = new Question("Dans l'introduction, dans quel ordre ces elements doivent ils etre places ?","Amorce, problematique, plan","Plan, problematique, amorce","Amorce, plan, problematique", "Problematique, plan, amorce") ;
		$this->LesQuestions[6] = new Question("Est ce qu une ouverture dans la conclusion est souhaitable","Non elle est deconseillee","Oui elle est souhaitable","Oui, elle est meme obligatoire","Non elle n'est pas obligatoire") ;
		$this->LesQuestions[7] = new Question("Que faut il faire sur les titres des oeuvres?","Il faut les souligner","Il faut les entourer de guillemets","Il faut les ecrire en italique","Rien de special") ;
		$this->LesQuestions[8] = new Question("Quel est le but d'une synthese ?","Confronter les idees des documents et les resumer","Resumer les documents de maniere synthetique","Presenter les documents et en degager les idees","Regrouper les documents en themes communs") ;
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