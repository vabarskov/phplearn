<?
namespace TitleFunctions;

function GetHeaderName($array) {
	foreach ($array as $links) {
		if ($_SERVER['REQUEST_URI'] == $links['path']) {
			if (strlen($links['title']) > 15) {
				$strHeader = substr($links['title'], 0, 15);
			} else {
				$strHeader = $links['title'];
			}
		}
	}
	if ($strHeader) {
		return $strHeader;
	} else {
		return false;
	}
}