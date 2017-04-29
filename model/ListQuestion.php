<?php
class ListQuestion {
		
	private $LesQuestions  = array();
	private $IndexActuel ;
	
	
	
	////////////////////  GET ans setter ///////
	public function ListQuestionPopulated(){
		
		$this->LesQuestions[0] = new Question("Combien faut-il faire de pages en synthese ?", "4-5 Pages" ,"3-4 Pages", "2-3 Pages" , "5-6 Pages") ;
		$this->LesQuestions[1] = new Question("Peut-on faire des citations dans la synthèse ?"," Non !"," Oui !"," ça depends", " Que en d'où provien la citation .") ;
		$this->LesQuestions[2] = new Question("Quel pronom personnel doit-on utiliser majoritairement lors de la synthese ?","On, Nous","Je","Toi, Tu","Vous") ;
		$this->LesQuestions[3] = new Question("Peut-on apporter des citations personnelles dans la synthèse"," Non !"," Oui !"," ça depends.", " Que en d'où provien la citation.") ;
		$this->LesQuestions[4] = new Question("Peut-on apporter des citations personnelles dans la synthèse"," Non !"," Oui !"," ça depends.", " Que en d'où provien la citation.") ;
		$this->LesQuestions[5] = new Question("Ou doivent être situé les présentation des textes ?"," Avant leur utilisation."," Dans l'intro ."," ça depends .", "à la fin.") ;
		
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