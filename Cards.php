<?php

/**
 * Cards Class
 */
class Cards 
{
	
	 /**
	  * Generate a hand of cards
	  *
	  * @return array 
	  */
	public function generateHand()
	{
	    $sequences = array(2,3,4,5,6,7,8,9,10,"j","q","k","a");
	    $suites = array('h','c','s','d');
	    $cards = array();

	    foreach ($suites as $suite) {
	        foreach ($sequences as $sequence) {
	            $cards[] = $sequence . $suite;
	        }
	    }

	    shuffle($cards);

	    return array_slice( $cards, rand(0,48), 5 );
	}


	 /**
	  * Check hand of cards using lookup string
	  *
	  * @param array $d a hand of cards with 5 array elements
	  * @return boolean  
	  */
	public function checkHandIfStraight($d)
	{
	    foreach( $d as $c )
	    	$e[] = (int) str_replace(["j","q","k","a"], [11,12,13,0], $c);
	    sort($e);
	    $c = implode("", $e);
	    $l = "c023456789101112130";
	    return (bool) strpos($l, $c);
	}

}
