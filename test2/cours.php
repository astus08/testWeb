<?php
$cours = $_GET['cours'];
?>

<!DOCTYPE HTML>
<html lang="fr" ng-app="myApp">

    <head>
        <meta charset="utf-8">
        <title>Cours : <?php echo $cours; ?></title>
        <link rel="stylesheet" href="css/style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>

    <body>
        <header class="header">
            <a href="index.html" class="logo-click">
                <div class="title">Logo</div>
            </a>
        </header>
        <ul ng-controller="coursCtrl" ng-init="init('<?php echo $cours; ?>')">
            <li class="liste" ng-repeat="article in articleList">
                <form action="article.php">
                    <input type="text" name="article_ID" value={{article.ID}} class="display-none">

                    <label for="art_{{article.ID}}">
                        <input type="submit" id="art_{{article.ID}}" class="display-none">
                        <span>{{article.title}}</span>
                    </label>
                </form>
            </li>
        </ul>
    </body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</html>