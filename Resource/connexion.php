<?php
$NomServeur='localhost';
$NomUtilisateur='root';
$password='';

try{
    $con=new PDO("mysql:host=$NomServeur;dbname=portfolio", $NomUtilisateur,$password);
    
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  echo(' ok');

}
catch( PDOException $e){
    echo "Erreur :".$e->getMessage();

}

?>