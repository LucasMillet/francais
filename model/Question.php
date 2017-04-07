<?php
class Question {
	private  $question;
	private  $reponse; 
	private $erreur;
	
	
	
	////////////////////  GET ans setter ///////
	
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
	public function getErreur() {
		return $this->erreur;
	}
	public function setErreur($erreur) {
		$this->erreur = $erreur;
		return $this;
	}
	
	
	
}