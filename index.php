<?php 
include "PHP/topo.php"
?>
<?php
require_once "conexao.php";
?> 
<div class="mala">
    <?php 
        if (isset($_GET['a'])){
            $a = $_GET['a'];
            switch($a){
                case 1: 
                    include "PHP/meio.php";
                    break;
                case 2:
                    include "PHP/login.php"; 
                    break;
                case 3:
                    include "PHP/cadastro.php";   
                    break;
                case 4:
                    include "PHP/nos.php";
                    break;
                case 5: 
                    include "PHP/cursos.php";
                    break;
                case 6:
                    include "PHP/palestras.php";
                    break;
                default: 
                    include "PHP/meio.php";
                    
                    break;        
            }
        }
    
        else{
            include "PHP/meio.php";
        }

    ?>
</div>  

<div class="absoluta">
        <?php
            include "PHP/rodape.php";
        ?>
</div>


