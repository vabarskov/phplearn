<?
function dump($array) {
	if ($array) {
		echo "<pre>";
		var_dump($array);
		echo "</pre>";
	} else {
		echo '<p style="color: red;">Array is empty!</p>';
	}
}