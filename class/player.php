<?php

class Player
{
	protected $id;
    protected $name;
    protected $cards = array();
    
    
    public function __construct($id = 1, $name = null, Array $cards = array()) {
    	$this->id = $id;
    	$this->name = (isset($name)) ? $name : 'Player ' . $id;
    	$this->cards = $cards;
    }
    
    public function add_card(Card $card) {
    	$this->cards[] = $card;
    }
    
    public function getCardsValue() {
    	$total_value = 0;
    	foreach ($this->cards as $card) {
    		$total_value += $card->get_value();
    	}
    	
    	return $total_value;
    }
}
