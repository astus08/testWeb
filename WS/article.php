<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Catégorie</th>
            <th>Nom</th>
            <th>Stock</th>
            <th>Prix</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('coBDD.php');

        $index = 1;

        foreach(singleton::getInstance()->query("   SELECT produit.id, categorie.nom AS categorie, produit.nom, ' ', produit.prix  FROM produit
                                                    INNER JOIN categorie ON
                                                        produit.categorieId = categorie.id
                                                    ;") as $row) {
            echo "<tr>";
            echo "<th>". $index ."</th>";
            echo "<th>". $row["categorie"] ."</th>";
            echo "<th>". $row["nom"] ."</th>";
            echo "<th></th>";
            echo "<th>". $row["prix"] ."</th>";
            echo "  <th>
                        <form action=\"index.php\">
                            <input type=\"submit\" name=\"delete\" class=\"btn-update\" value=\"\">

                            <input type=\"text\" name=\"page\" value=\"articles\" class=\"display-none\">
                            <input type=\"text\" name=\"action\" value=\"update\" class=\"display-none\">
                            <input type=\"text\" name=\"id\" value=\"". $row["id"] ."\" class=\"display-none\">
                        </form>
                    </th>";
            echo "  <th>
                        <form action=\"index.php\">
                            <input type=\"submit\" name=\"delete\" class=\"btn-delete\" value=\"\">

                            <input type=\"text\" name=\"page\" value=\"articles\" class=\"display-none\">
                            <input type=\"text\" name=\"action\" value=\"delete\" class=\"display-none\">
                            <input type=\"text\" name=\"id\" value=\"". $row["id"] ."\" class=\"display-none\">
                        </form>
                    </th>";
            echo "</tr>";
            $index++;
        }
        ?>
    </tbody>
</table>

<input type="text" name="categorie" value="" placeholder="Catégorie" id="cat-field">
<input type="text" name="name" value="" placeholder="Nome" id="name-field">
<input type="text" name="price" value="" placeholder="Prix" id="price-field">
<input type="button" name="add" class="btn-add" value="Add">

<br>

