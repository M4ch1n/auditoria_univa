<?php

require_once('../config/database.php');

class Survey extends Database {

	protected static $conn;

	function __construct() {
		self::$conn = new database();	
	}


	public function getQuestions() {
		$form = '';

		$questions = self::$conn->getAll('SELECT * FROM questions');
		foreach($questions as $question) {
			$form.= '<br><br>' . utf8_encode($question['question'])  . '<br>';

			$sql = "SELECT * FROM answers WHERE id_question = :id_question";
			$params = array('id_question' => $question['id']);

			$answers = self::$conn->query($sql, $params);

			foreach ($answers as $answer) {
			
				$form.= '<label>';
				$form.= utf8_encode( $answer['answer'] ); 
				$form.= '<input type="radio" name="question'. $answer['id_question'] .'" id="answer'. $answer['id'] .'">';	
				$form.= '</label>';
			 
			}
		}
		return $form;
	}

	public function saveSurvey() {
		
	}
	

}

