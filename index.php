<?php
  get_header(); 
  $page_for_posts = get_option( 'page_for_posts' );
  $blog_parent_page = wp_get_post_parent_id($page_for_posts);
  $args = array(
    'child_of' => $blog_parent_page,
    'title_li' => ''
  );

?>

<!-- Main Content of the page -->
<main class="flex flex-col">
    <!-- Section: Blog Header -->
    <section
      class="flex h-1/6 items-center justify-center bg-[linear-gradient(to_top,rgba(161,66,11,0.65),rgba(70,26,4,0.65)),url('http://insan-aulia.local/wp-content/uploads/2024/05/insanaulia-building-and-student-scaled.jpg')] bg-cover bg-center py-4">
      <!-- Container section content -->
      <div
        class="flex flex-col items-center justify-center gap-4 px-8 py-4 text-primary-50 md:max-w-xl md:px-0"
      >
        <span
          class="mt-4 block cursor-default bg-primary-800 px-4 text-center uppercase"
          >Blog Insan Aulia</span
        >
        <h1
          class="w-full cursor-default text-center text-xl font-bold leading-[1.05] xl:text-3xl xl:leading-[1.1]"
        >
          Seputar Pendidikan Anak <br> usia Sekolah Dasar
        </h1>
      </div>
    </section>
    <!-- Section: Blog List Section -->
    <section class="flex flex-col justify-center items-center min-w-96 max-w-2xl gap-8 mx-auto px-8 md:px-0">
      <nav class="flex gap-8 border-b border-b-primary-700 pb-4 mt-8 self-start justify-self-start">
        <span class="font-semibold text-primary-700 after:ml-1 after:content-['|']">
          <a href="<?php echo get_the_permalink( $blog_parent_page ); ?>">
            <?php
              $parent_post = explode(' ',trim(get_the_title( $blog_parent_page )))[0];
              echo $parent_post;
            ?>
          </a>
        </span>
        <ul class="list-none flex gap-8">
          <?php wp_list_pages( $args ); ?>
        </ul>
      </nav>
      <div class="flex flex-col gap-12 justify-center items-start">
        <?php
          while(have_posts()) {
            the_post(  ); 
            $content = get_the_content();
            $content = str_replace('<p', '<p class="font-medium"', $content); 
        ?>
        <article class="flex flex-col gap-4">
          <h2 class="font-bold text-xl">
            <a href="<?php the_permalink() ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <span class="flex gap-1 py-1 px-4 text-xs text-primary-900 bg-primary-100 w-2/3 md:w-1/2 border border-primary-200">
            Posted by <div class="capitalize font-semibold"><?php the_author_posts_link(); ?></div> on <?php the_time('D, d F Y'); ?>
          </span>
          <p class="flex flex-col gap-2">
            <?php the_excerpt(  ); ?>
            <a class="text-sm underline transition-all text-primary-800 hover:text-primary-600" href="<?php the_permalink( ); ?>">Lanjut membaca &raquo;</a>
          </p>
        </article>
          <?php } ?>
      </div>
    </section>
    
</main>

<?php get_footer();