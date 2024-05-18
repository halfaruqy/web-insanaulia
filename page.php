<?php 

	get_header();

	while(have_posts(  )) {
		the_post(  ); 
		$content = get_the_content();
		$content = str_replace('<p', '<p class="font-medium"', $content); 
		 ?>
		 <main class="flex flex-col justify-center items-center min-w-96 max-w-3xl gap-8 mx-auto">
		 <?php
        $args = array(
          'child_of' => get_top_ancestor_id(),
          'title_li' => ''
        ); 
        $parent_array = array('post_parent' => get_the_ID());
        $children = get_children( $parent_array );
        if( !empty($children) || $post->post_parent > 0) {?> 
          <nav class="flex gap-8 border-b border-b-primary-700 pb-4 mt-8 self-start justify-self-start">
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
			<article class="flex flex-col gap-4">
				<h1 class="font-bold text-xl"><?php the_title(); ?></h1>
				<?php
					echo $content;
				?>
			</article>
		 </main>
		
	<?php }

	get_footer();

?>