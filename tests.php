<?php
require_once 'function.php';
require_once 'globals.php';
$tests = '';

// both cards are worth 0 points, cumulated points should equal 1
$card1 = '5';
$card2 = 'A';
$tests .= generateTestResultLine($card1, $card2, countPoints($card1, $card2), TWO_BASIC_CARDS_RESULT);

// both cards are worth 0 points, cumulated points should equal 1
$card1 = 'A6';
$card2 = 'A20';
$tests .= generateTestResultLine($card1, $card2, countPoints($card1, $card2), TWO_BASIC_CARDS_RESULT);

// both cards are heads, cumulated points should equal -1
$card1 = HEAD_KING;
$card2 = HEAD_QUEEN;
$tests .= generateTestResultLine($card1, $card2, countPoints($card1, $card2), CARDS_VALUE_ERROR);

// both cards are oudlers, cumulated points should equal -1
$card1 = OUDLER_1;
$card2 = OUDLER_FOOL;
$tests .= generateTestResultLine($card1, $card2, countPoints($card1, $card2), CARDS_VALUE_ERROR);

// one card id a head, the other is an oudler, cumulated points should equal -1
$card1 = HEAD_JACK;
$card2 = OUDLER_FOOL;
$tests .= generateTestResultLine($card1, $card2, countPoints($card1, $card2), CARDS_VALUE_ERROR);

// one card id a head, the other is an oudler, cumulated points should equal -1
$card1 = OUDLER_21;
$card2 = HEAD_CAVALIER;
$tests .= generateTestResultLine($card1, $card2, countPoints($card1, $card2), CARDS_VALUE_ERROR);

// one card is a basic card, the other one is a head, result should be head's value
$card1 = 'A';
$card2 = HEAD_KING;
$tests .= generateTestResultLine($card1, $card2, countPoints($card1, $card2), HEAD_KING_VALUE);

// one card is a basic card, the other one is a head, result should be head's value
$card1 = 'A20';
$card2 = HEAD_QUEEN;
$tests .= generateTestResultLine($card1, $card2, countPoints($card1, $card2), HEAD_QUEEN_VALUE);

// one card is a basic card, the other one is a head, result should be head's value
$card1 = 'A20';
$card2 = HEAD_CAVALIER;
$tests .= generateTestResultLine($card1, $card2, countPoints($card1, $card2), HEAD_CAVALIER_VALUE);

// one card is a basic card, the other one is a head, result should be head's value
$card1 = '9';
$card2 = HEAD_JACK;
$tests .= generateTestResultLine($card1, $card2, countPoints($card1, $card2), HEAD_JACK_VALUE);

// one card is a basic card, the other one is a head, result should be head's value
$card1 = HEAD_KING;
$card2 = 'A';
$tests .= generateTestResultLine($card1, $card2, countPoints($card1, $card2), HEAD_KING_VALUE);

// one card is a basic card, the other one is a head, result should be head's value
$card1 = HEAD_QUEEN;
$card2 = 'A20';
$tests .= generateTestResultLine($card1, $card2, countPoints($card1, $card2), HEAD_QUEEN_VALUE);

// one card is a basic card, the other one is a head, result should be head's value
$card1 = HEAD_CAVALIER;
$card2 = 'A10';
$tests .= generateTestResultLine($card1, $card2, countPoints($card1, $card2), HEAD_CAVALIER_VALUE);

// one card is a basic card, the other one is a head, result should be head's value
$card1 = HEAD_JACK;
$card2 = '9';
$tests .= generateTestResultLine($card1, $card2, countPoints($card1, $card2), HEAD_JACK_VALUE);
