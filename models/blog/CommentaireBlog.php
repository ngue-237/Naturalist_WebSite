
<?php
class Commentaire{

    private $nom, $email, $contenu, $id_commentaire;

    function __construct($nom, $email, $contenu, $id_commentaire, $id_du_blog)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->contenu = $contenu;
        $this->id_commentaire = $id_commentaire;
        $this->id_du_blog = $id_du_blog;
    }

    function getNom(){
        return  $this->nom;
    }
    function getemail(){
        return $this->email ;
    }
    function getcontenu(){
        return $this->contenu;
    }
    function getId_commentaire(){
        return $this->id_commentaire;
    }
    function getId_du_blog(){
        return $this->id_du_blog;
    }
    function setNom($nom){
        $this->nom = $nom;
    }

    function setContenus($contenu){
        $this->contenu = $contenu;
    }
    function setImgBlog($email){
        $this->email = $email;
    }
}

?>