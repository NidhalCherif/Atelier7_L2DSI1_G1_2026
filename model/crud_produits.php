<?php
require_once "../config.php";
include "produits.php";
class crud_produits
{
    private $pdo;
    function __construct()
    {
        $obj = new config();
        $this->pdo = $obj->getConnexion(); // objet de la classe PDO
    }

    public function findAll()
    {  // 2 Formuler la requete
        $sql = "select * from produits";
        //3 envoi de la requete
        $res = $this->pdo->query($sql); // le type de $res est PDOStatement

        $LesProduits = $res->fetchAll(PDO::FETCH_NUM);
        return $LesProduits;
    }
    function find($id) {}
    function delete() {}
    function update(produits $p) {}
    function add(produits $p) {}
}
