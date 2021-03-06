<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/news/(.*)/(.*)/.*#",
		"RULE" => "section=\$1&element=\$2",
		"PATH" => "/news/detail.php",
	),
	array(
		"CONDITION" => "#^/news/(.*)/.*#",
		"RULE" => "section=\$1",
		"PATH" => "/news/section.php",
	),
	array(
		"CONDITION" => "#^/speakers/(.*)/.*#",
		"RULE" => "element=\$1",
		"PATH" => "/speakers/detail.php",
	),
	array(
		"CONDITION" => "#^/(.*)/events/([0-9]+)/.*#",
		"RULE" => "summit=\$1&id=\$2",
		"PATH" => "/summits/events/detail.php",
	),	
	array(
		"CONDITION" => "#^/(.*)/events/(.*)/.*#",
		"RULE" => "summit=\$1&date=\$2",
		"PATH" => "/summits/events/index.php",
	),
	array(
		"CONDITION" => "#^/(.*)/events/.*#",
		"RULE" => "summit=\$1",
		"PATH" => "/summits/events/index.php",
	),
	array(
		"CONDITION" => "#^/(.*)/about/(.*)/.*#",
		"RULE" => "summit=\$1&page=\$2",
		"PATH" => "/summits/page.php",
	),
	array(
		"CONDITION" => "#^/(.*)/about/.*#",
		"RULE" => "summit=\$1",
		"PATH" => "/summits/about.php",
	),
	array(
		"CONDITION" => "#^/(.*)/news/.*#",
		"RULE" => "summit=\$1",
		"PATH" => "/summits/news.php",
	),
	array(
		"CONDITION" => "#^/(.*)/partners/.*#",
		"RULE" => "summit=\$1",
		"PATH" => "/summits/partners.php",
	),
	array(
		"CONDITION" => "#^/(.*)/speakers/.*#",
		"RULE" => "summit=\$1",
		"PATH" => "/summits/speakers.php",
	),
	array(
		"CONDITION" => "#^/(.*)/.*#",
		"RULE" => "summit=\$1",
		"PATH" => "/summits/detail.php",
	),

);

?>
