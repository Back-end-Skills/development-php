<h1>Calcular o tempo entre duas dates PHP</h1>
<?php
$entrada = new DateTime("2028-05-30 09:00:00");
$saida = new DateTime("2022-05-30 15:10:00");

echo "<br>";

echo "Entrada: " . $entrada->format('d/m/Y H:i:s') . "<br>";
echo "Saída: " . $saida->format('d/m/Y H:i:s') . "<br>";

$intervalo = $entrada->diff($saida);
// var_dump($intervalo);

echo "<br>";

//calcular o tempo entre duas datas
echo $intervalo->y . " anos, " . $intervalo->m . " meses "
. $intervalo->d . " dias <br>";

echo "<hr>";

//Total de dias
echo $intervalo->days ." dias <br><br>";

echo "<hr>";


$entrada_b = new DateTime("2022-05-30 09:10:00");
$saida_b = new DateTime("2022-05-30 15:10:00");

//Obter o intervalo em segundos
echo $saida_b->getTimestamp() - $entrada_b->getTimestamp() . " Segundos <br>";

echo "<hr>";

//Obter o intervalo em minutos
echo ($saida_b->getTimestamp() - $entrada_b->getTimestamp()) / 60 . " Minutos <br>";

echo "<hr>";

//Obter o intervalo em horas
echo (($saida_b->getTimestamp() - $entrada_b->getTimestamp()) / 60) / 60 . " Horas <br>";


