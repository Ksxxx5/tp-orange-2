<?php
session_start();
require_once("controleur/controleur.php");
$unControleur=new Controleur();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width,
          initial-scale=1.0">
    <title>Orange</title>
    <link rel="stylesheet"
          href="css/style.css">
</head>
<body>
<h1>Orange</h1>
<?php
if( ! isset($_SESSION['email'])){
    require_once("vue/vue_connexion.php");
}

if (isset($_POST['seConnecter']))
{
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $unUser =  $unControleur->Connexion($email,$mdp);
    if($unUser==null){
        echo"<br/> Veuillez vérifier vos identifiants </br>";
    }else{
        $_SESSION['email'] = $unUser['email'];
        $_SESSION['nom'] = $unUser['nom'];
        $_SESSION['prenom'] = $unUser['prenom'];
        $_SESSION['role'] = $unUser['role'];
        header("Location: index.php?page=0");
    }
}

if(isset($_SESSION['email'])){
    echo '
    <br>
    <a href="index.php?page=0"><img src="images/logo.png" height="60" width="60" alt=""></a>
    <a href="index.php?page=1"><img src="images/client.png" height="60" width="60" alt=""></a>
    <a href="index.php?page=2"><img src="images/intervention.png" height="60" width="60" alt=""></a>
    <a href="index.php?page=3"><img src="images/technicien.png" height="60" width="60" alt=""></a>
    <a href="index.php?page=4"><img src="images/materiel.png" height="60" width="60" alt=""></a>
    <a href="index.php?page=5"><img src="images/deconnexion.png" height="60" width="60" alt=""></a>
    
    ';

    if (isset($_GET['page'])) {
        $page=$_GET['page'];
    }else {
        $page=0;
    }
    switch ($page) {
        case '0': require_once("home.php"); break;
        case '1': require_once("client.php"); break;
        case '2': require_once("intervention.php"); break;
        case '3': require_once("technicien.php"); break;
        case '4': require_once("materiel.php"); break;
        case '5': session_destroy();
        header("Location: index.php"); break;
        default : require_once("vue/vue_erreur.php"); break;
    }
   
}
?>
</body>
</html>

