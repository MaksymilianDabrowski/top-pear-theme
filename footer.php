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
            <!-- potential bug - icons can appear as different sizes -->
            <div class="flex space-x-4 mb-10 text-xl">

                <a href="/" target="_blank" aria-label="Instagram"
                    class=" w-full lg:w-1/2 px-4 flex items-center justify-center w-11 h-11 hover:text-[#D50B0D] transition-colors">
                    <svg class="w-full h-full" viewBox="0 0 24 24" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2 6C2 3.79086 3.79086 2 6 2H18C20.2091 2 22 3.79086 22 6V18C22 20.2091 20.2091 22 18 22H6C3.79086 22 2 20.2091 2 18V6ZM6 4C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4H6ZM12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9ZM7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12ZM17.5 8C18.3284 8 19 7.32843 19 6.5C19 5.67157 18.3284 5 17.5 5C16.6716 5 16 5.67157 16 6.5C16 7.32843 16.6716 8 17.5 8Z">
                        </path>
                    </svg>
                </a>

                <a href="/" target="_blank" aria-label="Facebook"
                    class=" w-full lg:w-1/2 px-4 flex items-center justify-center w-11 h-11 hover:text-[#D50B0D] transition-colors">
                    <svg class="w-full h-full" viewBox="0 0 24 24" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M20 1C21.6569 1 23 2.34315 23 4V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H20ZM20 3C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H15V13.9999H17.0762C17.5066 13.9999 17.8887 13.7245 18.0249 13.3161L18.4679 11.9871C18.6298 11.5014 18.2683 10.9999 17.7564 10.9999H15V8.99992C15 8.49992 15.5 7.99992 16 7.99992H18C18.5523 7.99992 19 7.5522 19 6.99992V6.31393C19 5.99091 18.7937 5.7013 18.4813 5.61887C17.1705 5.27295 16 5.27295 16 5.27295C13.5 5.27295 12 6.99992 12 8.49992V10.9999H10C9.44772 10.9999 9 11.4476 9 11.9999V12.9999C9 13.5522 9.44771 13.9999 10 13.9999H12V21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20Z">
                        </path>
                    </svg>
                </a>
            </div>

            <!-- main texts -->
            <h2 class="text-5xl font-bold mb-3">

                <?php
                $footer_main_text = get_field('footer_main_text', 'option');

                $sentence_to_bold = "DRIVE THE EXPERIENCE";

                $replace_with = '<span class="text-[#D50B0D] font-extrabold">' . $sentence_to_bold . '</span>';

                $formatted = str_replace($sentence_to_bold, $replace_with, $footer_main_text);

                echo $formatted;

                ?>
            </h2>

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
                <svg width="34px" height="34px" viewBox="0 0 16 16" fill="#FB0106" xmlns="http://www.w3.org/2000/svg"
                    class="mx-auto mb-3 text-[#D50B0D]">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3.37892 10.2236L8 16L12.6211 10.2236C13.5137 9.10788 14 7.72154 14 6.29266V6C14 2.68629 11.3137 0 8 0C4.68629 0 2 2.68629 2 6V6.29266C2 7.72154 2.4863 9.10788 3.37892 10.2236ZM8 8C9.10457 8 10 7.10457 10 6C10 4.89543 9.10457 4 8 4C6.89543 4 6 4.89543 6 6C6 7.10457 6.89543 8 8 8Z">
                    </path>
                </svg>

                <p class="text-xl font-semibold">
                    <?php echo esc_html($footer_name); ?>
                </p>
                <a href="https://www.google.com/maps/dir/50.084784,19.9605857/49.97931,20.10105/@49.979078,20.0874415,14.58z/data=!4m4!4m3!1m1!4e1!1m0?entry=ttu&g_ep=EgoyMDI1MTEyMy4xIKXMDSoASAFQAw%3D%3D"
                    target="_blank" class="hover:text-[#D50B0D] transition-colors duration-300 text-xl font-semibold">
                    <?php echo esc_html($footer_address); ?>
                </a>

            </div>

            <div class="contact-item w-full sm:w-1/3 md:w-1/4 px-4">
                <svg width="44px" height="44px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="mx-auto mb-3 text-[#D50B0D]">
                    <path
                        d="M12 18.01V18M8 3H16C17.1046 3 18 3.89543 18 5V19C18 20.1046 17.1046 21 16 21H8C6.89543 21 6 20.1046 6 19V5C6 3.89543 6.89543 3 8 3Z"
                        stroke="#FB0106" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>

                <!-- anchor tel num -->
                <a href="tel:<?php echo str_replace(' ', '', $footer_phone); ?>"
                    class="hover:text-[#D50B0D] transition-colors duration-300 text-xl font-semibold">
                    <?php echo esc_html($footer_phone); ?>
                </a>
            </div>

            <div class="contact-item w-full sm:w-1/3 md:w-1/4 px-4">
                <svg width="44px" height="44px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="mx-auto mb-3 text-[#D50B0D]">
                    <path
                        d="M4 19L9 14M20 19L15 14M3.02832 10L10.2246 14.8166C10.8661 15.2443 11.1869 15.4581 11.5336 15.5412C11.8399 15.6146 12.1593 15.6146 12.4657 15.5412C12.8124 15.4581 13.1332 15.2443 13.7747 14.8166L20.971 10M10.2981 4.06879L4.49814 7.71127C3.95121 8.05474 3.67775 8.22648 3.4794 8.45864C3.30385 8.66412 3.17176 8.90305 3.09111 9.161C3 9.45244 3 9.77535 3 10.4212V16.8C3 17.9201 3 18.4802 3.21799 18.908C3.40973 19.2843 3.71569 19.5903 4.09202 19.782C4.51984 20 5.0799 20 6.2 20H17.8C18.9201 20 19.4802 20 19.908 19.782C20.2843 19.5903 20.5903 19.2843 20.782 18.908C21 18.4802 21 17.9201 21 16.8V10.4212C21 9.77535 21 9.45244 20.9089 9.161C20.8282 8.90305 20.6962 8.66412 20.5206 8.45864C20.3223 8.22648 20.0488 8.05474 19.5019 7.71127L13.7019 4.06879C13.0846 3.68116 12.776 3.48735 12.4449 3.4118C12.152 3.34499 11.848 3.34499 11.5551 3.4118C11.224 3.48735 10.9154 3.68116 10.2981 4.06879Z"
                        stroke="#FB0106" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
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
                    Projekt i realizacja:
                </p>

                <a href="" target="_blank" class="block hover:opacity-80 transition-opacity">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/main-page/icons/firm_logo.png"
                        alt="Top Pear Logo" class="size-14"> </a>

            </div>

        </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>