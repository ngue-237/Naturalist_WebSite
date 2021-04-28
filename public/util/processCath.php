<?php
session_start();

include_once '../../models/produits/CathegorieProd.php';
include_once '../../controllers/produits/cathegorieProd.php';


$cathProdCtrl = new CathProdController();
$designationCath = $typeAnimal="";
$update = false;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if(isset($_POST['ajouterCath'])){

    if(empty($_POST['inputDesignationCath'])){
        $_SESSION['message'] ="some informations required!";
        $_SESSION['msg_type'] = "warning";
        header("location:../../views/backend/cathegorieProd.php");
    }else {
        $result = $cathProdCtrl->unique(test_input($_POST['inputDesignationCath']));
        if($result==1){
            $_SESSION['message'] ="this record already exist!";
            $_SESSION['msg_type'] = "warning";
            header("location:../../views/backend/cathegorieProd.php"); 
        }else{
            $designationCathAjt = test_input($_POST['inputDesignationCath']);
            $typeAnimalAjt = test_input($_POST['typeAnimal']);

            $cathProd = new CathProd($typeAnimalAjt, $designationCathAjt);
            $cathProdCtrl->ajouterCathProd($cathProd);

            $_SESSION['message'] ="record has been saved!";
            $_SESSION['msg_type'] = "success";
        
            header("location:../../views/backend/cathegorieProd.php");
        }
        

    }
    
}

if(isset($_GET['delete']))
{   
    $idCath = $_GET['delete'];
      
    $cathProdCtrl->deleteCath($idCath);
    $_SESSION['message'] = "record has been deleted !";
    $_SESSION['msg_type'] = "danger";
    header("location:../../views/backend/cathegorieProd.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $cathProdCtrl->getCathByID($id);
    $update = true;
    foreach($result as $row){
        $designationCath = $row['designation'];
        $typeAnimal = $row['type_animal'];
        $idCath = $row['id_cath'];
    }

    header("location:../../views/backend/cathegorieProd.php?designationCath=".$designationCath."&typeAnimal="
    .$typeAnimal."&update=".$update."&idCath=".$idCath."");
}

if(isset($_POST['modifierCath'])){

    if(empty($_POST['inputDesignationCath']) || empty($_POST['typeAnimal']) || empty($_POST['idCath'])){
        $_SESSION['message'] ="some informations required!";
        $_SESSION['msg_type'] = "warning";
        header("location:../../views/backend/cathegorieProd.php");
    }else{
        $result = $cathProdCtrl->unique(test_input($_POST['inputDesignationCath']));
        if($result == 1){
            $_SESSION['message'] ="this record already exist!";
            $_SESSION['msg_type'] = "warning";
            header("location:../../views/backend/cathegorieProd.php");
        }else{
            $designationCathMod = test_input($_POST['inputDesignationCath']);
            $typeAnimalMod = test_input($_POST['typeAnimal']);
            $idCath = test_input($_POST['idCath']);

            $_SESSION['message'] ="record has been Modified!";
            $_SESSION['msg_type'] = "success";

            $cathProd = new CathProd($typeAnimalMod,$designationCathMod);
            $cathProdCtrl->updateCath($cathProd, $idCath);

            header("location:../../views/backend/cathegorieProd.php");
        }
        
    }
    
}


?>