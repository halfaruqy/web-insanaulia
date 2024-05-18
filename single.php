<?php
  get_header();
  $current_post = get_the_ID( ); //Current post id
  $page_for_posts = get_option( 'page_for_posts' ); //Blog Page for listing posts
  $blog_parent_page = wp_get_post_parent_id($page_for_posts); //Parent of Blog Page
  $args = array(
    'child_of' => $blog_parent_page,
    'title_li' => ''
  );
?>

<main class="flex flex-col justify-center items-center min-w-96 max-w-2xl gap-8 mx-auto mt-8 px-8 md:px-0">
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
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
      <article class="flex flex-col gap-4">
        <h1 class="font-bold text-xl"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </article>
    <?php }
  } ?>
</main>

<?php get_footer();