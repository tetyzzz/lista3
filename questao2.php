<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Questão 2</title>
    </head>
    <body>
        <?php
            function primos($primo){
                $cont=0;
                for ($i=1; $i<= $primo; $i++){
                    if ($primo % $i ==0){
                        $cont++;
                    }
                }
                if ($cont<=2){
                    echo $primo."Número primo<br> ";
                }else{
                    echo $primo."Número Composto<br>";
                }
            }
            
                
            function osprimos () {
                for ($i=0; $i<=99; $i++){
                    primos($i);
                }
            }
            
            osprimos();
		?>
    </body>
</html>

