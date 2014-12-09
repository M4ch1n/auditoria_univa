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
				
		foreach ($answerArray as $answer) {
			
			try {
				$sql = 'INSERT INTO surveys(id_question, id_answer) VALUES(:question, :answer)';
				
				$params = array('question' => $answer['question'], 
							'answer' => $answer['answer']
							);

				$insertRS = self::$conn->query($sql, $params);				
			} catch(Exception $e) {
				echo "Error al insertar en base de datos: " , $e->getMessage();
			}			
		}

		echo "Encuesta agregada con &eacute;xito";		
	}


	public function getRecomendaciones($idPregunta) {
		$sql = 'SELECT MAX(total), answer, id_answer 
				FROM ( 
					SELECT id_answer, answer, count(answer) AS total 
					FROM answers AS a 
					INNER JOIN surveys AS s 
					ON a.id = s.id_answer 
					WHERE s.id_question = :question 
					GROUP BY answer ) AS counts';

		$params = array('question' => $idPregunta);
		$suggests = self::$conn->query($sql, $params);

		$respuesta = '';

		foreach ($suggests as $suggests) {		 	
		 	
			$respuesta = $this->setRecomendaciones($idPregunta, $suggests['id_answer']);

		}		
		return $respuesta;
	}

	public function setRecomendaciones($idPregunta, $idRespuesta) {

		$sugerencia = '';

		if($idPregunta == 1 && $idRespuesta == 3)
			$sugerencia = "Tus empleados conocen sus responsabilidades, sigue as&aacute;";
		else if($idPregunta == 1 && $idRespuesta == 4)
			$sugerencia = "Tienes que reorganizar las responsabilidades de tus empleados";

		if($idPregunta == 2 && $idRespuesta == 5)
			$sugerencia = "Perfecto, la mayor&iacute;a de tus empleados saben lo que tienen que hacer";
		else if($idPregunta == 2 && $idRespuesta == 6)
			$sugerencia = "Tus empleados no conocen cuales son las tareas que tienen que realizar, tienes que delimitar sus tareas y responsabilidades";

		if($idPregunta == 3 && $idRespuesta == 7)
			$sugerencia = "Tus empleados se sienten confiados en su area de trabajo";
		else if($idPregunta == 3 && $idRespuesta == 8)
			$sugerencia = "El darles tareas de otras areas puede distraerlos de su trabajo m&aacute;s importante";
		else if($idPregunta == 3 && $idRespuesta == 9)
			$sugerencia = "Estas desaprovechando a tus empleados, dales tareas de sus respectivas &aacute;reas";

		if($idPregunta == 4 && $idRespuesta == 10)
			$sugerencia = "Tus empleados estan listos para realizar su trabajo";
		else if($idPregunta == 4 && $idRespuesta == 11)
			$sugerencia = "Tienes que atacar posibles puntos d&eacutebiles para que los empleados puedan cumplir bien con sus labores";
		else if($idPregunta == 4 && $idRespuesta == 12)
			$sugerencia = "Necesitas realizar cursos de capacitaci&oacute;n, tus empleados no se sienten seguros de su conocimiento";

		if($idPregunta == 5 && $idRespuesta == 13)
			$sugerencia = "Muy bien, tus empleados se dan tiempo de conocer bien un problema antes de iniciar";
		else if($idPregunta == 5 && $idRespuesta == 14)
			$sugerencia = "Debes de recapacitar si el tiempo que le asignas a tus empleados es &oacute;ptimo para conocer un nuevo reto es el adecuado";
		else if($idPregunta == 5 && $idRespuesta == 15)
			$sugerencia = "Mandas a tus empleados directamente a un problema sin siquiera conocerlo, debes de darles tiempo de familiarisarse con la tarea";

		if($idPregunta == 6 && $idRespuesta == 16)
			$sugerencia = "Excelente ritmo de capacitaci&oacute;n";
		else if($idPregunta == 6 && $idRespuesta == 17)
			$sugerencia = "Conocimientos s&oacute;lidos se consiguen en este periodo de tiempo";
		else if($idPregunta == 6 && $idRespuesta == 18)
			$sugerencia = "Debes de considerar la evoluci&oacute;n del mercado actual, para saber si es un tiempo &oacute;ptimo para capacitarse";
		else if($idPregunta == 6 && $idRespuesta == 19)
			$sugerencia = "Capacitaciones anuales requieren de entrenamientos s&oacute;lidos para que puedan ser aprovechados, intenta conseguir m&aacute;s cursos";
		else if($idPregunta == 6 && $idRespuesta == 20)
			$sugerencia = "Corres peligro de que tu equipo de trabajo se quede estancado y pierda competitividad";

		if($idPregunta == 7 && $idRespuesta == 21)
			$sugerencia = "Sigue as&iacute;";
		else if($idPregunta == 7 && $idRespuesta == 22)
			$sugerencia = "Tu equipo perder&aacute; tiempo buscando que le toca hacer a cada quien, asigna roles";
		else if($idPregunta == 7 && $idRespuesta == 23)
			$sugerencia = "El no conocer con exactitud lo que se tiene que hacer, puede llevar al re-trabajo, asegurate de delimitar tareas y roles";
		
		if($idPregunta == 8 && $idRespuesta == 24)
			$sugerencia = "El cambio en las habilidades llevar&aacute; a retrasos en la entrega del proyecto, asegurate de conocer bien el proyecto antes de iniciar";
		else if($idPregunta == 8 && $idRespuesta == 25)
			$sugerencia = "Sigue analizando proyectos antes de iniciar, es importante conocer las habilidades que se requieren";
		else if($idPregunta == 8 && $idRespuesta == 26)
			$sugerencia = "Debes de poner atenci&oacute; al momento de planear un proyecto, en el transcurso de un proyecto esto puede generar confusi&oacute;n";

		if($idPregunta == 9 && $idRespuesta == 27)
			$sugerencia = "Perfecto, eso habla de buena planeaci&oacute;n";
		else if($idPregunta == 9 && $idRespuesta == 28)
			$sugerencia = "Tus proyectos estan fallando, requieres de una mejor planeaci&oacute;n";
		else if($idPregunta == 9 && $idRespuesta == 29)
			$sugerencia = "No todos tus proyectos se realizan como se deben, debes de poner la misma atenci&oacute;n en todos";

		if($idPregunta == 10 && $idRespuesta == 30)
			$sugerencia = "Excelente, comentar sobre el desempe&ntilde;o de tus empleados les da mejores herramientas para futuros proyectos";
		else if($idPregunta == 10 && $idRespuesta == 31)
			$sugerencia = "Tus empleados no saben si estan haciendo algo bien o mal, debes de retroalimentarlos";
		else if($idPregunta == 10 && $idRespuesta == 32)
			$sugerencia = "Es importante que siempre los retroalimentes, para que saquen lo mejor de cada proyecto";

		if($idPregunta == 11 && $idRespuesta == 33)
			$sugerencia = "Es importante, para tener una mejor idea de como plantear proyectos futuros";
		else if($idPregunta == 11 && $idRespuesta == 34)
			$sugerencia = "Intenta que los clientes den sus puntos de vista sobre los proyectos terminados, esto sirve para poder plantear mejor los proyectos futuros";
		else if($idPregunta == 11 && $idRespuesta == 35)
			$sugerencia = "El no tener una retroalimentaci&oacute;n de cada proyecto, no permite tener un conocimiento sobre el resultado de los proyectos liberados";

		return $sugerencia;

	}

}

$survey = new Survey();

if(!empty($_POST)) {	
	$survey->saveSurvey($_POST['survey']);
}