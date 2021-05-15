<?php 
session_start();
include_once '../../controllers/blog/blogC.php';

$blogC = new blogC();
$commentaireC = new CommentaireC();
$listeU=$blogC->afficherBlogg();

    $listeR=$commentaireC->getAllCommentaire();


if(isset($_POST['search']))
{
  $listeU=$blogC->rechercherBlog($_POST['valueToSearch']);
}
 
if(isset($_POST['search1']))
{
  $listeR=$commentaireC->recherchercommentaire($_POST['valueToSearch1']);
}
    
 
if(isset($_POST['DSC']))
{ 
  $listeR=$commentaireC->tridsc();
}
 
if(isset($_POST['ASC']))
{ 
  $listeR=$commentaireC->triasc();
}

if(isset($_POST['DSCU']))
{ 
  $listeU=$blogC->tridscu();
}
 
if(isset($_POST['ASCU']))
{ 
  $listeU=$blogC->triascu();
}


?>

<?php require './header.php'; ?>
    <!-- Side Navbar -->
    <?php require './sideNavBar.php'?>
    <div class="page">
      <!-- navbar-->
      <?php require './headerContent.php'; ?>
      <div class="breadcrumb-holder">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active"><a href="produits.html">Blog</a></li>
              </ul>
            </div>
        </div>          
        </div>
      </div>  
      <section>
        <div> 
        <?php
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
          <!-- formulaire ajouter produit-->
          <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand btn btn-primary btnSpecial" href="ajouterBlog.php">Ajouter</a>
            <a class="navbar-brand btn btn-primary btnSpecial" href="rechercherBlog.php">Rechercher</a>
            
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              
            </div>
          </nav>
          <h1 class="titre1">GERER VOTRE BLOG</h1>
          
          
              <div class="card-body"  >
              <div class="table responsive" >
          <table class="table table-hover" id="table_data">
            <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">NOM BLOG</th>
              <th scope="col">DATE CREATION</th>
              <th scope="col">ID-BLOG</th>
              <th scope="col">ACTION</th>
            </tr>
            </thead>
            <?php
              $blogC = new blogC();
              $rows = $blogC->getAllBlog();
              // var_dump($rows);
              // die("je suis là");
              $i=1;
              foreach($rows as $row):
            ?>
              <tbody>
                  <tr>
                    <td><?=$i++;?></td>
                    <td><?=$row['nom_blog'];?></td>
                    <td><?=$row['date_blog'];?></td>
                    <td><?=$row['id_blog'];?></td>
                    <td>
                      <a href="../../public/util/processBlog.php?edit=<?php echo $row['id_blog'] ?>">
                          <i class="far fa-edit"></i>
                      </a>  
                      <a href="../../public/util/processBlog.php?delete=<?php echo $row['id_blog'] ?>">
                          <i class="fas fa-trash-alt"></i>  
                      </a>
                    </td>
                </tr>
              </tbody>
            <?php endforeach ?>
          </table>
          </div>
          </div>
        </div>
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2020</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    < src="vendor/jquery/jquery.min.js"></>
    < src="vendor/bootstrap/js/bootstrap.bundle.min.js"></>
    < src="js/grasp_mobile_progress_circle-1.0.0.min.js"></>
    < src="vendor/jquery.cookie/jquery.cookie.js"> </>
    < src="vendor/chart.js/Chart.min.js"></>
    < src="vendor/jquery-validation/jquery.validate.min.js"></>
    < src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></>
    < src="js/charts-home.js"></>
    <!-- Main File-->
    
  </body>
</html> 