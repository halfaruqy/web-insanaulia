<?php

get_header(); ?>

<!-- Main Content of the page -->
<main class="flex flex-col gap-16 sm:gap-24 md:gap-32">
    <!-- Section: Hero -->
    <section
      class="flex h-max items-center justify-center bg-[linear-gradient(to_top,rgba(161,66,11,0.65),rgba(70,26,4,0.65)),url('http://insan-aulia.local/wp-content/uploads/2024/05/insanaulia-building-and-student-scaled.jpg')] bg-cover bg-center py-16 lg:pt-4">
      <!-- Container section content -->
      <div
        class="flex flex-col items-center justify-center gap-4 px-8 py-8 text-primary-50 md:max-w-xl md:px-0"
      >
        <span
          class="mt-8 block cursor-default bg-primary-800 px-4 text-center uppercase"
          >Blog Page</span
        >
        <h1
          class="w-full cursor-default text-center text-4xl font-bold leading-[1.05] max-xl:w-5/6 max-md:w-11/12 xl:text-5xl xl:leading-[1.1]"
        >
          Mencetak Generasi Sholeh & Cerdas
        </h1>
        <p
          class="mt-8 px-8 text-center text-primary-100 sm:px-4 md:px-0 lg:text-lg"
        >
          Mitra orang tua untuk mencetak sumber daya manusia unggulan dan
          berkualitas demi membangun peradaban dunia yang lebih baik dan
          mulia.
        </p>
        <div
          class="mt-8 flex items-center justify-center gap-4 md:justify-start"
        >
          <a
            class="rounded-sm bg-primary-600 px-[18px] py-[10px] font-bold text-primary-50 shadow-md transition duration-150 ease-in-out hover:bg-primary-100 hover:text-primary-700 hover:shadow-lg"
            href="#cta"
            >PPDB Online</a
          >
          <a
            class="group rounded-sm border-2 border-primary-600 px-4 py-2 font-bold text-primary-50 shadow-md transition duration-150 ease-in-out hover:bg-primary-100 hover:text-primary-700 hover:shadow-lg"
            href="#tentang-kami"
            >Tentang Kami &darr;</a
          >
        </div>
      </div>
    </section>
    <?php
      while(have_posts(  )) {
        the_post(  ); 
        $content = get_the_content();
        $content = str_replace('<p', '<p class="font-medium"', $content); }
    ?>
      <article class="flex flex-col px-8 min-w-96 max-w-3xl gap-8">
        <h1 class="font-bold text-xl"><?php the_title(); ?></h1>
        <?php
          echo $content;
        ?>
      </article>
</main>

<?php get_footer();