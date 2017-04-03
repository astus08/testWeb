<?php
    $cours = $_GET['cours'];

    $connect = mysqli_connect("localhost", "dev", "dev", "test");

    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    $query = "SELECT articles.ID, articles.title FROM articles
    INNER JOIN cours ON
        articles.ID_cours = cours.ID
    WHERE cours.title = '".$cours."'";

    $result = $connect->query($query);

    $rows = array();

    if ($result->num_rows > 0){
        while($r = $result->fetch_assoc()){
            $rows[] = array_map('utf8_encode', $r);
        }
        echo json_encode($rows);
    } else {
        echo "0 results";
    }

    mysqli_close($connect);
?>