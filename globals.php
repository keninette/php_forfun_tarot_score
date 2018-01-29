<?php

global $heads;
global $oudlers;
define('HEAD_KING'              , 'K');
define('HEAD_QUEEN'             , 'Q');
define('HEAD_CAVALIER'          , 'C');
define('HEAD_JACK'              , 'J');
define('HEAD_KING_VALUE'        , 5);
define('HEAD_QUEEN_VALUE'       , 4);
define('HEAD_CAVALIER_VALUE'    , 3);
define('HEAD_JACK_VALUE'        , 2);
define('OUDLER_1'               , 'A1');
define('OUDLER_21'              , 'A21');
define('OUDLER_FOOL'            , 'fool');
define('OUDLER_VALUE'           , 5);
define('BASIC_CARD_VALUE'       , 0);
define('TWO_BASIC_CARDS_RESULT' , 1);
define('CARDS_VALUE_ERROR'      , -1);
define('CLASS_SUCCESS'          , 'success');
define('CLASS_ERROR'            , 'error');

$heads      = [HEAD_KING, HEAD_QUEEN, HEAD_CAVALIER, HEAD_JACK];
$oudlers    = [OUDLER_1, OUDLER_21, OUDLER_FOOL];
