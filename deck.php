<?php

class CardDeck {
const DECK_SIZE=50;


private $realDeck = array(); private $testDeck = array();

function __construct() {

$is_fully_created = false;
$number_of_cards_created= 0;

while ($is_fully_created == false && $number_of_cards_created < DECK_SIZE)
{
	$temp_card = new Card();

	if (checkIfCardIsInDeck($temp_card))
	{

	}
	else
	{
		$realDeck.push($temp_card);
	}



}


}//end of function __construct() {


function checkIfCardIsInDeck($card_to_be_checked)
{
  $matched = false;

/*Check to see if the card deck is empty, which if that is the case
  automatically we know that there will be no match so function 
  returns false.*/
  if ($realDeck.sizeOf() == 0)
  {
    return false;
  }
  else
  {
/*Compares current card to all cards within the realDeck array to assure there
  are no duplicate cards.  If any duplicate is found the function will retrun 
  true. */
  for($i = 0; $i <= $realDeck.sizeOf(); $i++)
  {
    if ($card_to_be_checked.getSuit() == $realDeck[$i].getSuit() &&  
          $card_to_be_checked.getValue() == $realDeck[$i].getValue())  
      {
  	return true;
      }

    }
  }

/*If the deck array is not empty  and the card is not duplicated we return false.*/
  return false;

}//end of function checkIfCardIsInDeck($card_to_be_checked)


}//end of class CardDeck()




?>
