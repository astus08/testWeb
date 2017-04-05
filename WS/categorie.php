<table>
    <thead>
        <tr>
            <td>#</td>
            <td>Nom</td>
            <td>Update</td>
            <td>Delete</td>
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
            echo "<td>". $row["id"] ."</td>";
            echo "<td>". $row["nom"] ."</td>";
            echo "<td><input type=\"button\" name=\"delete\" class=\"btn-delete\"></td>";
            echo "<td><input type=\"button\" name=\"update\" class=\"btn-update\"></td>";
            echo "</tr>";
            $index++;
        }
        ?>
    </tbody>
</table>