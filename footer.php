<?php
$footer_bg_image = get_field('footer_bg_image', 'option');
$footer_main_text = get_field('footer_main_text', 'option');
$footer_slogan = get_field('footer_slogan', 'option');
$footer_sub_text = get_field('footer_sub_text', 'option');

$contact_group = get_field('footer_contact_group', 'option');

$footer_name = $contact_group['footer_name'] ?? '';
$footer_address = $contact_group['footer_location'] ?? '';
$footer_phone = $contact_group['footer_phone'] ?? '';
$footer_email = $contact_group['footer_email'] ?? '';
?>


<footer id="colophon" class="site-footer text-white pt-16 pb-4 relative overflow-hidden">

    <!-- background image -->
    <div class="absolute inset-0 z-[1] overflow-hidden rounded-tr-[270px]">

        <div class="w-full h-full bg-cover bg-center grayscale rounded-tr-[270px]" style="
                background-image: url('<?php echo esc_url($footer_bg_image); ?>'); 
            "></div>

        <div class="absolute inset-0 bg-black/80 rounded-tr-[270px]"></div>
    </div>


    <div class="container mx-auto px-4 relative z-10 flex flex-col h-full">

        <div class="flex flex-col items-center text-center mb-16">

            <!-- logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Stopka Top Pear" class="mb-16">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/main-page/logo/logo_white.png"
                    alt="Top Pear Logo White" class="w-40 h-auto mx-auto">
            </a>

            <!-- socials -->
            <div class="flex space-x-4 mb-10 text-xl">

                <a href="/" target="_blank" aria-label="Instagram"
                    class=" w-full lg:w-1/2 px-4 flex items-center justify-center h-11 hover:text-[#D50B0D] transition-colors">
                    <i data-lucide="instagram"
                        class="size-11 hover:text-[#D50B0D] mx-auto mb-4 transition-colors duration-300"></i>
                </a>

                <a href="/" target="_blank" aria-label="Facebook"
                    class=" w-full lg:w-1/2 px-4 flex items-center justify-center h-11 hover:text-[#D50B0D] transition-colors">
                    <i data-lucide="facebook"
                        class="size-11 hover:text-[#D50B0D] mx-auto mb-4 transition-colors duration-300"></i>
                </a>
            </div>

            <!-- main texts -->
            <h1 class="text-5xl font-bold mb-3">

                <?php
                $footer_main_text = get_field('footer_main_text', 'option');

                $sentence_colored = "DRIVE THE EXPERIENCE";

                $replace_with = '<span class="text-[#D50B0D]">' . $sentence_colored . '</span>';

                $formatted = str_replace(search: $sentence_colored, replace: $replace_with, subject: $footer_main_text);

                echo $formatted;

                ?>
            </h1>

            <p class="max-w-md mx-auto text-2xl mb-10 mt-2">
                <?php echo esc_html($footer_slogan); ?>
            </p>

            <p class="max-w-2xl mx-auto mb-2 -mt-2 text-2xl">
                <?php echo esc_html($footer_sub_text); ?>
            </p>

        </div>

        <!-- logos - grid-3 -->
        <div class="flex flex-wrap justify-center md:justify-between text-center mb-16">

            <div class="contact-item w-full sm:w-1/3 md:w-1/4 px-4">
                <i data-lucide="map-pin" class="w-10 h-10 text-[#D50B0D] mx-auto mb-4"></i>

                <p class="text-xl font-semibold">
                    <?php echo esc_html($footer_name); ?>
                </p>
                <a href="https://www.google.com/maps/dir/50.084784,19.9605857/49.97931,20.10105/@49.979078,20.0874415,14.58z/data=!4m4!4m3!1m1!4e1!1m0?entry=ttu&g_ep=EgoyMDI1MTEyMy4xIKXMDSoASAFQAw%3D%3D"
                    target="_blank" class="hover:text-[#D50B0D] transition-colors duration-300 text-xl font-semibold">
                    <?php echo esc_html($footer_address); ?>
                </a>

            </div>

            <div class="contact-item w-full sm:w-1/3 md:w-1/4 px-4">
                <i data-lucide="smartphone" class="w-10 h-10 text-[#D50B0D] mx-auto mb-4"></i>

                <!-- anchor tel num -->
                <a href="tel:<?php echo str_replace(search: ' ', replace: '', subject: $footer_phone); ?>"
                    class="hover:text-[#D50B0D] transition-colors duration-300 text-xl font-semibold">
                    <?php echo esc_html($footer_phone); ?>
                </a>
            </div>

            <div class="contact-item w-full sm:w-1/3 md:w-1/4 px-4">
                <i data-lucide="mail-open" class="w-10 h-10 text-[#D50B0D] mx-auto mb-4"></i>
                <!-- anchor mail -->
                <a href="mailto:<?php echo esc_attr($footer_email); ?>"
                    class="hover:text-[#D50B0D] transition-colors duration-300 text-xl font-semibold">
                    <?php echo esc_html($footer_email); ?>
                </a>
            </div>
        </div>


        <!-- DO NOT REMOVE -->
        <div class="flex flex-col sm:flex-row justify-between items-center text-xs pt-2 tracking-wider">

            <p class="mb-2 sm:mb-0">
                &copy; <?php echo date(format: 'Y'); ?> TOP PEAR
            </p>

            <div class="flex flex-row items-center justify-end gap-4">

                <p class=" m-0">
                    <?php _e('Projekt i realizacja:', 'textdomain')
                    ; ?>
                </p>

                <a href="" target="_blank" class="block hover:opacity-80 transition-opacity">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/main-page/icons/firm_logo.png"
                        alt="Top Pear Logo" class="size-14">
                </a>

            </div>

        </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>