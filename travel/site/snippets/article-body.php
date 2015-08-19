	<body class="gf">
		<header class="main-header contrast-<?php echo $page->headercontrast() ?>">
			<h1><?php echo $page->title() ?></h1>
			<nav role="navigation">
				<ul class="group">
					<li><a href="<?php echo $site->page('home')->url() ?>" class="home">Home</a></li>
					<li><a href="<?php echo $site->page('trip')->url() ?>" class="arc">Archive</a></li>
				</ul>
			</nav>
		</header> <!-- /header -->

		<article>
		<!-- <article class="crop"> -->
			<header class="js-bg" <?php if($page->headerImage() != ''): ?>
                style="background-image: url(<?php echo thumb($page->images()->find($page->headerImage()), array('width' => 1500, 'quality' => 75))->url() ?>);"
                <?php endif ?>>
				<h1 class="inflate"><div <?php if($page->headerFont() != ''): ?>
                    style="font-family: '<?php echo str_replace('+', ' ', $page->headerFont()) ?>'; font-weight:normal"
                <?php endif ?>><?php echo $page->title() ?></div> <span><?php echo $page->country() ?></span></h1>
			</header>

			<div class="content group">
				<section class="intro group">
					<time datetime="<?php echo $page->date('Y-m-d') ?>"><?php echo $page->date('F Y') ?></time>
					<h1><?php echo $page->introheader() ?></h1>
					<p><?php echo $page->introtext() ?></p>
				</section>
				<section>
					<?php echo kirbytext($page->text()) ?>
				</section>

		<?php if($page->hasImages()): ?>
		<section class="photo">
			<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
                <?php if($image->visible() == "1"): ?>
                    <figure class="group">
                        <img src="<?php echo thumb($image, array('width' => 1000, 'quality' => 75))->url() ?>" alt="<?php echo $image->alt() ?>" class="img-xl">
                        <figcaption><span><?php echo $image->caption() ?></span></figcaption>
                    </figure>
                <?php endif ?>
            <?php endforeach ?>
        </section>
        <?php endif ?>
				
			</div> <!-- /content -->
		</article> <!-- /article -->

		