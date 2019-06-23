<?
namespace menu;

function menuLinks($array) {
	$str = '';
	foreach ($array as $links) {
		$str .= '<li';
		$str .= ($_SERVER['REQUEST_URI'] == $links['path'])	? ' class="active">' : '>';
		$str .= '<a href="' . $links['path'] . '">' . $links['title'] . '</a>' . '</li>';
	}
	return $str;
}

function makeNormalArrayView($array, $direction = true) {
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

function getMenu($array, $vers = true, $type = '') {
	$menuSorted = makeNormalArrayView($array, $vers);
	$str = '<ul class="main-menu';
	$str .= ($type) ? ' ' . $type . '">' : '">';
	$str .= menuLinks($menuSorted);
	$str .= '</ul>';
	return $str;
}