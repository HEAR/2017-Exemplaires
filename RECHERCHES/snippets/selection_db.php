<?php

//Pour récupérer les données de la db
//Et pouvoir les utiliser dans le html / js
//(je suis pas sûre que ce soit ça qu'il faille faire haha mais bon ça marche)

$nb_livres_selec = 6;
$vil=array('mon','ren','lyo','val','str','bru','gen','tou','bes');


for($i=0;$i<count($vil);$i++){
    

    
    $vil_h[$i]=$vil[$i].'_h';
    $vil_w[$i]=$vil[$i].'_w';
    $vil_tit[$i]=$vil[$i].'_tit';
    $vil_aut[$i]=$vil[$i].'_aut';
    $vil_des[$i]=$vil[$i].'_des';
    $vil_alle[$i]=$vil[$i];

    }


for($i=0;$i<count($vil);$i++){

$sql= "SELECT cygle_ecole, nom_ecole, num_livre, titre, auteur, description, height, width FROM selection WHERE num_ecole=$i+1";
$data = $conn->query($sql);

$$vil_h[$i]=array();
$$vil_w[$i]=array();
$$vil_tit[$i]=array();
$$vil_aut[$i]=array();
$$vil_des[$i]=array();


if ($data->num_rows > 0) {
    // output data of each row
    while($row = $data->fetch_assoc()) {

    
    array_push($$vil_h[$i],$row["height"]/2.4);
    array_push($$vil_w[$i],$row["width"]/2.4);
    array_push($$vil_tit[$i],$row["titre"]);
    array_push($$vil_aut[$i],$row["auteur"]);
          
    }
} 

}

//ça donne:
//$mon_h=(x, x, x...) ---> utilisable dans le script de taille des blocs de livres
//$mon_w=(x, x, x...) ---> :)
//....
//puis
//$ren_h=(x, x, x...)
//$ren_w=(x, x, x...)
//ETC ETC

$conn->close();



?>