
<h1>Accueil</h1>
<?php


  //selec all result in table

  //SELECT * FROM `actu` ORDER BY `id` DESC

  $resultQueryActu = $mysqli->query("SELECT * FROM `actu` ORDER BY `id` DESC");

  //var_dump($resultQueryActu);
  /*on test si le num_rows > 0
  verif num_rows > 0*/


 if($resultQueryActu->num_rows >0){
   //boucle sur resultQueryActu
   foreach($resultQueryActu as $rowActu){

?>
<p>

      
    
     
     
    <a class="titre substr" href="<?php echo $dir_ws."index.php?mod=detail&id=".$rowActu["title"] ?>">
     <?php echo$rowActu["title"]; ?>
    </a>
    
</p>
<?php
   }
 }else{

?>
pas d'actu !
<?php
 }

?>