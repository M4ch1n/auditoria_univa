<?php

require_once('../config/database.php');

$db = new database();

$questions = $db->getAll('SELECT * FROM questions');

var_dump($questions);

foreach($questions as $question) {
	echo utf8_encode($question['question'])  . '<br>';

	$sql = "SELECT * FROM answers WHERE id_question = :id_question";
	$params = array('id_question' => $question['id']);

	$answers = $db->query($sql, $params);

	foreach ($answers as $answer) {
		echo utf8_encode( $answer['answer'] ) . '<br>';
	}

}