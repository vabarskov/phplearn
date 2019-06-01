<?
namespace menu;

function MenuLinks($array) {
	$str = '';
	foreach ($array as $links) {
		$str .= '<li';
		$str .= ($_SERVER['REQUEST_URI'] == $links['path'])	? ' class="active">' : '>';
		$str .= '<a href="' . $links['path'] . '">' . $links['title'] . '</a>' . '</li>';
	}
	return $str;
}

function MakeNormalArrayView($array, $direction = true) {
	foreach ($array as $arItem) {
		$newArray[$arItem['sort']] = $arItem;
	}

	if ($direction) {
		ksort($newArray);
	} else {
		krsort($newArray);
	}
	return $newArray;
}

function GetMenu($array, $type = '') {
	$menuSorted = MakeNormalArrayView($array);
	$str = '<ul class="main-menu';
	$str .= ($type) ? ' ' . $type . '">' : '">';
	$str .= MenuLinks($array);
	$str .= '</ul>';
	return $str;
}