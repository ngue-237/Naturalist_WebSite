<?php
session_start();
include '../../models/blog/CommentaireBlog.php';
include '../../controllers/blog/BlogC.php';

$CommentaireCtrl = new CommentaireC();
$nom = $email = $contenu =$id_du_blog= $id_commentaire="";
$update = false;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data); 
    return $data;
}


if(isset($_POST['ajouterCommentaire'])){
    $nom = $_POST['nom'];
    $contenu = $_POST['contenu'];
    $email = $_POST['email'];
    $id_du_blog = $_POST['id_du_blog'];
    $commentaire = new Commentaire($nom, $email, $contenu, $id_commentaire, $id_du_blog);
    $commentaireC = new commentaireC();
    $commentaireC->ajouterCommentaire($commentaire);
    header("location:../../views/frontend/blog-details.php?id_blog=$id_du_blog");
}
if(isset($_GET['delete']))
{   
    $idCommentaire = $_GET['delete'];
      
    $CommentaireCtrl->deleteCommentaire($idCommentaire);
    $_SESSION['message'] = "Comment has been deleted !";
    $_SESSION['msg_type'] = "danger";
    header("location:../../views/backend/commentairesDash.php");
}
$output =$result= "";
    if(isset($_GET['query'])){
        $search = $_GET['query'];
        $result = $CommentaireCtrl->liveSearchComm($search);
         var_dump($result);

         die("manger");
}



?>