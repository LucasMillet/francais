<?php
class ListQuestion {
		
	private $LesQuestions  = array();
	private $IndexActuel ;
	
	
	
	////////////////////  GET ans setter ///////
	public function ListQuestion(){
		
		$LesQuestions[0] = new Question("Combien faut-il faire de pages en synth�se ?", "4-5 Pages" , "2-3 Pages" , "5-6 Pages") ;
		$LesQuestions[1] = new Question("Peut-on faire des citations dans la synth�se ?"," Oui !"," Non !"," �a depends .", " Que en d'o� provien la citation .") ;
		$LesQuestions[2] = new Question("Quel pronom personnel doit-on utiliser majoritairement lors de la synthese ?","On, Nous","Je","Toi, Tu","Vous") ;
		$LesQuestions[3] = new Question("Peut-on apporter des citations personnelles dans la synth�se"," Oui !"," Non !"," �a depends.", " Que en d'o� provien la citation.") ;
		$LesQuestions[4] = new Question("Peut-on apporter des citations personnelles dans la synth�se"," Oui !"," Non !"," �a depends.", " Que en d'o� provien la citation.") ;
		$LesQuestions[5] = new Question("Ou doivent �tre situ� les pr�sentation des textes ?"," Avant leur utilisation."," Dans l'intro ."," �a depends .", "� la fin.") ;
		
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