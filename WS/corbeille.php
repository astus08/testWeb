<!DOCTYPE HTML>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Corbeille</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>


    <?php
        if (isset($_GET['name']) && $_GET['name']!=""){
            $connect = mysqli_connect("localhost", "dev", "dev", "test");

            if (isset($_GET['site']) && $_GET['site']!="") {
                $ip = $_GET['site'];
                
                if (mysqli_num_rows(mysqli_query($connect, "SELECT * FROM redirect WHERE name = '".$_GET["name"]."'")) >= 1) { // On check si on peut modifier au moins un enregistrement
                    $query = "UPDATE redirect SET site='".$_GET['site']."' WHERE name = '".$_GET["name"]."'";
                    if (mysqli_query($connect, $query)) {
                        header("Location: http://".$_GET['site']);
                    } else {
                        echo "Error updating record: " . mysqli_error($conn);
                    }
                } else {
                    $query = $sql = "INSERT INTO redirect (name, site) VALUES ('".$_GET['name']."', '".$_GET['site']."')";
                    if (mysqli_query($connect, $query)) {
                        header("Location: http://".$_GET['site']);
                    } else {
                        echo "Error updating record: " . mysqli_error($conn);
                    }
                }

            } else {
                $query = "SELECT * FROM redirect WHERE name = '".$_GET["name"]."'";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_array($result);

                    $site = $row["site"];

                    if ($site != ''){
                        header("Location: http://".$site);
                    }

                } else if (mysqli_num_rows($result) > 1){
                    echo "internal server error";
                } else if (mysqli_num_rows($result) == 0){
                    echo "marche pas :(";
                }
            }

        }
    ?>

    <body>
        <a href="index.html">WS</a>
        <br>
        <br>

        <div class="exercice">

            <form method="get" action="corbeille.php">
                <input type="text" name="name" id="name"/>
                <input type="submit" value="Go !"/>
                <br>
                <input type="text" name="site" placeholder="Votre site (faccultatif)">
                
            </form>
            
            

        </div>



        <br>

        

    </body>

    <script type="text/javascript" src="js/app.js"></script>
</html>
