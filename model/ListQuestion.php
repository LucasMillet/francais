<?php
class ListQuestion {
		
	private $LesQuestions  = array();
	
	
	
	
	////////////////////  GET ans setter ///////
	public function LesQuestions (){
		
		$LesQuestions[1] = new Question() ;
		$LesQuestions[2] = new Question() ;
		$LesQuestions[3] = new Question() ;
			
	}
	
	public function getLesQuestions() {
		return $this->LesQuestions;
	}
	
	public function setLesQuestions($LesQuestions) {
		$this->LesQuestions = $LesQuestions;
		return $this;
	}
	
	public function GetUneQuestion($index) {
		return $LesQuestions[$index];
	}
}