<?php


function arrayRandomaiser(int $lenght): array
{
    $array = [];
    for ($i = 0; $i < $lenght; $i++) {
        $array[] = rand(1, 50);
    }
    return $array;
}

$randomArray = arrayRandomaiser(10);

$count = count($randomArray);
$multiplicationResult = 1;
$sumResult = 0;
$countFive = 0;

for ($i = 0; $i < $count; $i++) {
    echo 'array value = ' . $randomArray[$i] . PHP_EOL;
}
for ($i = 0; $i < $count; $i++) {
    $multiplicationResult *= $randomArray[$i];
}

for ($i = 0; $i < $count; $i++) {
    $sumResult += $randomArray[$i];
}

for ($i = 0; $i < $count; $i++) {
    if ($randomArray[$i] === 5) {
        $countFive += 1;
    }
}

echo 'summ result = ' . $sumResult . PHP_EOL;
echo 'multiplication = ' . $multiplicationResult . PHP_EOL;
echo 'number 5 in array = ' . $countFive . PHP_EOL;

for ($i = 0; $i < $count; $i++) {
    if ($randomArray[$i] % 3 === 0) {
        echo 'number divine by 3 = ' . $randomArray[$i] . PHP_EOL;
    }
}



