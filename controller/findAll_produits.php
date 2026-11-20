<?php
// appel au modèle
require_once "../model/crud_produits.php";
$crud = new crud_produits();
$LesProduits = $crud->findAll();
include "../view/findAll_produits.php";
