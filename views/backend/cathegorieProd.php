
<?php
session_start();
include_once '../../controllers/produits/cathegorieProd.php';
include_once '../../controllers/produits/animalProdController.php';

$designationCath=$typeAnimal="";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/formulaire.css">
    
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">

  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Nathan Andrews</h2><span>Web Developer</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">
            <li><a href="index.html"> <i class="icon-home"></i>Home</a></li>
            <li><a href="forms.html"> <i class="icon-form"></i>Forms</a></li>
            <li ><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fab fa-product-hunt"></i></i>Produit </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li class="active"><a href="cathegorieProd.html">Cathégorie</a></li>
                <li><a href="animalProd.html">Animal</a></li>
                <li><a href="produits.html">Produits</a></li>
              </ul>
            </li>
            <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts</a></li>
            <li ><a href="tables.html"> <i class="icon-grid"></i>Tables</a></li>
            </li>
            <li><a href="login.html"> <i class="icon-interface-windows"></i>Login page</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Bootstrap </span><strong class="text-primary">Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                </li>
                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                  
                </li>
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/DE.png" alt="English" class="mr-2"><span>German</span></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/FR.png" alt="English" class="mr-2"><span>French</span></a></li>
                  </ul>
                </li>
                <!-- Log out-->
                <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Cathégories</li>
              </ul>
            </div>
            <div class="col-sm-9">
              
            </div>
        </div>          
        </div>
      </div>
      <section>
        <div>
        <?php
          if(isset($_SESSION['message'])):
        ?>
    <div class=" alert-msg alert alert-msg alert-<?=$_SESSION['msg_type'];?>">
    <p class="alert-msg">
      <?php echo $_SESSION['message'];
          unset($_SESSION['message']);
      ?>
    </p>
  </div>
    <?php endif ?>
        <div class="container-fluid">

          <form class="row g-3 form-size" method="POST" action="../../public/util/processCath.php">
            <div class="col-md-6">
              <label for="inputNomProd" class="form-label">Désignation</label>
              <input type="text" name="inputDesignationCath" value = "<?php echo isset($_GET["designationCath"]) ? $_GET["designationCath"]:'';?>" 
              class="form-control" id="inputNomProd">
            </div>
            <div class="col-md-6">
              <label for="inputMarqueProd" class="form-label">Animaux</label>
              <select id="inputState" class="form-selectProd" value = "<?php echo isset($_GET["typeAnimal"]) ? $_GET["typeAnimal"]:'';?>" name="typeAnimal">
                <?php
                include_once '../../controllers/produits/animalProdController.php';
                  $animalControler = new AnimalProdController();
                  $rows = $animalControler->getAllAnimalProdSelect();
                  foreach($rows as $row):
                    if(isset($_GET["typeAnimal"]) and $_GET["typeAnimal"]==$row['type_animal'])
                    {
                      ?>
                      <option selected > <?=$row['type_animal'];?> </option>
                    <?php
                    }
                    else
                    ?>
                  <option> <?=$row['type_animal'];?> </option>
                <?php
                  endforeach;
                ?>
              </select>
            </div>
            <div class="col-12">
              <?php if(isset($_GET["update"]) and $_GET["update"]==true) :?>

                <input type="hidden" name="idCath" value = "<?php  echo isset($_GET["idCath"]) ? $_GET["idCath"]:'';?>">
                <button type="submit" name ="modifierCath" class="btn btn-primary btn-engrst">Modifier</button>

                <?php else: ?>
                <button type="submit" name ="ajouterCath" class="btn btn-primary btn-engrst">Ajouter</button>
                <?php endif; ?>
            </div>
          </form>
          <table class="table table-hover">
            <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">DESIGNATION</th>
              <th scope="col">TYPE ANIMAL</th>
              <th scope="col">ACTION</th>
            </tr>
            </thead>
            <?php

              $cathProd = new CathProdController();
              $rows = $cathProd->getAllCathProd();
              $i=1;
              foreach($rows as $row):
            ?>
              <tbody>
                  <tr>
                    <td><?=$i++;?></td>
                    <td><?=$row['designation'];?></td>
                    <td><?=$row['type_animal'];?></td>
                    <td>
                      <a href="../../public/util/processCath.php?edit=<?php echo $row['id_cath'] ?>">
                          <i class="far fa-edit"></i>
                      </a>  
                      <a href="../../public/util/processCath.php?delete=<?php echo $row['id_cath'] ?>">
                          <i class="fas fa-trash-alt"></i>  
                      </a>
                    </td>
                </tr>
              </tbody>
            <?php endforeach ?>
          </table>
          <nav aria-label="...">
            <ul class="pagination d-flex flex-row-reverse ">
              <li class="page-item disabled">
                <span class="page-link">Previous</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <span class="page-link">2</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2021</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>

            </div>
          </div>
        </div>
      </footer>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>