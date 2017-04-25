<?php
class Question {
	private  $question;
	private  $reponse; 
	private $erreur1;
	private $erreur2;
	private $erreur3;
	
	
	
	
	////////////////////  GET ans setter ///////
	public function Question($UneQuestion , $UneReponse , $Erreur1 ,$Erreur2 , $Erreur3){
	
		$this->setQuestion($UneQuestion);
		$this->setReponse($UneReponse);
		$this->setErreur1($Erreur1);
		$this->setErreur2($Erreur2);
		$this->setErreur3($Erreur3);
			
	}
	
	public function getQuestion() {
		return $this->question;
	}
	public function setQuestion($question) {
		$this->question = $question;
		return $this;
	}
	public function getReponse() {
		return $this->reponse;
	}
	public function setReponse($reponse) {
		$this->reponse = $reponse;
		return $this;
	}
	public function getErreur1() {
		return $this->erreur1;
	}
	public function setErreur1($erreur1) {
		$this->erreur1 = $erreur1;
		return $this;
	}
	public function getErreur2() {
		return $this->erreur2;
	}
	public function setErreur2($erreur2) {
		$this->erreur2 = $erreur2;
		return $this;
	}
	public function getErreur3() {
		return $this->erreur3;
	}
	public function setErreur3($erreur3) {
		$this->erreur3 = $erreur3;
		return $this;
	}
	
	
	
	
}