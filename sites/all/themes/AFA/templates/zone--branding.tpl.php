<?php 
/**
 * @file
 * Alpha's theme implementation to display a zone.
 */
?>
<?php if ($wrapper): ?><div<?php print $attributes; ?>><?php endif; ?>
    <div id="zone-branding-wrapper-inner" class="zone zone-branding zone-branding-wrapper-inner clearfix">
      <div<?php print $content_attributes; ?>>
        <?php print $content; ?>
      </div>
    </div>
<?php if ($wrapper): ?></div><?php endif; ?>