<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>

    <?php if (!$sticky): ?>
      <?php if ($page && $title): ?>
      <header>
        <h2<?php print $title_attributes; ?>>
        </h2>
      </header>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($display_submitted): ?>
      <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
      <?php endif; ?>  
    <?php else: ?>
        <?php if ($page && $title): ?>
          <header>
            <h1<?php print $title_attributes; ?>>AAA<?php print $content['product:field_date']['#object']->title;
 ?></h1>
          </header>
          <?php endif; ?>
      <?php print render($title_suffix); ?>
    <?php endif; ?>
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_city']);
      print render($content);
    ?>
  </div>
  <div class="clearfix">
      <?php if(!$sticky): ?>
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>
      <?php endif; ?>
    <?php print render($content['comments']); ?>
  </div>
</article>