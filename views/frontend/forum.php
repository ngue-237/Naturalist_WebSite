<?php 
   
    require_once '../Controller/SujetFmC.php';
   
   require_once '../Controller/UtilisateurC.php';

    $userC = new UtilisateurC();

    $error = "";
     $message ="";
    

      
      $formC = new SujetC();

      $affiche = new SujetC();
      $listeUsers=$affiche->affichersujet();
      
      



    if (isset( $_SESSION['id']) && isset($_POST["speudoR"]) &&  isset($_POST["typeR"]) && isset($_POST["messageR"])) 
    {
        if (!empty($_POST["speudoR"]) && !empty($_POST["typeR"]) && !empty($_POST["messageR"]))
        {


  $form= new Sujet(66,(int) $_SESSION['id'], $_POST["speudoR"],$_POST['typeR'], $_POST['messageR'],date("Y-m-d h:i:sa"));

          $formC->ajoutersujet($form);
        
          }

          else 
          {
             header('Location: login-register.php');
          }
         
      


   }
 
?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:23:39 GMT -->
<?php include 'head.php'; ?>
<link rel="stylesheet" href="css/forumcss.css" />

<body class="">
	<div class="site-wrapper">
	
<?php include 'header.php'; ?>
								


<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Forum</li>
    </ol>
  </div>
</nav>

  <br> 


         <?PHP
        foreach($listeUsers as $sujet)



        {


        	
      ?>
 


                                     
                                        
     
                         
                                
     <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                <div class="card mb-2">
                    <div class="card-body p-2 p-sm-3">
                        <div class="media forum-item">
                            <a  data-toggle="" data-target=".forum-content">
                            	<img src="<?php echo $userC->recupererUtilisateur1($sujet['id_utilisateur'])['image']; ?>" class="mr-3 rounded-circle" width="50" alt="User" /></a>

                            <div class="media-body">
                            	<h6><a  data-toggle="" data-target=".forum-content" class="text-body"> <?php echo $sujet['speudo']; ?></a></h6>
                                <a  data-toggle="" data-target=".forum-content" class="text-body"> <?php echo $sujet['type']; ?></a>
                                <p class="text-secondary">
                                     <?php echo $sujet['message']; ?>
                                </p>
                                <p class="text-muted"><a href="javascript:void(0)"> Poster le :</a>  <span class="text-secondary font-weight-bold"><?php echo $sujet['date_p']; ?></span></p>
                            </div>
                           
                        </div>
                    </div>
                      <form method="post" action="discussion.php">
     <input type="hidden" name="id_sujet" value="<?PHP echo $sujet['id_sujet']; ?>" />
              <input type="submit" name="Repondre" value="Repondre" />            
            </form>  


    i
                </div>



       
                    
        
                            </div>

                           
                        </div>

         
              
                
            <!-- /Forum Detail -->

            <!-- /Inner main body -->
     




      <?PHP
        }
      ?>
            
                    </div>
       

<section class="contact-page-section overflow-hidden">
   


  <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal" style="width:30%">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    NEW DISCUSSION
                </button><br/><br/>


      
            <!-- Forum List -->
            

    <!-- New Thread Modal -->
    <div class="modal fade" id="threadModal" tabindex="-1"  aria-labelledby="threadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">                
                <form action="" method="post" >
                    <div class="modal-header d-flex align-items-center bg-primary text-white">
                        <h6 class="modal-title mb-0" id="threadModalLabel">New Discussion</h6>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <input name ="speudoR" id="speudo" type="text" placeholder="Your speudo..." style="width:77%" class="form-control" required/>
                        </div>
                        <div  class="mb-3">            
                            <select class=" form-control" id="type" name="typeR" style="width:77%" >
                               <option value="Generalités">Generalités</option>    
                                <option value="Critiques">Critiques</option>    
                                <option value="Suggestions">Suggestions</option>    
                                <option value="Produits">Produits </option>    
                            </select>
                        </div>                              
                         <textarea  type="text" id="message" name="messageR" placeholder="message" class="form-control" style="width:77%" style="height:500px"  required></textarea>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


</section>

  
  
 <?php include 'footer.php'; ?> 

<script src="js/plugins.js"></script>
<script src="js/ajax-mail.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>

<script src="js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:25:02 GMT -->
</html>