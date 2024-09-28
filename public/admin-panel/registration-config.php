
<?php
require('../../resources/config.php');
// Delete products if delete button is clicked
	if (isset($_GET['del'])) {

		$id 			= $_GET['del'];
		$edit_state 	= true;

		$query = "DELETE FROM `registration` WHERE id = '$id' LIMIT 1";
		$result = $link -> query($query);

		deleteMessage($result, 'registration.php');
	}
?>