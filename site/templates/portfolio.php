<?php snippet('header') ?>

	<?php snippet('menu') ?>

	<main role="main">

<?php if($page->hasImages()): ?> 
<ul class="gallery">
  <?php foreach($page->images() as $image): ?>
  <li><img src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" alt="<?php echo $image->name() ?>" /></li>
  <?php endforeach ?>
</ul>
<?php endif ?>

	</main>

<?php snippet('footer') ?>