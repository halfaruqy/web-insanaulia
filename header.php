<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(['font-montserrat', 'text-primary-950']); ?>>
    <!-- Basic info -->
    <div
      class="hidden h-max w-full justify-center bg-primary-600 text-sm text-primary-50 lg:flex"
    >
      <div
        class="flex max-w-4xl basis-full items-center justify-between gap-8 py-2 xl:max-w-screen-lg"
      >
        <div class="flex items-center justify-between gap-4">
          <a class="group flex gap-1" href="mailto:info@insanaulia.sch.id">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h5 w-5 stroke-primary-50 transition-all group-hover:stroke-secondary-900"
              viewBox="0 0 512 512"
            >
              <rect
                x="48"
                y="96"
                width="416"
                height="320"
                rx="40"
                ry="40"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="32"
              />
              <path
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="32"
                d="M112 160l144 112 144-112"
              />
            </svg>
            <span class="transition-all group-hover:text-secondary-900"
              >info@insanaulia.sch.id</span
            ></a
          >
          <span>|</span>
          <a class="group flex gap-1" href="tel:+62-825-4305">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h5 w-5 fill-primary-50 transition-all group-hover:fill-secondary-900"
              viewBox="0 0 512 512"
            >
              <path
                d="M414.73 97.1A222.14 222.14 0 00256.94 32C134 32 33.92 131.58 33.87 254a220.61 220.61 0 0029.78 111L32 480l118.25-30.87a223.63 223.63 0 00106.6 27h.09c122.93 0 223-99.59 223.06-222A220.18 220.18 0 00414.73 97.1zM256.94 438.66h-.08a185.75 185.75 0 01-94.36-25.72l-6.77-4-70.17 18.32 18.73-68.09-4.41-7A183.46 183.46 0 0171.53 254c0-101.73 83.21-184.5 185.48-184.5a185 185 0 01185.33 184.64c-.04 101.74-83.21 184.52-185.4 184.52zm101.69-138.19c-5.57-2.78-33-16.2-38.08-18.05s-8.83-2.78-12.54 2.78-14.4 18-17.65 21.75-6.5 4.16-12.07 1.38-23.54-8.63-44.83-27.53c-16.57-14.71-27.75-32.87-31-38.42s-.35-8.56 2.44-11.32c2.51-2.49 5.57-6.48 8.36-9.72s3.72-5.56 5.57-9.26.93-6.94-.46-9.71-12.54-30.08-17.18-41.19c-4.53-10.82-9.12-9.35-12.54-9.52-3.25-.16-7-.2-10.69-.2a20.53 20.53 0 00-14.86 6.94c-5.11 5.56-19.51 19-19.51 46.28s20 53.68 22.76 57.38 39.3 59.73 95.21 83.76a323.11 323.11 0 0031.78 11.68c13.35 4.22 25.5 3.63 35.1 2.2 10.71-1.59 33-13.42 37.63-26.38s4.64-24.06 3.25-26.37-5.11-3.71-10.69-6.48z"
                fill-rule="evenodd"
              />
            </svg>
            <span class="transition-all group-hover:text-secondary-900"
              >+62-825-4305</span
            ></a
          >
          <span>|</span>
          <span class="flex cursor-default gap-1">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h5 w-5 stroke-primary-50"
              viewBox="0 0 512 512"
            >
              <path
                d="M256 64C150 64 64 150 64 256s86 192 192 192 192-86 192-192S362 64 256 64z"
                fill="none"
                stroke-miterlimit="10"
                stroke-width="32"
              />
              <path
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="32"
                d="M256 128v144h96"
              />
            </svg>
            07.00 - 16.00
          </span>
        </div>
        <div class="flex items-center justify-between gap-4">
          <a href="#"
            ><svg
              xmlns="http://www.w3.org/2000/svg"
              class="h5 w-5 fill-primary-50 transition-all hover:fill-secondary-900"
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
              class="h5 w-5 fill-primary-50 transition-all hover:fill-secondary-900"
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
              class="h5 w-5 fill-primary-50 transition-all hover:fill-secondary-900"
              viewBox="0 0 512 512"
            >
              <path
                d="M496 109.5a201.8 201.8 0 01-56.55 15.3 97.51 97.51 0 0043.33-53.6 197.74 197.74 0 01-62.56 23.5A99.14 99.14 0 00348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 002.54 22.1 280.7 280.7 0 01-203-101.3A95.69 95.69 0 0036 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0135.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 01-25.94 3.4 94.38 94.38 0 01-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0139.5 405.6a203 203 0 01-23.5-1.4A278.68 278.68 0 00166.74 448c181.36 0 280.44-147.7 280.44-275.8 0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 00496 109.5z"
              /></svg
          ></a>
        </div>
      </div>
    </div>
    <!-- Header, containing logo and navigation bar -->
    <header
      class="sticky top-0 flex h-max w-full items-center justify-center border-b-2 shadow-xs bg-white"
    >
      <!-- Container -->
      <div
        class="sticky top-0 z-50 flex h-full basis-full items-center justify-between py-2 lg:max-w-4xl xl:max-w-screen-lg"
      >
        <!-- Company log0 -->
        <a href="<?php echo site_url() ?>" class="ml-8 flex lg:ml-0">
          <img
            class="h-16 w-auto"
            alt="Insan Aulia Logo"
            src="http://insan-aulia.local/wp-content/uploads/2024/05/logo-ia.png"
          />
        </a>
        <!-- Navigation bar -->
        <nav
          class="nav pointer-events-none absolute left-0 top-0 flex h-screen w-0 -translate-x-full items-center justify-center font-medium opacity-0 transition-all lg:pointer-events-auto lg:visible lg:static lg:h-8 lg:w-max lg:translate-x-0 lg:justify-end lg:opacity-100 lg:backdrop-blur-none"
        >
        <div class="flex flex-col gap-16 justify-between items-center text-center text-4xl lg:flex-row lg:text-lg">
          <?php 
            wp_nav_menu(array(
              'theme_location' => 'headerMenuLocation',
              'menu_class' => 'flex flex-col gap-8 lg:flex-row',
              'container' => '',
              'link_class' => '',
              'li_class_0' => 'transition-all hover:text-primary-500 relative cursor-pointer',
              'li_class_1' => 'text-sm text-primary-950 hover:text-primary-500 transition-all'
            ));
          ?>
          <a
            class="rounded-sm bg-primary-600 px-5 py-2.5 font-bold text-primary-50 shadow-md transition duration-150 ease-in-out hover:bg-primary-100 hover:text-primary-600 hover:shadow-lg"
            href="#cta"
            >PPDB Online</a>
        </div>
          
        </nav>
        <!-- Mobile navigation button -->
        <div
          class="btn-mobile-nav relative mr-8 block h-8 w-8 cursor-pointer lg:invisible lg:hidden"
        >
          <span
            class="icon-mobile-nav absolute top-1/2 h-[3px] w-8 bg-slate-700 before:absolute before:-top-2 before:h-[3px] before:w-8 before:bg-slate-700 before:transition-all after:absolute after:top-2 after:h-[3px] after:w-8 after:bg-slate-700 after:transition-all"
          ></span>
        </div>
      </div>
    </header>