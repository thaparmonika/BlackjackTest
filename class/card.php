<?php 

class Card
{
	protected $suit;
	protected $face;

	public function __construct($suit, $face) {
		if (!$this->chkSuit($suit)) {
			throw new InvalidArgumentException('Suit value is not valid.');
		}

		if (!$this->chkFace($face)) {
			throw new InvalidArgumentException('Face value is not valid.');
		}

		$this->suit = strtoupper($suit);
		$this->face = strtoupper($face);
	}

	public function chkSuit($suit) {
		$suits = array('S', 'C', 'D', 'H');
		return in_array(strtoupper($suit), $suits);
	}
 	public function chkFace($face) {
		$faces = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A');
		return in_array(strtoupper($face), $faces);
	}

	public function get_value() {
		switch ($this->face) {
			case 'A' :
				$value = 11;
				break;
			case 'J':
			case 'Q':
			case 'K':
				$value = 10;
				break;
			default:
				$value = $this->face;
				break;
		}

		return $value;
	}

	public function get_suit() {
		return $this->suit;
	}

	public function get_face() {
		return $this->face;
	}
 
	public function __toString() {
		return $this->suit . ' - ' . $this->face;
	}

}
