<?php 
  session_start();
  include_once '../../controllers/produits/produitsController.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
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
                <li><a href="#">Cathégorie</a></li>
                <li><a href="#">Animal</a></li>
                <li class="active"><a href="produits.html">Produits</a></li>
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
                <li class="breadcrumb-item active"><a href="produits.html">Produits</a></li>
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
        // var_dump($_SESSION['message']);
        // die("je suis là");
          if(isset($_SESSION['message'])):
        ?>
      <div class="alert-msg alert alert-<?=$_SESSION['msg_type'];?>">
      <p class="alert-msg">
        <?php echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
      </p>
      </div>
      <?php endif ?>
        <div class="container-fluid">
          <div class="row">
          <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand btn btn-primary btnSpecial" href="ajouterProduits.php">Ajouter</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" id="search_text" type="search" placeholder="Search" aria-label="Search">
              </form>
            </div>
          </nav>
          </div>
          <h1 class="titre1">GERER VOS PRODUITS</h1>
          <table class="table  table-hover" id="table_data">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Cathégorie</th>
                <th scope="col">Désignation</th>
                <th scope="col">Marque</th>
                <th scope="col">Quantité</th>
                <th scope="col">Prix Achat</th>
                <th scope="col">Prix vente</th>
                <th scope="col">Disponibilité</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <?php
              $prodCtrl = new ProduitCtrl();
              $rows = $prodCtrl->getAllProd();
              $i=1;
              foreach($rows as $row) :
            ?>
              <tbody>
                <td><?=$i++;?></td>
                
                <td><?=$row['cathegorie']; ?></td>
                <td><?=$row['designation']; ?></td>
                <td><?=$row['marque']; ?></td>
                <td><?=$row['quantiteStock'];?></td>
                <td><?=$row['prix_achat'];?> &#36;</td>
                <td><?=$row['prix_vente'];?> &#36;</td>
                <td>
                  <?php 
                  if($row['quantiteStock']>0):
                  ?>
                  <i class="fas fa-check"></i>
                  <?php else :?>
                    <i class="fas fa-times"></i>
                  <?php endif ?>
                </td>
                <td>
                    <a href="../../public/util/processProd.php?edit=<?php echo $row['id_produit'] ?>">
                      <i class="far fa-edit"></i>
                    </a>  
                    <a href="../../public/util/processProd.php?delete=<?php echo $row['id_produit'] ?>">
                      <i class="fas fa-trash-alt"></i> 
                    </a>
                </td>
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
              <p>Design by <a href="#" class="external">Naturalists</a></p>
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
    <!-- <script src="js/front.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#search_text").keyup(function(){
                var search = $(this).val();
                $.ajax({
                    url:'../../public/util/processProd.php',
                    method:'get',
                    data:{query:search},
                    success:function(response){
                      console.log("response: " + response);

                        $("#table_data").html(response);
                    },
                    error:function(response){
                        alert(response);
                        console.log('reponse:'+ response);
                    }
                });
            });
        });
  </script>
  </body>
</html>