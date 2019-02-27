<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Questão 1</title>
    </head>
    <body>
        <?php
            $numinicial= 20;
            echo $numinicial. "  ";
            function primos($primo){
                $cont=0;
                for ($i=1; $i<= $primo; $i++){
                    if ($primo % $i ==0){
                        $cont++;
                    }

                }
                if ($cont==2){
                    echo "Número primo";
                }else{
                    echo "Número Composto";
                }
            }
            primos($numinicial);
        ?>
    </body>
</html>
