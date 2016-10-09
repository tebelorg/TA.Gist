<?php
$gist = [
	"interface_automation" => "1d1722fb7feab973576a6e2a02a8da93",
	"contact_virtual_reality" => "740659f1ad86831261d418e55f180a2b",
	"digital-world_problems" => "e67a8c0048e918ce5bc102f8b85bd9ae",
	"credits_and_attribution" => "ab7eb29a2e2fecae95df9b11abd9ba5d",
];

$gist_found = FALSE; foreach ($gist as $gist_name => $gist_id)
	{if ($gist_name == $_GET['show']) $gist_found = TRUE;}
if ($gist_found == FALSE)
	{header("Location: https://github.com/404"); exit;}
?>

<!DOCTYPE HTML>
<html>
<head>
	<?php
	echo "<title>" . ucwords(str_replace("_", " ", $_GET['show']), " -") . "</title>\n";
	echo "<meta property=\"og:image\" content=\"http://tebel.sg/media/" . $_GET['show'] . ".jpeg\" />\n";
	?>
	<meta charset="utf-8" />
	<meta name="description" content="TA helps computers work smarter by automation" />
	<meta name="keywords" content="tebel, automation" />
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=LbGMGBjOw7">
	<link rel="icon" type="image/png" href="/favicon-32x32.png?v=LbGMGBjOw7" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-16x16.png?v=LbGMGBjOw7" sizes="16x16">
	<link rel="manifest" href="/manifest.json?v=LbGMGBjOw7">
	<link rel="mask-icon" href="/safari-pinned-tab.svg?v=LbGMGBjOw7" color="#1e82c9">
	<link rel="shortcut icon" href="/favicon.ico?v=LbGMGBjOw7">
	<meta name="apple-mobile-web-app-title" content="Tebel">
	<meta name="application-name" content="Tebel">
	<meta name="theme-color" content="#ffffff">
</head>

<body style="padding: 0; margin: 0; overflow-y: scroll;">
	<?php
	require_once '../media/Mobile_Detect.php'; $detect = new Mobile_Detect;
	if ($detect->isMobile())
		$icon_size = "float: right; margin: 389px 36px 36px 36px; width: 55px; height: 55px;";
	else
		$icon_size = "float: right; margin: 429px 18px 18px 18px; width: 33px; height: 33px;";

	echo "<header style=\"height: 480px; background: url(../media/" . $_GET['show'] . ".jpeg) no-repeat center; background-size: cover;\">
	<a href=\"http://tebel.org\"><img src=\"../media/tebel_icon.png\" title=\"Home\" style=\"opacity: 0.81; " . $icon_size . "\"></a></header>\n<p></p>\n";

	echo "<script src=\"https://gist.github.com/rallyartist/" . $gist[$_GET['show']] . ".js\"></script>\n";	
	if ($detect->isMobile())
		echo "<link rel=\"stylesheet\" href=\"../css/style_gist_mobile.css\" />\n";
	else
		echo "<link rel=\"stylesheet\" href=\"../css/style_gist_desktop.css\" />\n";
	?>
</body>
</html>