<?php
require_once 'globals.php';

/**
 * Counts points from the two cards given in argument
 * @param string $card1 : value of first card ('K' or 'A7' or '10']
 * @param string $card2
 * @return int
 */
function countPoints(string $card1, string $card2) :int{
    
    // if both cards are heads or oudlers, or one of each
    // points can't be counted because one strong card always needs to be counted with a basic one (basic trump or basic cards that are not heads)
    if ($card1 === '' 
        || $card2 === '' 
        || (in_array($card1, $heads)    && in_array($card2, $heads))
        || (in_array($card1, $oudlers)  && in_array($card2, $oudlers))
        || (in_array($card1, $oudlers)  && in_array($card2, $heads))
        || (in_array($card1, $heads)    && in_array($card2, $oudlers))
    ) { return CARDS_VALUE_ERROR; }
    
    $bothCardValue  = getCardValue($card1) + getCardValue($card2);
    
    // if both cards' value is 0, it means we are dealing with 2 basic cards
    // so their cumulated value should be 1 point
    return $bothCardValue === BASIC_CARD_VALUE ? TWO_BASIC_CARDS_RESULT : $bothCardValue;
}

/**
 * return a single's card value (0 if basic card)
 * @param string $card : card
 * @return int : card's value in points
 */
function getCardValue(string $card) :int{
    
    switch ($card) {
        
        // kings are worth 5 points
        case HEAD_KING:
            $cardValue = HEAD_KING_VALUE;
            break;
        
        // queens are worth 4 points
        case HEAD_QUEEN:
            $cardValue = HEAD_QUEEN_VALUE;
            break;
        
        // cavaliers are worth 3 points
        case HEAD_CAVALIER:
            $cardValue = HEAD_CAVALIER_VALUE;
            break;
        
        // jacks are worth 2 points
        case HEAD_JACK:
            $cardValue = HEAD_JACK_VALUE;
            break;
        
        // oudlers are always 5 points worth, basic cards are 0 points worth
        // even tough two basic cards are worth 1 point, but we don't need this here
        // since we work with a single card
        default: 
           $cardValue = in_array($card, $oudlers) ? OUDLER_VALUE : BASIC_CARD_VALUE; 
    }
    
    return $cardValue;
}

/**
 * Returns an html <p> tag with error or success class, containing both card values, the result and the expected result
 * @param string $class
 * @param string $card1
 * @param string $card2
 * @param int $result
 * @param int $expectedResult
 * @return string
 */
function generateTestResultLine(string $card1, string $card2, int $result, int $expectedResult) :string {
    return sprintf(
        '<p class="%s">Résultat pour les cartes %s et %s : %d (résultat attendu : %d)</p>'
        , $expectedResult === $result ? CLASS_SUCCESS : CLASS_ERROR
        , $card1
        , $card2
        , $result
        , $expectedResult
    );        
}