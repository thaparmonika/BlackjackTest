<?php 

	require_once 'class/card.php';
	require_once 'class/player.php';

	$player = new Player(1);

	foreach ($_POST['cards'] as $key => $posted_card)
	{
		$card = null;
		$card = new Card(substr($posted_card, -1), substr($posted_card, 0, -1));
		$player->add_card($card);
	}

	echo 'Cards value: ' . $player->getCardsValue();
	
	?>
