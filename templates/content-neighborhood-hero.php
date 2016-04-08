<h2 class="neighborhood-hero--heading"><?php the_field('neighborhood_title'); ?></h2>
<p class="neighborhood-hero--content">
  <?php the_field('neighborhood_content'); ?>
</p>
<a href="#" class="map-modal-button primary buttons">check it out</a>
<article class="neighborhood-map-modal">
  <button class="close-map"><svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRatio="none">
      <g class="icon">
        <line x1="4.5" y1="55.5" x2="54.953" y2="5.046"/>
        <line x1="54.953" y1="55.5" x2="4.5" y2="5.047"/>
      </g>
    </svg></button>
  <img class="map" src="<?= get_template_directory_uri(); ?>/assets/images/map.png" alt="map of neighborhood">
</article>
