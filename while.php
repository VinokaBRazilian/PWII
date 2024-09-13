<?php include "cabecalho"; ?>

<h1>Laço de repetição While</h1>
        <p> O laço de repetição while necessita de 3 itens para se tornar um loop: </p>
        <ol>
            <li>Variável Controladora</li>
            <li>Condição de continuação</li>
            <li>Incremento da variável controladora</li>
        </ol>
        <pre>
            $i = 0; //Declaração da variável controladora
            while( $i < 10 )
            {
                //executo esse bloco de código
                
                //Incrementando a variavel de controle
                $i = $i + 1;
                $i++;
                $i += 1;

            }    
        </pre>
            <p>A derivação Do While obrigatoriamente executa uma vez no minimo o bloco de código </p>
            <pre>
                $i = 0;
                do{
                    $i++;
                }while($i < 10);
            </pre>
                exemplo:
                <?php 
                    $i = 1;
                    while($i < 20)
                    {
                        echo "<h1> $i º h1 </h1>";
                        $i++;
                    }
                ?>

                <p>Outra forma de implementação é:</p>
                <?php 
                    $i = 1;
                    do{
                        ?>
                            <h2> HTML NORMAL </h2>
                            <p> <?php echo $i ; ?>  </p>
                        <?php 
                    $i++;       
                    }while($i < 5);
                ?>

                <?php include "rodape"; ?>