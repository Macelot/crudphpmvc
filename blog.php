<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
        <link rel="stylesheet" href="./libs/bootstrap-4.0.0-dist/css/bootstrap.css"> 
        <script src="./libs/jquery/jquery.js"></script>
        <script src="./libs/bootstrap-4.0.0-dist/js/bootstrap.js"></script>
    </head>
    <body>
        <?php
        require './vendor/autoload.php';
        
        use Core\ConfigController as Home;
        $Url = new Home();
        $Url->carregar();


        ?>
    </body>
</html>
