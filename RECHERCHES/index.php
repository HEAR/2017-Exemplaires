<!DOCTYPE html>

<html>

    <?php include 'snippets/header.php';?>


    
<nav>
   
<h1>Exemplaires 2017</h1>
<h2>Formes et pratiques de l'édition</h2>


    <ul>
        
        <Li>
        À propos    
        </Li>
        <Li>
        Écoles participantes   
        </Li>
        <Li>
        Programme
        </Li>
        <Li>
        Accès
        </Li>
        <Li>
        Contact 
        </Li>        
    </ul>    
    
</nav>


   
<div id='container'>
    <?php for($i=0;$i<$nb_livres_selec;$i++) { ?>
    <div class='box'><div class ='un_livre_mon' style='width: <?php echo $mon_w[$i].'px' ?>; height: <?php echo $mon_h[$i].'px' ?>;'></div></div>
    <div class='box'><div class ='un_livre_ren' style='width: <?php echo $ren_w[$i].'px' ?>; height: <?php echo $ren_h[$i].'px' ?>;'></div></div>
    <div class='box'><div class ='un_livre_lyo' style='width: <?php echo $lyo_w[$i].'px' ?>; height: <?php echo $lyo_h[$i].'px' ?>;'></div></div>
    <div class='box'><div class ='un_livre_val' style='width: <?php echo $val_w[$i].'px' ?>; height: <?php echo $val_h[$i].'px' ?>;'></div></div>    
    <div class='box'><div class ='un_livre_str' style='width: <?php echo $str_w[$i].'px' ?>; height: <?php echo $str_h[$i].'px' ?>;'></div></div>    
    <div class='box'><div class ='un_livre_bru' style='width: <?php echo $bru_w[$i].'px' ?>; height: <?php echo $bru_h[$i].'px' ?>;'></div></div>    
    <div class='box'><div class ='un_livre_gen' style='width: <?php echo $gen_w[$i].'px' ?>; height: <?php echo $gen_h[$i].'px' ?>;'></div></div>    
    <div class='box'><div class ='un_livre_tou' style='width: <?php echo $tou_w[$i].'px' ?>; height: <?php echo $tou_h[$i].'px' ?>;'></div></div>    
    <div class='box'><div class ='un_livre_bes' style='width: <?php echo $bes_w[$i].'px' ?>; height: <?php echo $bes_h[$i].'px' ?>;'></div></div>    

<?php } ?>
</div>

<h3>
    Sélection de :
    
    <div id='nom_mon'> UQUAM Montréal, CA</div>
    <div id='nom_ren'> EESAB Rennes, FR</div>
    <div id='nom_lyo'> ENSBA Lyon, FR</div>
    <div id='nom_val'> ESAD Valence, FR</div>
    <div id='nom_str'> HEAR Strasbourg, FR</div>
    <div id='nom_bru'> ERG Bruxelles, BE</div>
    <div id='nom_gen'> HEAD Genève, CH</div>
    <div id='nom_tou'> ISDAT Toulouse, FR</div>
    <div id='nom_bes'> ISBA Besançon, FR</div>



</h3>

<script src="mason/js/mason.js"></script> <!--plug-in mason, core-->
<script src='scripts/my_mason.js'></script>    <!--notre mason > adptation-->
<script src='scripts/change_hover.js'></script> <!--tout ce qui bouge quand hover-->


</body>
</html>

<!--https://www.youtube.com/watch?v=FHixChYgGRI -->
<!--restons cool -->
