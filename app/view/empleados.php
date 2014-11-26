<?php
include_once('../logic/survey.php');

$survey = new Survey();

?>

<form action="../logic/survey.php" method="post">

<?php 
	echo $survey->getQuestions();
?>
<input type="submit" id="submit" name="submit" value="Submit">
</form>