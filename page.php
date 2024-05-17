<?php 

	get_header();

	while(have_posts(  )) {
		the_post(  ); 
		$content = get_the_content();
		$content = str_replace('<p', '<p class="font-medium"', $content); 
		 ?>
		 <main class="flex gap-16 sm:gap-24 md:gap-32 justify-center items-center pt-16">
			<article class="flex flex-col px-8 min-w-96 max-w-3xl gap-8">
				<h1 class="font-bold text-xl"><?php the_title(); ?></h1>
				<?php
					echo $content;
				?>
			</article>
		 </main>
		
	<?php }

	get_footer();

?>