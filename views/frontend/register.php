<?php 
 
 require_once '../../controllers/utilisateurs/UtilisateurC.php';


    $error = "";
     $message ="";
    // create user
     
    // create an instance of the controller
      $userC = new UtilisateurC();      
    if (isset($_POST["nomReg"]) &&  isset($_POST["passReg"]) && isset($_POST["emailReg"])) 
    {
        if (!empty($_POST["nomReg"]) && !empty($_POST["passReg"]) && !empty($_POST["emailReg"]))    
             {
                  $textFile = ['png', 'jpg','jpeg','bmp'];
                  $text = 0;
                  $file = pathinfo($_FILES['imageReg']['name']);
                  if(isset($file['extension']))
                  {
                    if (isset($file['extension'], $textFile) && $_FILES['imageReg']['size'] <= 5000000)
                    $text = 1;
                    if($text)
                    {
                      $localFile = '../../images/';
                      $pathImage = $localFile . strtolower(str_replace(' ', '',$_POST["nomReg"]) . '.' . $file['extension']);
                      move_uploaded_file($_FILES['imageReg']['tmp_name'], $pathImage);
                      
                      $user = new Utilisateur(1, $_POST['nomReg'], $_POST['passReg'], $_POST['emailReg'], $pathImage);

                     

                

                       ini_set("SMTP","smtp.gmail.com");
                       ini_set("sendmail_from","naturalist2a6@gmail.com");
                       ini_set("smtp_port",587);
                       $subject = "Confirmation d'Inscription";
                       $message = 'Cher '.$_POST['nomReg'].',
                                   Vous etes desormais inscrit dans notre site web Naturalia';
                       $head = 'From:naturalist2a6@gmail.com' . "\r\n" .
                                  'Reply-To: $email' . "\r\n" .
                                  'X-Mailer: PHP/' . phpversion();
                      if(mail($_POST['emailReg'], $subject, $message, $head))
                         {
                         echo 'Email envoyé avec succès à '.$_POST['emailReg'].' ...';
                         }
                       else 
                         {
                          echo "Échec de l'envoi de l'email...";
                         }
         
                              
                       $userC->ajouterUtilisateur($user);
                       $_SESSION['nom']  = $_POST["nomReg"];
                       header('Location: my-account.php');
                    }
                  }          
           
           }
    }
 ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:23:39 GMT -->
<?php include 'head.php'; ?>

<body class="">
	<div class="site-wrapper">
	
<?php include 'header.php'; ?>
								


<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Register</li>
    </ol>
  </div>
</nav>


<section class="contact-page-section overflow-hidden">

	 <main class="page-section pb--10 pt--50">
		<div class="container">
			<header class="entry-header">
				<h1 class="entry-title">My Account</h1>
			</header>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
					<form action="" method="post" enctype="multipart/form-data">
						<h4 class="login-title">Register</h4>
						<div class="login-form">
							<div class="row">
								<div class="col-md-12 col-12 mb--20">
									<label>Username</label>
									<input type="text" class="mb-0" name ="nomReg" id="nom"  placeholder="Username" required/>
								</div>
								<div class="col-md-12 col-12 mb--20">
									<label>Email Address</label>
									<input type="email" class="mb-0" name="emailReg" placeholder="name@example.com"  id="email" required="*@*.*"/>
								</div>
								<div class="col-12 mb--20">
									<label>Password</label>
									<input type="password" class="mb-0" name="passReg" placeholder="Password"  id="password" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
								</div>
                               
                
                <div class="col-12 mb--20">
                  <label>Image</label>
                  <input type="hidden" name= "MAX_FILE_SIZE" value="5000000" />
                <input type="file"  name="imageReg" /> 
                </div>
							

							<p> Vous avez un compte? <a href="login-register.php" class="pass-lost mt-3">Sign in</a></p>
						</div>
	           <button type="submit" class="btn btn-black   mr-3"><span>Register</span></button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</main>

   
</section>

  
  
 <?php include 'footer.php'; ?> 

<script src="js/plugins.js"></script>
<script src="js/ajax-mail.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>

<script src="js/custom.js"></script>
  <script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
</body>


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:25:02 GMT -->
</html>