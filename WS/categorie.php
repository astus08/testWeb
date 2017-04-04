<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('coBDD.php');

        $index = 1;

        foreach(singleton::getInstance()->query("   SELECT categorie.id, categorie.nom FROM categorie
                                                    ORDER BY categorie.id
                                                    ;") as $row) {
            echo "<tr>";
            echo "<th>". $row["id"] ."</th>";
            echo "<th>". $row["nom"] ."</th>";
            echo "<th><input type=\"button\" name=\"delete\" class=\"btn-delete\"></th>";
            echo "<th><input type=\"button\" name=\"update\" class=\"btn-update\"></th>";
            echo "</tr>";
            $index++;
        }
        ?>
    </tbody>
</table>