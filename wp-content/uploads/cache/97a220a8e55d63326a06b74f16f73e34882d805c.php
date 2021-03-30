<header>
  <div class="bg-primary text-white text-center py-2 text-xs">
      We are currently enrolling for you Holistic Lyme Clinic, held August 10th - 12th. For more information, click HERE.
  </div>
  <div class="inner-container py-5 lg:py-10">
    <img class="mx-auto w-full" src="<?php echo get_site_url(); ?>/wp-content/themes/NourishingLife/resources/assets/images/logo.png" alt="<?php echo e(get_bloginfo('name', 'display')); ?>">
  </div>
  <nav class="nav-primary border-t border-b border-primary">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
</header>