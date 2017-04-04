<?php
include('header.php');
?>

<?php

$page = "";
$action = "";
$id = "";

if (isset($_GET['page'])){
    $page = $_GET['page'];
}
if (isset($_GET['action'])){
    $action = $_GET['action'];
}
if (isset($_GET['id'])){
    $id = $_GET['id'];
}

switch ($page) {
    case 'articles':
        include('article.php');
        break;

    case 'categories':
        include('categorie.php');
        break;
    
    default:
        include('article.php');
        break;
}

?>

<?php
include('footer.php');
?>