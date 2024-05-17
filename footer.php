<footer
  class="mt-24 flex flex-col border-t border-t-orange-200 bg-primary-50 px-4 sm:px-8 lg:px-12"
>
  <div
    class="flex flex-wrap items-start justify-start gap-4 py-12 md:flex-nowrap md:justify-center"
  >
    <!-- Navigation - 1 -->
    <nav class="flex basis-[30%] flex-col gap-6 md:order-3 md:basis-full">
      <h2 class="font-bold text-primary-950">Tentang Kami</h2>
        <?php 
          wp_nav_menu(array(
            'theme_location' => 'footer1',
            'menu_class' => 'flex flex-col gap-3 text-sm text-primary-700',
            'container' => '',
            'list_item_class' => 'transition-all hover:text-primary-950',
          ));
        ?>
    </nav>
    <!-- Navigation - 2 -->
    <nav class="flex basis-[30%] flex-col gap-6 md:order-3 md:basis-full">
      <h2 class="font-bold text-primary-950">Informasi</h2>
        <?php 
          wp_nav_menu(array(
            'theme_location' => 'footer2',
            'menu_class' => 'flex flex-col gap-3 text-sm text-primary-700',
            'container' => '',
            'list_item_class' => 'transition-all hover:text-primary-950',
          ));
        ?>
    </nav>
    <!-- Navigation - 3 -->
    <nav class="flex basis-[30%] flex-col gap-6 md:order-3 md:basis-full">
      <h2 class="font-bold text-primary-950">Resources</h2>
        <?php 
          wp_nav_menu(array(
            'theme_location' => 'footer3',
            'menu_class' => 'flex flex-col gap-3 text-sm text-primary-700',
            'container' => '',
            'list_item_class' => 'transition-all hover:text-primary-950',
          ));
        ?>
    </nav>
    <!-- Navigation - 4 -->
    <div
      class="mt-16 flex basis-[45%] flex-col justify-start gap-4 self-stretch md:order-1 md:mt-0 md:basis-full"
    >
      <a href="#" class="block"
        ><img class="h-16" src="http://insan-aulia.local/wp-content/uploads/2024/05/logo-ia.png" alt=""
      /></a>
      <div class="ml-4 flex gap-4">
        <a href="#"
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            class="h5 w-5 fill-primary-500 transition-all hover:fill-secondary-600"
            viewBox="0 0 512 512"
          >
            <path
              d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"
            />
            <path
              d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"
            /></svg
        ></a>
        <a href="#"
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            class="h5 w-5 fill-primary-500 transition-all hover:fill-secondary-600"
            viewBox="0 0 512 512"
          >
            <path
              d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z"
              fill-rule="evenodd"
            /></svg
        ></a>
        <a href="#"
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            class="h5 w-5 fill-primary-500 transition-all hover:fill-secondary-600"
            viewBox="0 0 512 512"
          >
            <path
              d="M496 109.5a201.8 201.8 0 01-56.55 15.3 97.51 97.51 0 0043.33-53.6 197.74 197.74 0 01-62.56 23.5A99.14 99.14 0 00348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 002.54 22.1 280.7 280.7 0 01-203-101.3A95.69 95.69 0 0036 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0135.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 01-25.94 3.4 94.38 94.38 0 01-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0139.5 405.6a203 203 0 01-23.5-1.4A278.68 278.68 0 00166.74 448c181.36 0 280.44-147.7 280.44-275.8 0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 00496 109.5z"
            /></svg
        ></a>
      </div>
    </div>
    <div
      class="ml-4 mt-16 flex basis-[45%] flex-col gap-8 md:order-2 md:mt-0 md:basis-full"
    >
      <h2 class="font-bold text-primary-950">Contact us</h2>
      <address class="flex flex-col gap-6 text-sm text-primary-700">
        <p>
          Jln. An-Nahl No.1, Kel. Mustikajaya, Kec. Mustika Jaya, Kota
          Bekasi, Jawa Barat, 17158
        </p>
        <p>
          <a
            class="transition-all hover:text-gray-950"
            href="tel:+62-825-4305"
            >+62-825-4305</a
          >
          <a
            class="transition-all hover:text-gray-950"
            href="mailto:info@insanaulia.sch.id"
            >info@insanaulia.sch.id</a
          >
        </p>
      </address>
    </div>
  </div>
  <div
    class="flex w-full justify-center border-t border-t-orange-200 py-4 text-primary-800/50"
  >
    <span
      >Copyright &copy; <span id="year-now"></span>. Insan Aulia. All rights
      reserved.</span
    >
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>