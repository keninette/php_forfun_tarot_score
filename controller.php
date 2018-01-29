<?php
require_once 'globals.php';

$hand       = [HEAD_KING, HEAD_QUEEN, HEAD_CAVALIER, HEAD_JACK, '10', '9', '8', '7', '6', '5', '4', '3', '2', 'A'];
$hearts     = 1;
$spades     = 2;
$clubs      = 3;
$diamonds   = 4;
$trumps     = 5;

$game       = [
    $hearts     => $hand
    , $spades   => $hand
    , $clubs    => $hand
    , $diamonds => $hand
    , $trumps   => [OUDLER_21, 'A20', 'A19', 'A18', 'A17', 'A16', 'A15', 'A14', 'A13', 'A12', 'A11', 'A10', 'A9', 'A8', 'A7', 'A6', 'A5', 'A4', 'A3', 'A2', OUDLER_1, OUDLER_FOOL]    
];

