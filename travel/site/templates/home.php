<?php snippet('header') ?>

	<body class="main gf">

		<nav class="grid">
			<ul class="top row">
<?php foreach($pages->find('trip')->children()->visible()->flip()->limit(3) as $item): ?>
				<a href="<?php echo $item->url() ?>" class="zone" <?php if($item->headerImage() != ''): ?>
                style="background-image: url(<?php echo thumb($item->files()->find($item->headerImage()), array('width' => 1280, 'quality' => 75))->url() ?>);"
                <?php endif ?>>
					<li>
						<h1 <?php if($item->headerFont() != ''): ?>
                    style="font-family: '<?php echo str_replace('+', ' ', $item->headerFont()) ?>'; font-weight:normal"
                <?php endif ?>><?php echo html($item->title()) ?></h1>
						<time datetime="<?php echo $item->date('Y-m-d') ?>"><?php echo html($item->date('d.m.Y')) ?></time>
					</li>
				</a>
<?php endforeach ?>
			</ul>
		</nav>

		<p class="tag"></p>

<?php snippet('footer-scripts') ?>