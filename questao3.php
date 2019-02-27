<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Questão 3</title>
    </head>
    <body>
        
            <?php
            $color = array(
                "Rosa",
                "Verde",
                "Preto",
            );
            
            function lista_de_cores ($vetor){ 
                for ($i=0; $i < count($vetor) ; $i++){
                 
            ?>

            <li>
                <?php 
                    echo $vetor[$i]; 
                ?>
            </li>
            <?php 
                }
            }
            ?>
            <ul>
            <?php
                lista_de_cores($color);
            ?> 
            </ul>    
    </body>
</html>
