<?php snippet('header') ?>

	<body class="main">

		<p class="home-btn group"><a href="<?php echo $site->page('home')->url() ?>"><i>&lsaquo;</i> Home</a></p>

		<nav class="archive">
<?php $entry = $pages->find('trip')->children()->visible()->sortBy($sort='date', $dir='desc') ?>
<?php $year = date("Y"); ?>
<?php foreach ($entry as $article): ?>
			<div class="group">
<?php if ($article->date('Y') <= $year) { ?>
<?php $year = $article->date('Y') ?>
		    		<h1><?php echo $year ?></h1>
<?php $year-- ?>
<?php } ?>
				<ul>
					<a href="<?php echo $article->url() ?>">	
					<li>
						<h1><?php echo html($article->title()) ?></h1>
						<time datetime="<?php echo $article->date('Y-m-d') ?>"><?php echo $article->date('d.m.Y') ?></time>
					</li>
					</a>
				</ul>
			</div>
<?php endforeach ?>
		</nav>

<?php snippet('footer-scripts') ?>