<?php

$surnames = [
    "Багов",
    "Скриптов",
    "Пикселев",
    "Компиляторов",
    "Серверов",
    "Запросов",
    "Деплоев",
    "Вскодов"
];

$names = [
    "Антон",
    "Денис",
    "Иван",
    "Павел",
    "Аркадий",
    "Василий",
    "Евгений",
    "Иннокентий"
];

$patronymics = [
    "Питонович",
    "Джаваскриптович",
    "Сиплюсович",
    "Ассемблерович",
    "Эйчтиэмэлович",
    "Сиэсэсович",
    "Докерович",
    "Виэселович"
];

function generateCombinations(array $surnames, array $names, array $patronymics): array
{
    $combinations = [];

    foreach ($surnames as $surname) {
        foreach ($names as $name) {
            foreach ($patronymics as $patronymic) {
                $combinations[] = "$surname $name $patronymic";
            }
        }
    }

    return $combinations;
}

$data = generateCombinations($surnames, $names, $patronymics);

echo '<pre>';
print_r($data);
echo '</pre>';
