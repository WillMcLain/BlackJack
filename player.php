<?php

class Player{

	private $name;
	private $hand = array();
	private $moneyTotal;
//-----------------------------------------------------------------------------------------
//Player's Constuctor----------------------------------------------------------------------
//-----------------------------------------------------------------------------------------
	function __construct()
	{
		$this->name = "Player";
		$this->moneyTotal = 0;

	}
//-----------------------------------------------------------------------------------------
//Player's Name Methods--------------------------------------------------------------------
//-----------------------------------------------------------------------------------------
	function getName()
	{
		return $this->name;
	}//end of getName()

	function setName($name)
	{
		$this->name = $name;
	}//end of setName()

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//-----------------------------------------------------------------------------------------
//Player's Money Methods-------------------------------------------------------------------
//-----------------------------------------------------------------------------------------
	function setMoneyTotal($money)
	{
		$this->moneyTotal = $money;
	}//end of setMoneyTotal()

	function getMoneyTotal()
	{
		return $this->moneyTotal;
	}//end of getMoneyTotal()
	
	function loseMoney($amount)
	{
		$this->moneyTotal = $this->moneyTotal - $amount;
	}//end of loseMoney()

	function winMoney($amount)
	{
		$this->moneyTotal = $this->moneyTotal + $amount;
	}//end of winMoney()
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//-----------------------------------------------------------------------------------------
//Player's Hand Methods--------------------------------------------------------------------
//-----------------------------------------------------------------------------------------
	function receiveCard($card)
	{
		array_push($this->hand,$card);
	}//end of receiveCard()

	//There is no need for this function for Blackjack, but could be used 
	//in future card based games.
	function discard(array $cardsToDiscard)
	{
		for($i=0;$i<sizeOf($cardsToDiscard);$i++)
		{
			unset($this->hand[$cardToDiscard[$i]]);
		}
	}//end of discard()
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

}



?>

