<?php include "header.php"; ?>

<?php
// session_start();
// session_unset();
// session_destroy();
	if (isset($_SESSION['user_id']))
	{
		include 'views/cards.php';
		include 'views/card.php';
	}
	else
	{
		include 'views/login.php';
	}
?>

<?php include "footer.php" ?>
