<?php
class config
{
    private $connexion;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=e_commerce_l2dsi1_g1";
        $username = "root";
        $pw = "";
        try {
            $this->connexion = new PDO($dsn, $username, $pw);
        } catch (PDOException $e) {
            exit("Problème de connexion !!!" . $e->getMessage());
        }
    }
    public function getConnexion()
    {
        return $this->connexion;
    }
}
