
<?php
//Função responsável por criar uma nova linha na tabela
function linha()
{
    echo "
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
    ";
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
    <?php linha(); ?>
    <?php linha(); ?>
    <?php linha(); ?>
    <?php linha(); ?>
    <?php linha(); ?>
</table>

