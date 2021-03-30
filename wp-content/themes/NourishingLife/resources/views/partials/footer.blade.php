<footer class="outer-container border-t border-primary py-5 lg:py-10">
    <div class="flex flex-col lg:flex-row lg:-mx-10">
        <div class="w-full lg:px-10 lg;w-1/3">
          <?php $contact_me = get_field_object('contact_me', 'options'); ?>
          <h2><?php echo $contact_me['label']; ?></h2>
           <?php the_field('contact_me', 'options'); ?>
        </div>
        <div class="w-full lg:px-10 lg;w-1/3">
          <?php $visit_me = get_field_object('visit_me', 'options'); ?>
          <h2><?php echo $visit_me['label']; ?></h2>
           <?php the_field('visit_me', 'options'); ?>
        </div>
        <div class="w-full lg:px-10 lg;w-1/3">
          <?php $socials = get_field_object('socials', 'options'); ?>
          <h2><?php echo $socials['label']; ?></h2>
          <?php while (have_rows('socials', 'options')) : the_row();
              $social = get_sub_field('social');
              $link = get_sub_field('link');
          ?>
              <a href="<?php echo $link ?>" class="inline text-xl mr-3">
                <i class="fab fa-{{ $social }}"></i>
              </a>
          <?php endwhile; ?>
        </div>
    </div>
</footer>


<footer class="content-info">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
