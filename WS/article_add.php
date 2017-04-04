<?php
    include('coBDD.php');


    singleton::getInstance()->query("   SELECT produit.id, categorie.nom AS categorie, produit.nom, ' ', produit.prix  FROM produit
                                        INNER JOIN categorie ON
                                            produit.categorieId = categorie.id;");
    

?>
