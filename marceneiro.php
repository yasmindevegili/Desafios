<?php

    $tamanho_tabua1 = 300;
    $tamanho_tabua2 = 400;
    $tamanho_tabua3 = 500;

    $pedacos_tabua1 = (int)($tamanho_tabua1 / 45);
    $desperdicio_tabua1 = ($tamanho_tabua1 % 45);
    

    print "Foi possível cortar $pedacos_tabua1 da tábua de 3m e sobraram $desperdicio_tabua1 cm de tábua";
