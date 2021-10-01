
<?php
//Função responsável por criar uma nova linha na tabela


function linha($semana)
{   
    $hoje = date('d');
    echo "<tr>";
    for ($i = 0; $i < 7; $i++){
        if(isset($semana[$i])){
            if($semana[$i] == $hoje){
                echo "<td><b>{$semana[$i]}</b></td>";
            } 
            else{
                echo "<td>{$semana[$i]}</td>";
            }
        }
        else{
            echo "<td></td>";
        }
    }
    echo "</tr>";
}
//Função responsável por desenhar o calendário
function calendario()
{
    //Iniciando no dia primeiro
    $dia = 1;
    //Array utilizado para inserir os dias da semana
    $semana = array();

    //While repetindo até o dia 31
    while ($dia <= 31){
        array_push($semana, $dia);

        //Garantindo que não haja mais de 7 dias
        if(count($semana) == 7){
            linha($semana);
            $semana = array();
        }
        
        $dia++;
    }
    linha($semana);
}
?>
<table border="1">
    <tr>
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sáb</th>
    </tr>
    <?php calendario(); ?>
</table>
