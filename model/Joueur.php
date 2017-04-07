<?php
class Joueur {
	private $nom;
	private $prenom;
	private $vie;
	private $score;
	
	
	
	
	
	////////////////////  GET ans setter ///////
	public function getNom() {
		return $this->nom;
	}
	public function setNom($nom) {
		$this->nom = $nom;
		return $this;
	}
	public function getScore() {
		return $this->score;
	}
	public function setScore($score) {
		$this->score = $score;
		return $this;
	}
	
	function Joueur($unNom , $prenom , $vie){
		$this->setNom($unNom);
		$this->setPrenom($prenom);
		$this->setVie($vie);
		
		$this->setScore(0);
	}
	public function getPrenom() {
		return $this->prenom;
	}
	public function setPrenom($prenom) {
		$this->prenom = $prenom;
		return $this;
	}
	public function getVie() {
		return $this->vie;
	}
	public function setVie($vie) {
		$this->vie = $vie;
		return $this;
	}
	
	
	
	
}