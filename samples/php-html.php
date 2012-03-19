<?php // Some WordPress code

require_once(ABSPATH . WPINC . '/atomlib.php');

$_SERVER['PATH_INFO'] = preg_replace( '/.*\/wp-app\.php/', '', $_SERVER['REQUEST_URI'] );

/**
 * Retrieve entries URL.
 *
 * @since 2.2.0
 *
 * @param int $page Page ID.
 * @return string
 */
function get_entries_url($page = null) {
	if ( isset($GLOBALS['post_type']) && ( $GLOBALS['post_type'] == 'attachment' ) )
		$path = $this->MEDIA_PATH;
	else
		$path = $this->ENTRIES_PATH;
	$url = $this->app_base . $path;
	if ( isset($page) && is_int($page) )
		$url .= "/$page";
	return $url;
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<title>Hello World</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!-- Comment -->
	<a href="#" id="logo"><img src="#" alt="Logo"></a>

	<h1>Hello <?php echo $name; ?></h1>
	<p>Lorem ipsum dolor sit amet, consectetur &amp; adipisicing elit
	sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</body>
</html>