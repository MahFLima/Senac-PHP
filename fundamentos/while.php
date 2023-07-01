<?php
    $x = 0;
    $y = 11;
    $m = 12;
    $month = [
        1 => 'Janeiro',
        2 => 'Fevereiro',
        3 => 'Março',
        4 => 'Abril',
        5 => 'Maio',
        6 => 'Junho',
        7 => 'Julho',
        8 => 'Agosto',
        9 => 'Setembro',
        10 => 'Outubro',
        11 => 'Novembro',
        12 => 'Dezembro',
    ];

    while($x <= 10){
        echo $x * 2 . "\n";
        $x++;
    }

    echo "<br/>";
    echo "<br/>";

    do{
        echo $y * 2 . "\n";
        $y++;
    }while($y <= 10);

    echo "<br/>";
    echo "<br/>";

    for($i = 0; $i <= 10; $i++){
        echo $i * 2 . "\n";
    }

    echo "<br/>";
    echo "<br/>";

    for($i = 10; $i > 0; $i--){
        echo $i * 2 . "\n";
    }

    echo "<br/>";
    echo "<br/>";

    for($i = 1; $i <= sizeof($month); $i++){
        echo $month[$i] . "\n";
    }

    echo "<br/>";
    echo "<br/>";

    while($m >= 1){
        echo $month[$m] . "\n";
        $m--;
    }

    echo "<br/>";
    echo "<br/>";

    foreach($month as $mes){
        echo $mes . "\n";
    }
?>