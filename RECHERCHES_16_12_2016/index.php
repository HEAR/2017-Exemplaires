<?php include_once('snippets/header.php');?>

<a href="#" class="view_link"><div class="view">
   <iframe id="frame" src="iframe.php" frameborder="0" allowfullscreen>&nbsp;</iframe>
   </div>
</a>

<nav id="title">
   <a href="index.php"><h1>Exemplaires 2017</h1></a>
   <a href="index.php"><h2>Formes et pratiques de l'édition</h2></a>
   <a href="index.php"><h2>30.03 – 01.04.2017</h2></a>
</nav>

<nav id="menu">
   <ul>   
      <a class="livre_link" href="a_propos.html"
         onclick="document.getElementById('frame').src=this.href; return false;">
         <li>À propos</li></a>
      <a class="ecoles_link" href="#"
         onclick="document.getElementById('frame').src=this.href; return false;">
         <li>Programme</li></a>
      <a class="ecoles_link" href="#"
         onclick="document.getElementById('frame').src=this.href; return false;">
         <li>Écoles</li></a>
      <a class="livre_link" href="a_propos.html"
         onclick="document.getElementById('frame').src=this.href; return false;">
         <li>Intervenants</li></a>
      <a class="livre_link" href="a_propos.html"
         onclick="document.getElementById('frame').src=this.href; return false;">
         <li>Accès</li></a>
      <a class="livre_link" href="a_propos.html"
         onclick="document.getElementById('frame').src=this.href; return false;">
         <li>Contact</li></a>
   </ul>    
</nav>

<div class="ecoles_popup">
   <ul>

      <li class="margin">
         <a href="http://www.eesab.fr/" target="_blank">École européenne supérieure d’art de Bretagne</a>
         <br/><a class="selection_link" href="selection.html"
                 onclick="document.getElementById('frame').src=this.href; return false;">
         → sélection</a></li> 

      <li class="margin">
         <a href="http://www.ensba-lyon.fr" target="_blank">École nationale supérieure des beaux-arts de Lyon</a>
         <br/><a class="selection_link" href="selection.html"
                 onclick="document.getElementById('frame').src=this.href; return false;">
         → sélection</a></li> 

      <li class="margin">
         <a href="http://www.erg.be" target="_blank">École de recherche graphique de Bruxelles</a>
         <br/><a class="selection_link" href="selection.html"
                 onclick="document.getElementById('frame').src=this.href; return false;">
         → sélection</a></li> 

      <li class="margin">
         <a href="http://www.esad-gv.fr/fr/" target="_blank">École supérieure d’art et design – Grenoble, Valence</a>
         <br/><a class="selection_link" href="selection.html"
                 onclick="document.getElementById('frame').src=this.href; return false;">
         → sélection</a></li> 

      <li class="margin">
         <a href="http://www.hesge.ch/head/" target="_blank">Haute école d’art et de design – Genève</a>
         <br/><a class="selection_link" href="selection.html"
                 onclick="document.getElementById('frame').src=this.href; return false;">
         → sélection</a></li> 

      <li class="margin">
         <a href="http://www.hear.fr/" target="_blank">Haute école des arts du Rhin</a>
         <br/><a class="selection_link" href="selection.html"
                 onclick="document.getElementById('frame').src=this.href; return false;">
         → sélection</a></li> 

      <li class="margin">
         <a href="http://www.isdat.fr/" target="_blank">Institut supérieur des arts de Toulouse</a>
         <br/><a class="selection_link" href="selection.html"
                 onclick="document.getElementById('frame').src=this.href; return false;">
         → sélection</a></li> 

      <li class="margin">
         <a href="http://www.isba-besancon.fr/" target="_blank">Institut supérieur des Beaux-Arts de Besançon</a>
         <br/><a class="selection_link" href="selection.html"
                 onclick="document.getElementById('frame').src=this.href; return false;">
         → sélection</a></li> 

      <li class="margin">
         <a href="http://www.uqam.ca/" target="_blank">Université du Québec à Montréal</a>
         <br/><a class="selection_link" href="selection.html"
                 onclick="document.getElementById('frame').src=this.href; return false;">
         → sélection</a></li> 
   </ul>
</div>


<?php include ('snippets/selection_db.php'); ?>


<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/mason/js/mason.js"></script> <!-- plug-in mason, core -->
<script src="js/mousewheel.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>
