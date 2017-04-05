<table>
    <thead>
        <tr>
            <td>#</td>
            <td>Catégorie</td>
            <td>Nom</td>
            <td>Stock</td>
            <td>Prix</td>
            <td>Update</td>
            <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        <?php
        include('coBDD.php');

        if (isset($_POST['action'])){
            switch ($_POST['action']) {
                case 'Add':
                    
                    if (isset($_POST['categorie']) && isset($_POST['name']) && isset($_POST['price'])){

                        $cat = $_POST['categorie'];
                        $name = $_POST['name'];
                        $prix = $_POST['price'];

                        singleton::getInstance()->addArticle($cat, $name, $prix);
                    }

                    break;
                
                case 'Uptd':
                    if (isset($_POST['categorie']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['id'])){

                        $cat = $_POST['categorie'];
                        $name = $_POST['name'];
                        $prix = $_POST['price'];
                        $id = $_POST['id'];

                        singleton::getInstance()->uptdArticle($cat, $name, $prix, $id);

                    }

                    break;
                
                case 'Suppr':
                    if (isset($_POST['id'])){
                        
                        $id = $_POST['id'];

                        singleton::getInstance()->delArticle($id);
                    }
                    break;

                default:
                    break;
            }
        }



        $index = 1;

        foreach(singleton::getInstance()->query("   SELECT produit.id, categorie.nom AS categorie, produit.nom, ' ', produit.prix  FROM produit
                                                    INNER JOIN categorie ON
                                                        produit.categorieId = categorie.id
                                                    ;") as $row) {
            echo "<tr>";
            echo "<td>". $index ."</td>";
            echo "<td>". $row["categorie"] ."</td>";
            echo "<td>". $row["nom"] ."</td>";
            echo "<td></td>";
            echo "<td>". $row["prix"] ."</td>";
            echo "  <td>
                        <input type=\"button\" class=\"btn-update\" value=\"Uptd\">

                        <input type=\"text\" name=\"id\" value=\"". $row["id"] ."\" class=\"display-none\">
                    </td>";
            echo "  <td>
                        <form action=\"index.php?page=articles\" method=\"post\">
                            <input type=\"submit\" name=\"action\" class=\"btn-delete\" value=\"Suppr\">

                            <input type=\"text\" name=\"id\" value=\"". $row["id"] ."\" class=\"display-none\">
                        </form>
                    </td>";
            echo "</tr>";
            $index++;
        }
        ?>
    </tbody>
</table>

<form action="index.php?page=articles" method="post">

    <input type="text" name="categorie" value="" placeholder="Catégorie">
    <input type="text" name="name" value="" placeholder="Nome">
    <input type="text" name="price" value="" placeholder="Prix">

    <input type="submit" name="action" class="btn-add" value="Add">

</form>

<br>

