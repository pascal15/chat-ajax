<?php
try{
    $bdd=new PDO('mysql:host=localhost;dbname=membre','root','');
    if(!empty($_POST['nom']) and !empty($_POST['message'])){
        $req=$bdd->prepare('INSERT INTO chat(nom,message) VALUES(:nom,:message)');
        $req->execute([
        'nom'=>$_POST['nom'],
        'message'=>$_POST['message']
    ]);
    }else{
        echo " <span class='return'> type file</span>";
    }
    
}catch( Exception $e){
    die('erreur:'.$e->getmessage());
}
