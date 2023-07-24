
<?php
      include('connexion.php');

if (!empty($_POST)) {

    $nom = checkOutput($_POST['nom']);
    $email= checkOutput($_POST['email']);
    $objet = checkOutput($_POST['objet']);
    $messag= checkOutput($_POST['messag']);
   
    
    try{
      $sql = "INSERT INTO  commentaire (nom,email,objet,Messag)
      VALUES ('$nom ','$email','$objet','$messag')";
      $request= $con->prepare($sql);    
    //  die($sql);
      $request->execute();
       

      echo "<script>  alert('enregistrement effectué');
      location.href='index.html';</script>";
    

    } catch(Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
}

function checkOutput($var){
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;



}


?>
