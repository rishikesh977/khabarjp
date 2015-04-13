<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?>
<?php if (!empty ($gallery)) : ?>
<div id="gallery">
  <div class="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <img alt="<?php echo $current->alttext ?>" src="<?php echo $current->url; ?>" />
      </div>
    </div>
    <?php if ($prev) : ?>
    <a class="carousel-control left" data-slide="prev" href="<?php echo $prev ?>">&lsaquo;</a>
    <?php endif;?>
    <?php if ($next) : ?>
    <a class="carousel-control right" data-slide="next" href="<?php echo $next ?>">&rsaquo;</a>
    <?php endif;?>
  </div>
  <?php $description = trim($current->description)?>
  <?php if(!empty($description)): ?>
  <div class="text-warning">
    <small>
      <?php echo $description;?>
    </small>
  </div>
  <?php endif; ?>
  <div class="pagination">
    <?php echo $pagination; ?>
  </div>
</div>
<?php endif; ?>
