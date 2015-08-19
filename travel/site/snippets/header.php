<!doctype html>
<html lang="en">
	<head>
        <?php if($page->isHomePage()): ?>
            <title><?php echo $site->title() ?></title>
        <?php else: ?>
            <title><?php echo $page->title() ?> &ndash; <?php echo $site->title() ?></title>
        <?php endif ?>
	  
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
        
		<!-- favicon for browsers -->
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

		<!-- icon for touch-devices -->
		<link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png"/>
		
        <?php echo css(array(
            'assets/css/reset.css',
            'assets/css/screen.css'
        )) ?>
        
        <?php if($page->isHomePage()): ?>
            <?php $fonts = "Source+Sans+Pro:400,600,700,900" ?>
            <?php foreach($pages->find('trip')->children()->visible()->flip()->limit(3) as $item): ?>
                <?php if($item->headerFont() != ''): ?>
                    <?php $fonts .= "|" . str_replace(' ', '+', $item->headerFont()) ?>
                <?php endif ?>
            <?php endforeach ?>        
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=<?php echo $fonts ?>">
        <?php else: ?>
            <?php $fonts = "Source+Sans+Pro:400,600,700,900" ?>
            <?php if($page->headerFont() != ''): ?>
                <?php $fonts .= "|" . str_replace(' ', '+', $page->headerFont()) ?>
            <?php endif ?>
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=<?php echo $fonts ?>">
        <?php endif ?>

        
        
        
        
		<!--[if lt IE 9]>
		<?php echo css('assets/css/ie.css') ?>
		<![endif]-->

		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
