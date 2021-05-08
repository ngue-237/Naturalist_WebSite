<?php
include_once '../../config.php';
function getAllProd2(){
  $conn = config::getConnexion();
  $sql = "SELECT * FROM panier";

  try {
    $result=$conn->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    if(!empty($rows)){
      return $rows[0];
    }

  } catch (PDOException $e) {
    die('Erreur: '.$e->getMessage());
  }
}
function ajouterProd2($produit){
  foreach ($produit as $key => $mointe) {


    $conn = config::getConnexion();

    $sql = "INSERT INTO panier (id,designation,prix,quantity,image) VALUES (:id_produit,:designation,:prixV   ,:quantiteEnvoyee,:img)";

    try {
      $req = $conn->prepare($sql);
      $req->bindValue(":id_produit", $mointe['id']);
      $req->bindValue(":designation", $mointe['designation']);
      $req->bindValue(":prixV", $mointe['prix']);
      $req->bindValue(":quantiteEnvoyee", $mointe['quantity']);
      $req->bindValue(":img", $mointe['image']);


      $req->execute();
            //die("je suis une erreur");
    } catch (PDOException $e) {
      die('Erreur: '.$e->getMessage());
    }
  } 
}
function deleteProd2(){
  $conn = config::getConnexion();
  $sql = "DELETE FROM panier";

  try {
    $req = $conn->prepare($sql);
    $req->execute();
  } catch (PDOException $e) {
    die('Erreur: '.$e->getMessage());
  }
}
function ajouterProduitPanier($produit,$id,$designation,$prix,$quantite,$image){
//verifier si le panier est vide ou pas
  if (isset($produit)) {
    //isoler la colonne de l'id pour pouvoir associer plus tard 
    $count=count($produit);

    $product_ids= array_column($produit, 'id');
    //verifier si le produit est déjà dans le panier et sinon l'ajouter
    if (!in_array($id,$product_ids)) {
      $produit[$count]=array
      ('id' => $id, 
       'designation' => $designation,
       'prix' => $prix,
       'quantity' => $quantite,
       'image' => $image
     );
    }
    else{
      //associer la clé du tableau à l'id du produit
      for ($i=0; $i < count($product_ids) ; $i++) {
        //verifier si le produit est déjà dans le panier et sioui augmenter sa quantité
        if ($product_ids[$i] == $id) {
          $produit[$i]['quantity'] += $quantite;
        }
      }

    }
  }
  //si le panier est vide ajouter le produit soumis
  else{
    $produit[0]=array
    ('id' => $id, 
     'designation' => $designation,
     'prix' => $prix,
     'quantity' => $quantite,
     'image' => $image
   );

  }
  return $produit;
}

function supprimerProduitPanier($produit,$id){
  
if (isset($produit)) { 
  foreach ($produit as $key => $product) {
    if ($produit[$key]['id'] == $id){
      unset($produit[$key]);

    }
  }$produit=array_values($produit);
  
  return $produit;
}
}

function updateQuantite($quantite,$id){
  $conn = config::getConnexion();
  $query= $conn->prepare("UPDATE panier SET quantity=:qty WHERE id=:pid");
  try{
  $query->bindValue(":qty", $quantite);
  $query->bindValue(":pid", $id);
  $query->execute();
  }catch (PDOException $e) {
    die('Erreur: '.$e->getMessage());
  }
  echo $quantite;
}
$array=array();
$array=json_decode(filter_input(INPUT_POST, 'big'),true);

updateQuantite($array[0]['qty'],$array[0]['pid']);
?>