<?php
    $connect = mysqli_connect("localhost", "dev", "dev", "test");

    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    // $query =   "SELECT cours.ID, cours.title, cours.subTitle, cours.logoLink, logoform.className, cours.description
    //             FROM cours 
    //             INNER JOIN logoform ON
    //                 cours.id_form = logoform.ID
    //             ORDER BY cours.ID
    //             LIMIT 8";

    $query = "SELECT cours.ID, cours.title, cours.subTitle, cours.logoLink, logoform.className, cours.description, COUNT(articles.ID_cours) AS nbArticles
FROM cours
INNER JOIN logoform ON
    cours.id_form = logoform.ID
LEFT JOIN articles ON
    cours.ID = articles.ID_cours
GROUP BY cours.ID
ORDER BY cours.ID
LIMIT 8";

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