<?php

//include_once '../../models/produits/CathegorieProd.php';
include_once '../../config.php';

class CathProdController{
    private $error;
    function ajouterCathProd($CathProd){
        
        $conn = config::getConnexion();
        $sql = "INSERT INTO cathegorie (type_animal,designation) VALUES (:typeAnimal, :designation)";

        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':typeAnimal', $CathProd->getTypeAnimal());
            $req->bindValue(':designation', $CathProd->getDesignationCath());
            $req->execute();
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }

    function getAllCathProd(){
        $conn = config::getConnexion();
        $sql = "SELECT * FROM cathegorie";

        try {
            $result=$conn->query($sql);
            $row = $result->fetchAll(PDO::FETCH_ASSOC);
            return $row;
            if(!empty($row)){
                return $row[0];
            }
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }

    function deleteCath($idCath){
        $conn = config::getConnexion();
        $sql = "DELETE FROM cathegorie WHERE id_cath=:idCath";
        
        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':idCath', $idCath);
            $req->execute();
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }

    function getCathByID($idCath){
        $conn = config::getConnexion();
        $sql = "SELECT * FROM cathegorie WHERE id_cath=:idCath";

        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':idCath', $idCath);
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
            if(count($result)>1){
                 $this->error = "erreur";
                 return $this->error;
            }
            return $result;
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
    function getCathByTypeAnimal($typeAnimal){
        $conn = config::getConnexion();
        $sql = "SELECT * FROM cathegorie WHERE type_animal=:typeCath";

        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':typeCath', $typeAnimal);
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }

    function updateCath($CathProd, $idCath){
        $conn = config::getConnexion();
        $sql="UPDATE cathegorie SET designation=:designation, type_animal=:typeAnimal   WHERE id_cath=:idCath";

        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':idCath', $idCath);
            $req->bindValue(':typeAnimal', $CathProd->getTypeAnimal());
            $req->bindValue(':designation', $CathProd->getDesignationCath());
            $req->execute();
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }

    function unique($data){
        $conn = config::getConnexion();
        $sql = "SELECT * FROM cathegorie WHERE designation=:desgn";
        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':desgn', $data);
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);

            return count($result);
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
}

?>