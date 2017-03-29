<?php
    $connect = mysqli_connect("localhost", "dev", "dev", "test");

    if(isset($_POST["query"])) {
        $output = '';
        $query = "SELECT * FROM tbl_country WHERE country_name LIKE '%".$_POST["query"]."%' ";

        $result = mysqli_query($connect, $query);

        $output = '<ul>';
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)){
                $output .= '<li>'.$row["country_name"].'</li>';
            }
        } else {
            $output .= '<li>Country not found</li>';
        }
        $output .= '</ul>';
        echo $output;
    }

?>