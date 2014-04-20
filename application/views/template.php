<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://new.go-films.com/css/style.css">
	<link rel="stylesheet" href="http://new.go-films.com/css/bootstrap.css"> 
        <script type="text/javascript" src="./public/js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="./public/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="span12">
                <?php
                    include Q_PATH.'/application/views/View_'.$view.'.php';
                ?>
            </div>
        </div>
    </body>
</html>