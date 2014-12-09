<?php
include_once('../logic/survey.php');

$survey = new Survey();

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="../../js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="../../js/vendor/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="container">            
            <div class="row">
                <div class="col-md-offset-3 col-md-8"><img src="../logic/graph.php"></div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                <?php echo $survey->getRecomendaciones(1); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6"><img src="../logic/graph2.php"></div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                <?php echo $survey->getRecomendaciones(2); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6"><img src="../logic/graph3.php"></div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                <?php echo $survey->getRecomendaciones(3); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6"><img src="../logic/graph4.php"></div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                <?php echo $survey->getRecomendaciones(4); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6"><img src="../logic/graph5.php"></div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                <?php echo $survey->getRecomendaciones(5); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6"><img src="../logic/graph6.php"></div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                <?php echo $survey->getRecomendaciones(6); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6"><img src="../logic/graph7.php"></div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                <?php echo $survey->getRecomendaciones(7); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6"><img src="../logic/graph8.php"></div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                <?php echo $survey->getRecomendaciones(8); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6"><img src="../logic/graph9.php"></div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                <?php echo $survey->getRecomendaciones(9); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6"><img src="../logic/graph10.php"></div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                <?php echo $survey->getRecomendaciones(10); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6"><img src="../logic/graph11.php"></div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                <?php echo $survey->getRecomendaciones(11); ?>
                </div>
            </div>
        </div>        

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="../../js/plugins.js"></script>
        <script src="../../js/main.js"></script>
    
        
    </body>
</html>




