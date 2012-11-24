<?php
error_reporting(E_ALL);

// q.as_filetype = 'gif' if typeof animated is 'boolean' and animated is true
// q.imgtype = 'face' if typeof faces is 'boolean' and faces is true

$q = trim(preg_replace('/[^a-z0-9-_\.\?]/i', '', strip_tags($_GET['q'])));

if (strlen($q)) {
	$params = array(
		'v'    => '1.0',
		'rsz'  => '8',
		'safe' => 'active',
		'q'    => $q,
	);

	echo file_get_contents('http://ajax.googleapis.com/ajax/services/search/images?'.http_build_query($params));
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Wallee</title>
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
		<link href="http://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet" type="text/css">

		<div id="bg">
			<img id="image" src="/images/pug.jpg" alt="">
		</div>

		<form action="/" method="get">
			<label><input type="text" name="q" value="<?php echo $q;?>" placeholder="Pug"></label>
		</form>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="/js/scripts.js"></script>
    </body>
</html>