<div id='container'>

<?php

//Pour récupérer les données de la db
//Et pouvoir les utiliser dans le html / js
//(je suis pas sûre que ce soit ça qu'il faille faire haha mais bon ça marche)



	$schools = array();

	$sql= "SELECT cygle_ecole, nom_ecole, num_livre, titre, auteur, description, height, width, design, access FROM selection ORDER BY RAND() ";
	$data = $conn->query($sql);


	if ($data->num_rows > 0) {


		while ($row = $data->fetch_object() ){
	        // print_r( $row );

	        $schools[$row->access] = $row->cygle_ecole.' '.$row->nom_ecole;
	        
	        ?>
				<div class='box'>
               <a class="selection_link" href="selection.html" onclick="document.getElementById('frame').src=this.href; return false;">
                  <div class="livre" data-ville="<?php echo $row->access ?>" style="width: <?php echo $row->width.'px' ?>; height: <?php echo $row->height.'px' ?>;">
                     <h4><?php echo $row->titre ?>
                     <br/><?php echo $row->auteur ?>
                     <br/><?php echo $row->design ?></h4>
                  </div>
               </a>
				</div>
			<?php 
	    }
	} 

	$schools = array_unique($schools);


// $conn->close();
?>
</div>


<ul id="selection">
	<li class="titre"><h4>Sélection de :</h4><li>

	<?php foreach($schools as $ville=>$school){ ?>

		<li id='<?php echo $ville; ?>'><?php echo $school; ?></li>
	
	<?php } ?>

</ul>
