<?php include_partial('lyMediaAsset/assets') ?>
<table height="100%" width="100%" class="media">
  <tr>
    <td>
      <div align="center">
        <?php echo image_tag('/'.$filename); ?>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <div align="center">
        <strong>Relative URL :</strong>
        <input type="text" value="/<?php echo $filename; ?>"
               disabled="true" />
      </div>
    </td>
  </tr>
</table>
