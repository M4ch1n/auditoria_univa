<?php
require 'vendor/phplot.php';

require_once('../config/database.php');

class Graph extends Database {

	protected static $conn;

	function __construct() {
		self::$conn = new database();
	}

	public function getData() {
		$sql = 'SELECT answer, count(answer) AS total FROM answers AS a INNER JOIN surveys AS s ON a.id = s.id_answer WHERE s.id_question = :idQuestion GROUP BY answer';
		$params = array('idQuestion' => 5);
		$answers = self::$conn->query($sql, $params);

		$data = array();		

		foreach ($answers as $answer) {		 	
		 	$data[] = array($answer['answer'], $answer['total']);			 
		}		
		return $data;
	}
}

$plot = new PHPlot();
$graphData = new Graph();

$data = $graphData->getData();

$plot->SetDataValues($data);
$plot->SetDataType('text-data-single');
$plot->SetPlotType('pie');

$plot->SetDataColors(array('red', 'green', 'blue', 'yellow', 'cyan',
                        'magenta', 'brown', 'lavender', 'pink',
                        'gray', 'orange'));

$plot->SetTitle("Cuando se te plantea una nueva tarea que no conoces,\n se te da el tiempo necesario para comprenderla?");

foreach ($data as $row)
  $plot->SetLegend(implode(': ', $row));
# Place the legend in the upper left corner:
$plot->SetLegendPixels(5, 40);

$plot->DrawGraph();
