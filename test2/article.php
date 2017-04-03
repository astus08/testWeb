<?php
    $idArticle = $_GET['article_ID'];

    $connect = mysqli_connect("localhost", "dev", "dev", "test");

    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    $query = "  SELECT articles.ID, articles.title, articles.content FROM articles
                WHERE articles.ID = ". $idArticle.";";

    $result = $connect->query($query);

    $artTitle;
    $artContent;

    if ($result->num_rows==1){
        $r = $result->fetch_assoc();
        $artTitle = $r["title"];
        $artContent = $r["content"];
    } else {
        echo "0 results";
    }

    mysqli_close($connect);

?>

<!DOCTYPE HTML>
<html lang="fr" ng-app="myApp">

    <head>
        <meta charset="utf-8">
        <title>Article : <?php echo $artTitle;?></title>
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
        <h1><?php echo $artTitle;?></h1>
        <?php echo $artContent;?>
    </body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</html>