<?
	CModule::IncludeModule('iblock');

	$arResult['COLOR'] = isset($arResult['PROPERTIES']['COLOR']['VALUE']) ? $arResult['PROPERTIES']['COLOR']['VALUE'] : 'blue';

	$end = new DateTime($arResult['PROPERTIES']['END']['VALUE']);
	$begin = new DateTime($arResult['PROPERTIES']['BEGIN']['VALUE']);
	$firstDay = $begin->format('d.m.Y');
	$arResult['DATES'] = [];
	do {
		$date = $begin->format('d.m.Y');
		$arResult['DATES'][$date] = FormatDate('j F', $begin->getTimestamp());
		$begin->modify('+1 day');
	} while ($begin < $end);

	$arParams['DATE'] = isset($arParams['DATE']) ? $arParams['DATE'] : $firstDay;

	// set`s dates for filtering events
	$begin = new DateTime($arParams['DATE']);
	$beginFormated = $begin->format('Y-m-d') . ' 00:00:00';
	$begin->modify('+1 day');
	$endFormated = $begin->format('Y-m-d') . ' 00:00:00';
	$arParams['FILTER'] = [
		'>=PROPERTY_begin' => $beginFormated,
		'<PROPERTY_begin' => $endFormated
	];
?>