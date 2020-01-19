<?php
try{
    $bdd=new PDO('mysql:host=localhost;dbname=membre','root','');
    $req=$bdd->query('SELECT * FROM chat ORDER BY id desc');
    while($message=$req->fetch()){
        ?>
        <div class="color" style="background-color:greenyellow;border-radius:10%" >
            <h4><?=$message['nom']?>
            <h4><?=$message['message']?></h4>
        </div>
        <?php
    }
    
    
}catch(Exception $e){
    die('erreur:'.$e->getmessage());
}