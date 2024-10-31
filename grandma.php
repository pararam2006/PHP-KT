<?php
$byeCounter = 0;
echo "ЧЕГО СКАЗАТЬ-ТО ХОТЕЛ, МИЛОК?! \n";
while (true) {
    $randomYear = rand(1930, 1950);
    $input = mb_strtolower(readline());
    // echo "Введено: '$input'\n";
    if (preg_match('/^пока!$/i', $input)) {
        $byeCounter++;
        if ($byeCounter == 3) {
            echo "ДО СВИДАНИЯ, МИЛЫЙ!\n";
            break;
        } else {
            echo "НЕТ, НИ РАЗУ С $randomYear ГОДА!\n";
        }
    } elseif (!preg_match('/^.*!$/', $input)) {
        echo "АСЬ?! ГОВОРИ ГРОМЧЕ, ВНУЧЕК!\n";
        $byeCounter = 0;
    } else {
        echo "НЕТ, НИ РАЗУ С $randomYear ГОДА!\n";
        $byeCounter = 0;
    }
}