<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='apple-touch-icon' sizes='57x57' href='assets/ico/apple-icon-57x57.png'>
<link rel='apple-touch-icon' sizes='60x60' href='assets/ico/apple-icon-60x60.png'>
<link rel='apple-touch-icon' sizes='72x72' href='assets/ico/apple-icon-72x72.png'>
<link rel='apple-touch-icon' sizes='76x76' href='assets/ico/apple-icon-76x76.png'>
<link rel='apple-touch-icon' sizes='114x114' href='assets/ico/apple-icon-114x114.png'>
<link rel='apple-touch-icon' sizes='120x120' href='assets/ico/apple-icon-120x120.png'>
<link rel='apple-touch-icon' sizes='144x144' href='assets/ico/apple-icon-144x144.png'>
<link rel='apple-touch-icon' sizes='152x152' href='assets/ico/apple-icon-152x152.png'>
<link rel='apple-touch-icon' sizes='180x180' href='assets/ico/apple-icon-180x180.png'>
<link rel='icon' type='image/png' sizes='192x192'  href='/android-icon-192x192.png'>
<link rel='icon' type='image/png' sizes='32x32' href='assets/ico/favicon-32x32.png'>
<link rel='icon' type='image/png' sizes='96x96' href='assets/ico/favicon-96x96.png'>
<link rel='icon' type='image/png' sizes='16x16' href='assets/ico/favicon-16x16.png'>
<link rel='manifest' href='/manifest.json'>
<meta name='msapplication-TileColor' content='#ffffff'>
<meta name='msapplication-TileImage' content='/ms-icon-144x144.png'>
<meta name='theme-color' content='#ffffff'>
<title><?php echo $pageTitle ?></title>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
<link rel='stylesheet' href='../css/style.css'>
</head>
<body>
<div class='container'>
<header>
<h1><?php echo $pageTitle ?></h1>
<span><?php echo $pageTags ?></span>
</header>
<?php echo $pageContent ?>
</div>
</body>
</html>