<?php

get_header(); ?>

<!-- Main Content of the page -->
<main class="flex flex-col gap-16 sm:gap-24 md:gap-32">
    <!-- Section: Hero -->
    <section
      class="flex h-1/6 items-center justify-center bg-[linear-gradient(to_top,rgba(161,66,11,0.65),rgba(70,26,4,0.65)),url('http://insan-aulia.local/wp-content/uploads/2024/05/insanaulia-building-and-student-scaled.jpg')] bg-cover bg-center py-8">
      <!-- Container section content -->
      <div
        class="flex flex-col items-center justify-center gap-4 px-8 py-8 text-primary-50 md:max-w-xl md:px-0"
      >
        <span
          class="mt-8 block cursor-default bg-primary-800 px-4 text-center uppercase"
          >Blog Insan Aulia</span
        >
        <h1
          class="w-full cursor-default text-center text-xl font-bold leading-[1.05] xl:text-3xl xl:leading-[1.1]"
        >
          Seputar Pendidikan Anak <br> usia Sekolah Dasar
        </h1>
      </div>
    </section>
    
    <section class="flex flex-col px-8 min-w-96 max-w-3xl gap-8">
      <?php
        $args = array(
          'child_of' => get_top_ancestor_id(),
          'title_li' => ''
        ); 
        $parent_array = array('post_parent' => get_the_ID());
        $children = get_children( $parent_array );
        if( !empty($children) || $post->post_parent > 0) {?> 
          <nav class="flex gap-8 mb-8 border-b border-b-primary-700 pb-4">
            <span class="font-semibold text-primary-700 after:ml-1 after:content-['|']">
              <a href="<?php echo get_the_permalink( get_top_ancestor_id() ); ?>">
                <?php
                  $parent_post = explode(' ',trim(get_the_title( get_top_ancestor_id() )))[0];
                  echo $parent_post;
                ?>
              </a>
            </span>
            <ul class="list-none flex gap-8">
              <?php wp_list_pages( $args ); ?>
            </ul>
          </nav>
      <?php } ?>
      <?php
        while(have_posts()) {
          the_post(  ); 
          $content = get_the_content();
          $content = str_replace('<p', '<p class="font-medium"', $content); 
      ?>
      <article>
        <h2 class="font-bold text-xl">
          <a href="<?php the_permalink() ?>">
            <?php the_title(); ?>
          </a>
        </h2>
      </article>
      <?php } ?>
    </section>
    
</main>

<?php get_footer();