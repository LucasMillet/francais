<?php
class ListQuestion {
		
	private $LesQuestions  = array();
	private $IndexActuel ;
	
	
	
	////////////////////  GET ans setter ///////
	public function ListQuestion(){
		
		$LesQuestions[0] = new Question("Combien faut-il faire de pages en synthèse ?", "4-5 Pages" , "2-3 Pages" , "5-6 Pages") ;
		$LesQuestions[1] = new Question("Peut-on faire des citations dans la synthèse ?"," Oui !"," Non !"," ça depends .", " Que en d'où provien la citation .") ;
		$LesQuestions[2] = new Question("Quel pronom personnel doit-on utiliser majoritairement lors de la synthese ?","On, Nous","Je","Toi, Tu","Vous") ;
		$LesQuestions[3] = new Question("Peut-on apporter des citations personnelles dans la synthèse"," Oui !"," Non !"," ça depends.", " Que en d'où provien la citation.") ;
		$LesQuestions[4] = new Question("Peut-on apporter des citations personnelles dans la synthèse"," Oui !"," Non !"," ça depends.", " Que en d'où provien la citation.") ;
		$LesQuestions[5] = new Question("Ou doivent être situé les présentation des textes ?"," Avant leur utilisation."," Dans l'intro ."," ça depends .", "à la fin.") ;
		
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
	
}