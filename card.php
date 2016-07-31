<?php

class Card
{
    private $suit;
    private $value;

    function __construct()
    {
        $this->suit = random_int(1,4);
	$this->value = random_int(1,13);
    }
    function createCardWithValues($suit,$value)
    {
        $this->suit = $suit;
	$this->value = $value;
    }

    function setCard($new_suit, $new_value)

        $this->suit = $new_suit;
	$this->value = $new_value;
    }
  
    function getSuit()
    {
         return $this->suit;
    }
    
    function getValue()
    {
         return $this->value;
    }



}
