<?php

require_once '../../controllers/produits/animalProdController.php';
require_once '../../models/produits/AnimalProd.php';
$typeAnimal = "";

if($_POST){
  $typeAnimal = $_POST["typeAnimal"];

  $animalProd = new AnimalProd($typeAnimal);
  $animalProdController = new AnimalProdController();
  
  $animalProdController->ajouterAnimalProd($animalProd);
  
}


?>

<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">TYPE ANIMAL</th>
    </tr>
  </thead>
  <?php
  
  $animalProdController = new AnimalProdController();
  
  $result = $animalProdController->getAllAnimalProd();
  var_dump($result);
  foreach($result as $row1){
    
  ?>
    <tbody>
    <tr>
      <td><?=$row1['id_animal'];?></td>
      <td><?=$row1['type_animal'];?></td>
    </tr>
    </tbody>
  <?php
  }
  ?>
  
</table>



<form class="form-size" action="./test.php" method="post">
              <div class="form-group">
                  <label for="exampleInputNom">TYPE ANIMAL</label>
                  <input type="text" name="typeAnimal" class="form-control" id="exampleInputNom" aria-describedby="emailHelp"placeholder="Type d'animal">
              </div>
              <button type="submit" name="ajouterAniProd" class="btn btn-primary">Ajouter</button>
</form>

