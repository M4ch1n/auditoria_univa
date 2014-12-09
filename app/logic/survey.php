<?php

require_once('../config/database.php');

class Survey extends Database {

	protected static $conn;

	function __construct() {
		self::$conn = new database();
	}


	public function getQuestions() {
		$form = '';
		$cont = 0;
		$questions = self::$conn->getAll('SELECT * FROM questions');
		
		foreach($questions as $question) {
			$form.= '<br><br>' . utf8_encode($question['question'])  . '<br>';

			$sql = "SELECT * FROM answers WHERE id_question = :id_question";
			$params = array('id_question' => $question['id']);

			$answers = self::$conn->query($sql, $params);

			foreach ($answers as $answer) {
				$form.= '<div class="radio-inline">';
				$form.= '<label>';				
				$form.= '<input type="radio" name="question_'. $answer['id_question'] .'" id="answer_'. $answer['id'] .'">';
				$form.= utf8_encode( $answer['answer'] ); 
				$form.= '</label>';
				$form.= '</div>';
			 
			}

			$cont++;
		}

		$form.= '<input type="hidden" id="hdnTotalQuestions" value="'. $cont .'">'; 
		return $form;
	}

	public function saveSurvey($answerArray) {
		echo "*******************************";
		var_dump($answerArray);
		
		echo $answerArray;
		// foreach ($answerArray as $answer) {
			
		// 	$sql = 'INSERT INTO surveys(id_question, id_answer) VALUES(:question, :answer)';
		// 	$params = array('question' => $answer['question'], 
		// 					'answer' => $answer['answer']
		// 				);

		// 	$insertRS = self::$conn->query($sql, $params);

		// }

	}
	

}

$survey = new Survey();

if(!empty($_POST)) {
	echo "DAI\n";
	var_dump();
	$survey->saveSurvey($_POST['data']);
} else {
	echo "ELSE";
	print_r($_POST);
}