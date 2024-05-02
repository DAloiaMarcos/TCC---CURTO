<?php 
include "PHP/topo.php"
?>

<div class="meio">
    <?php 
        if (isset($_GET['p'])){
            switch($p){
                case 1: 
                    include "PHP/meio.php";
                    include "PHP/rodape.php";
                    break;
                case 2:
                    include "PHP/login.php"; 
                    break;
                case 3:
                    include "PHP/cadastro.php";   
                    break;
                default: 
                    include "PHP/meio.php";
                    include "PHP/rodape.php";
                    break;        
            }
        }
        else{
            include "PHP/meio.php";
        }

    ?>
</div>



