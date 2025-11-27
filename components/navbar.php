<header id="masthead" class="site-header absolute w-full top-0 z-50">
    <div class="absolute top-0 left-0 right-0 h-1 bg-[#FB0106] z-40"></div>

    <div class="container mx-auto px-4">

        <div class="mt-4 md:mt-6">

            <nav class="flex justify-between items-center">

                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Strona główna Top Pear">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/main-page/logo/logo.png"
                            alt="Top Pear Logo" class="size-[128px]">
                    </a>
                </div>

                <div class="menu-links hidden md:block">
                    <?php
                    if (has_nav_menu('primary')):
                        wp_nav_menu([
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'main-menu flex space-x-12 font-semibold',
                            'menu_id' => 'primary-menu',
                        ]);
                    endif;
                    ?>
                </div>

                <div class="actions flex items-center">

                    <a href="tel: +48513797196" class="hidden sm:flex items-center space-x-2 rounded-full px-4 py-2">
                        <svg class="size-[28px] text-[#FB0106]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class=""
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        <span class="font-semibold">+48 513 797 196</span>
                    </a>

                </div>
            </nav>
        </div>
    </div>
</header>