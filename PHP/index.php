<?php 
include "navbar.php"
?>

<div class="meio">
    <?php 
        if (isset($_GET['p'])){
            switch($p){
                case 1: 
                    include "inicio.php";
                    break;
                case 2:
                    include "login.php"; 
                    break;
                case 3:
                    include "cadastro.php";   
                    break;
                default: 
                    include "inicio.php";
                    break;        
            }
        }
        else{
            include "inicio.php";
        }

    ?>
</div>

<div class="absoluta">
    <?php 
        include "rodape.php";
    ?>
</div>

