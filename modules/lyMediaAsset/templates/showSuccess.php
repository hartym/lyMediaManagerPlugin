<?php include_partial('lyMediaAsset/assets') ?>
<div>
  <?php echo thumbnail_image_tag($asset, $asset->getFolder()->getRelativePath(), 'medium', 'alt=asset title=' . $asset->getTitle()); ?>
</div>

<div>
  <strong>Relative :</strong> <?php echo image_path('/'.$filename, true); ?>
</div>
<div>
  <strong>Absolute :</strong> <?php echo image_path('/'.$filename, true); ?>
</div>
