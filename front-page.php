<?php
get_header();
?>

<?php
// HERO variables
$hero_bg_image = get_field('home_hero_bg_image');
?>
<main id="hero" class="site-main">
    <!-- HERO background -->
    <section id="hero" class=" section section-hero relative w-full min-h-[70vh]
        bg-cover bg-center overflow-hidden rounded-tr-[240px]" style="
        background-image: url('<?php echo esc_url($hero_bg_image); ?> ');">
        <div class="absolute inset-0 bg-black/25"></div>

        <div class="container mx-auto px-4 z-10 relative flex h-full items-center justify-center">
        </div>

    </section>

    <!-- white block -->
    <div class="h-[140px] bg-white"></div>


    <!-- FIX SWIPER FORMATTING -->
    <?php
    // ABOUT variables
    $about_bg_image = get_field('home_about_bg_image');
    $about_main_text = get_field('home_about_main_text');
    $about_button_text = get_field('home_about_button_text');
    $collage_images = get_field('home_about_collage_images'); // ACF Gallery Field
    ?>

    <section id="about"
        class="section section-about w-full text-white min-h-screen bg-center bg-cover overflow-hidden bg-black"
        style="background-image: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.85)), url('<?php echo esc_url($about_bg_image); ?>');">

        <div class="container mx-auto px-4 h-full flex items-center py-20">

            <div class="flex flex-wrap lg:flex-nowrap justify-between items-center gap-12 w-full">

                <div class="w-full lg:w-1/2 pr-0 lg:pr-12 pt-10">
                    <h2 class="text-xl md:text-3xl mb-10 text-white tracking-wide leading-relaxed max-w-xl lg:max-w-md">
                        <?php
                        // Logika pogrubiania tekstu
                        $sentence_to_bold = "Każda wyprawa Top Pear to połączenie pasji, stylu i wolności.";
                        if ($about_main_text) {
                            $replace_with = '<span class="font-semibold text-white">' . $sentence_to_bold . '</span>';
                            if (strpos($about_main_text, $sentence_to_bold) !== false) {
                                $formatted = str_replace($sentence_to_bold, $replace_with, $about_main_text);
                                echo $formatted;
                            } else {
                                echo wp_kses_post($about_main_text);
                            }
                        }
                        ?>
                    </h2>

                    <a href="#wyprawy"
                        class="inline-flex items-center space-x-2 border-2 border-white rounded-full px-8 py-3 hover:bg-white hover:text-black transition-colors duration-300 group">
                        <span class="font-medium text-sm uppercase tracking-wider">
                            <?php echo esc_html($about_button_text); ?>
                        </span>

                        <span class="font-bold text-lg leading-none">
                            ↓
                        </span>
                    </a>
                </div>

                <div class="w-full lg:w-1/2 relative min-h-[400px] lg:min-h-[500px]">

                    <?php if ($collage_images): ?>
                        <div class="swiper mySwiper-about w-full h-full rounded-xl overflow-hidden shadow-2xl">

                            <div class="swiper-wrapper">
                                <?php foreach ($collage_images as $image_url): ?>
                                    <div class="swiper-slide">
                                        <div class="relative w-full h-[400px] lg:h-[800px]">
                                            <img src="<?php echo esc_url($image_url); ?>" alt="Zdjęcie z galerii"
                                                class="absolute inset-0 w-full h-full object-cover">
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="swiper-button-next !right-6"></div>
                            <div class="swiper-button-prev !left-6"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    <?php else: ?>
                        <div class="h-[400px] flex items-center justify-center border border-gray-700 rounded-xl">
                            <p class="text-gray-500">Dodaj zdjęcia do galerii w edycji strony.</p>
                        </div>
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </section>

    <?php
    // TRIPS variables
    $trips_main_text = get_field('home_trips_main_text');
    $trips_secondary_text = get_field('home_trips_secondary_text');
    $trips_simple_text_first = get_field('home_trips_simple_text_intro');
    $home_trips_simple_text_second = get_field('home_trips_simple_text_next');
    $home_trips_simple_text_third = get_field('home_trips_simple_text_bold');
    $trips_button_text = get_field('home_trips_button_text');
    $trips_images = get_field('home_trips_images');
    $trips_card_details = get_field('home_trips_card_details');
    ?>

    <section id="trips" class="section section-trips w-[1280px] mx-auto text-gray-800 lg:pt-20">
        <div class="container mx-auto px-4">

            <h1 class="text-4xl md:text-6xl">
                <?php

                $sentence_to_bold = "stworzone z pasji";

                $replace_with = '<span class=" font-bold">' . $sentence_to_bold . '</span>';

                $formatted = str_replace($sentence_to_bold, $replace_with, $trips_main_text);

                echo $formatted;
                ?>
            </h1>

            <div class=" text-3xl font-normal mt-4"> <!-- make text colors consistent -->
                <?php echo $trips_secondary_text; ?>
            </div>

            <div class="mt-10">
                <p class="text-xl">
                    <?php echo esc_html($trips_simple_text_first); ?>
                </p>

                <p class="text-xl pt-10">
                    <?php echo esc_html($home_trips_simple_text_second); ?>
                </p>

                <p class="text-xl font-semibold pt-10 pb-10">
                    <?php echo esc_html($home_trips_simple_text_third); ?>
                </p>
            </div>

            <!-- trips btn -->
            <a href="/odkrywaj-z-nami"
                class="inline-flex items-center space-x-4 border-2 border-red-500 rounded-full px-8 py-4 text-red-500 hover:bg-red-500 hover:text-white transition-colors duration-300">
                <span class="font-medium text-sm">
                    <?php echo esc_html($trips_button_text); ?>
                </span>
                <span class="font-bold">→</span>
            </a>

            <!-- trips images -->
            <?php if ($trips_images): ?>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 pb-20">

                    <?php
                    $titles = ["Wyjazdy na tory", "Wyjazdy po drogach", "Eventy firmowe"]; // get from acf
                
                    $offset_classes = ['', 'lg:mt-8', 'lg:mt-16'];

                    foreach ($trips_images as $index => $image_url):

                        $current_title = isset($titles[$index]) ? $titles[$index] : 'Wyprawa';

                        $offset_class = isset($offset_classes[$index]) ? $offset_classes[$index] : '';
                        ?>

                        <div class="relative group overflow-hidden rounded-lg shadow-xl <?php echo $offset_class; ?>">

                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($current_title); ?>"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-300">
                            </div>

                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white text-center">
                                <h3
                                    class="text-lg font-semibold border-b-2 border-transparent group-hover:border-white inline-block transition-colors duration-300">
                                    <?php echo esc_html($current_title); ?>
                                </h3>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>


    <!-- TO DO -->

    <?php
    // PHOTO variables
    $photo_bg_image = get_field('home_photo_bg_image');
    $photo_left_side = get_field('home_photo_bg_image_left');
    $photo_right_side = get_field('home_photo_bg_image_right');
    // $photo_text_main = get_field('home_cta_text_main');
    // $photo_sub_text_bold = get_field('photo_sub_text_bold');
    // $photo_sub_text_cd = get_field('photo_sub_text_bold_cd');
    // $photo_gallery = get_field('home_photo_images');
    // $photo_button_text = get_field('home_cta_button_text');
    ?>

    <section id="photo" class=" w-full min-h-screen
        bg-cover bg-center overflow-hidden rounded-tl-[270px]" style="
        background-image: url('<?php echo esc_url($photo_bg_image); ?> ');">
        <!-- <div class="absolute inset-0 bg-black/30"></div> -->
        <div class="inherit">
            <img src="" alt="">
        </div>
    </section>

    <?php
    // FAQ variables
    $faq_main_text = get_field('faq_main_text');
    $faq_sub_text = get_field('faq_sub_text');
    $i = 0;
    ?>

    <section id="FAQ" class="py-20 md:py-32">
        <div class="container mx-auto max-w-5xl">

            <?php if (!empty($faq_main_text)): ?>
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-4"> <!-- 4/5 xl text -->
                    <?php echo esc_html($faq_main_text); ?>
                </h2>
            <?php endif; ?>

            <?php if (!empty($faq_sub_text)): ?>
                <p class="text-3xl text-center mb-12 md:mb-16 max-w-2xl mx-auto">
                    <?php echo esc_html($faq_sub_text); ?>
                </p>
            <?php endif; ?>

            <div class="space-y-4">

                <?php
                if (have_rows('faq_repeater')):
                    while (have_rows('faq_repeater')):
                        the_row();

                        $question = get_sub_field('faq_question');
                        $answer = get_sub_field('faq_answer');

                        $i++;
                        $unique_id = "faq-answer-" . $i;
                        ?>

                        <div class="faq-item bg-white p-3">
                            <button
                                class="faq-question w-full text-lg md:text-xl font-bold cursor-pointer flex justify-between items-center text-left space-x-5"
                                aria-expanded="false" aria-controls="<?php echo esc_attr($unique_id); ?>">

                                <svg class="plus-icon ml-3 text-black size-6 flex-shrink-0 transform transition duration-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z"
                                        clip-rule="evenodd" />
                                </svg>

                                <h3 class="flex-grow my-0 py-4">
                                    <?php echo esc_html($question); ?>
                                </h3>
                            </button>



                            <div id="<?php echo esc_attr($unique_id); ?>" class="faq-answer pl-6 text-lg tracking-normal"
                                style="display: none;">
                                <?php echo $answer; ?>
                            </div>
                        </div>

                    <?php endwhile;
                else:
                    echo '<p class="text-center text-gray-500">Brak zdefiniowanych pytań i odpowiedzi.</p>';
                endif;
                ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>