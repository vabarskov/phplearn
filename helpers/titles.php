<?
namespace titleFunctions;

function getHeaderName($array, $strLen = 15) {
	foreach ($array as $links) {
		if ($_SERVER['REQUEST_URI'] == $links['path']) {
			if (strlen($links['title']) > $strLen) {
				$strHeader = mb_substr($links['title'], 0, $strLen);
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