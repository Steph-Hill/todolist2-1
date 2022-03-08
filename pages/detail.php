<br>
<H1>detail actu</H1>

<?php

    if (isset($_GET["id"])) {

            $rqActu = $mysqli->query("SELECT * FROM `actu` WHERE id = '".$_GET["id"]."'") ;

            //var_dump($rqActu);

            if ($rqActu->num_rows>0) {

$row = $rqActu->fetch_assoc()
?>
            <h2><?php echo $row["title"]; ?></h2>
            <h2><?php echo $row["description"]; ?></h2>
<?php

                //nombre de resultat que ma requete a relevé
                //verifie le contenu
        } else {
                echo "Actu introuvable !";
                # code...
            }

?>                
            
<?php            
        
    } else {
        echo "Actu introuvable !";
    }//end if id
    

?>