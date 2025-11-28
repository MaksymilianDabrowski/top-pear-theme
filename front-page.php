<?php
get_header();
?>

<?php
// HERO variables
$hero_bg_image = get_field('home_hero_bg_image');
?>
<main id="hero" class="site-main">
    <!-- HERO background -->
    <section id="hero"
        class="section section-hero relative w-full min-h-[70vh] bg-cover bg-center overflow-hidden rounded-tr-[240px]"
        style="background-image: url('<?php echo esc_url($hero_bg_image); ?>');">

        <div class="absolute inset-0 bg-black/25 z-[1]"></div>
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
                    <?php if (!empty($about_main_text)): ?>
                        <h2 class="text-xl md:text-3xl mb-10 text-white tracking-wide leading-relaxed max-w-xl lg:max-w-md">
                            <?php echo $about_main_text ?>
                        </h2>
                    <?php else: ?>
                        <p class="font-medium uppercase tracking-wider leading-none">
                            $about_main_text was not imported
                        </p>
                    <?php endif; ?>

                    <a href="#wyprawy"
                        class="inline-flex items-center justify-center gap-4 border-2 border-white rounded-full px-8 py-3 hover:bg-white hover:text-black transition-colors duration-300">

                        <span class="font-medium uppercase tracking-wider leading-none">
                            <?php if (!empty($about_button_text)): ?>
                                <?php echo $about_button_text ?>
                            <?php else: ?>
                                <p class="font-medium uppercase tracking-wider leading-none">
                                    $about_button_text was not imported
                                </p>
                            <?php endif; ?>

                        </span>

                        <i data-lucide="arrow-down" stroke-width="2" class="block size-4">
                        </i>
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
    $trips_main_text = get_field('home_trips_main_text') ?? "";
    $trips_secondary_text = get_field('home_trips_secondary_text') ?? "";
    $trips_simple_text_first = get_field('home_trips_simple_text_intro') ?? "";
    $home_trips_simple_text_second = get_field('home_trips_simple_text_next') ?? "";
    $home_trips_simple_text_third = get_field('home_trips_simple_text_bold') ?? "";
    $trips_button_text = get_field('home_trips_button_text') ?? "";
    $trips_images = get_field('home_trips_images') ?? "";
    $trips_card_details = get_field('home_trips_card_details') ?? "";
    // var test
    $trips_test = get_field("home_trips_test") ?? "";
    ?>

    <section id="trips" class="section section-trips w-[1280px] mx-auto text-gray-800 lg:pt-20">
        <div class="container mx-auto px-4">

            <h1 class="text-4xl md:text-6xl">
                <?php if (!empty($trips_main_text)): ?>
                    <?php echo $trips_main_text ?>
                <?php else: ?>
                    <p class="font-medium uppercase tracking-wider leading-none">
                        $trips_main_text was not imported
                    </p>
                <?php endif; ?>
            </h1>

            <div class="text-3xl font-normal mt-4"> <!-- make text colors consistent -->
                <?php echo $trips_secondary_text; ?>
            </div>

            <!-- TODO - fix wysiwyg var in acf -->
            <!-- <p class="text-xl">
                <?php echo esc_html($trips_test); ?>
            </p> -->

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
                class="inline-flex items-center space-x-2 group border-2 border-red-500 rounded-full px-8 py-4 text-red-500 hover:bg-red-500 hover:text-white transition-colors duration-300">
                <span class="font-medium">
                    <?php echo esc_html($trips_button_text); ?>
                </span>
                <span class="font-bold">
                    <i data-lucide="arrow-right" stroke-width="2"
                        class="block size-5 group-hover:translate-x-1 transition-transform duration-300">
                    </i>


                </span>
            </a>

            <!-- trips images -->
            <?php
            $trips_images = get_field('home_trips_images');

            $trips_card_details = get_field('home_trips_card_details');
            ?>

            <?php if ($trips_images): ?>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 pb-20">

                    <?php
                    $offset_classes = ['', 'lg:mt-8', 'lg:mt-16'];

                    foreach ($trips_images as $index => $image_data):

                        if (is_array(value: $trips_card_details) && isset($trips_card_details[$index])) {
                            $current_title = $trips_card_details[$index]['card_title'];
                        } else {
                            $current_title = 'Wyprawa';
                        }

                        $image_url = is_array($image_data) ? $image_data['url'] : $image_data;

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
    $photo_main_text = get_field('home_photo_main_text');
    $photo_sub_text_bold = get_field('photo_sub_text_bold');
    $photo_sub_text_next = get_field('photo_sub_text_next');
    $photo_gallery = get_field('home_photo_images');
    $photo_button_text = get_field('photo_btn_text');
    ?>

    <section id="photo" class="relative w-full">

        <!-- main background -->
        <div class="relative w-full min-h-[85vh] bg-cover bg-center overflow-hidden rounded-tl-[270px]"
            style="background-image: url('<?php echo esc_url($photo_bg_image); ?>');">
            <div class="absolute inset-0 bg-black/30"></div>
        </div>

        <!-- background split -->
        <div class="relative w-full min-h-[140vh] flex flex-col md:flex-row overflow-hidden">
            <div class="w-full md:w-1/2 h-[60vh] md:h-auto bg-cover bg-center bg-black"
                style="<?php echo top_pear_get_bg_style(field_name: 'home_photo_bg_image_left'); ?>">
            </div>
            <div class="w-full md:w-1/2 h-[60vh] md:h-auto bg-cover bg-center bg-black"
                style="<?php echo top_pear_get_bg_style(field_name: 'home_photo_bg_image_right'); ?>">
            </div>
            <div class="absolute inset-0 bg-black/75"></div>
        </div>

        <!-- main text -->
        <div class="absolute left-0 w-full top-[calc(80vh-20px)] pointer-events-none">
            <div class="container mx-auto px-4 max-w-5xl">
                <h1
                    class="text-4xl md:text-6xl text-white drop-shadow-lg leading-normal text-left pb-10 pointer-events-auto">
                    <?php echo wp_kses_post($photo_main_text); ?>
                </h1>
            </div>
        </div>

        <!-- sub text -->
        <div class="absolute left-0 w-full top-[calc(100vh)] pointer-events-none">
            <div class="container mx-auto px-4 max-w-5xl">
                <h2
                    class="text-xl md:text-3xl text-white drop-shadow-lg leading-normal text-left pb-10 pointer-events-auto">
                    <?php echo wp_kses_post($photo_sub_text_bold); ?>
                </h2>
            </div>
        </div>

        <!-- text cd -->
        <div class="absolute left-0 w-full top-[calc(120vh-20px)] pointer-events-none">
            <div class="container mx-auto px-4 max-w-5xl">
                <h3
                    class="text-xl md:text-3xl text-white drop-shadow-lg leading-normal text-left pb-10 pointer-events-auto">
                    <?php echo wp_kses_post($photo_sub_text_next); ?>
                </h3>
            </div>
        </div>

        <!-- gallery + btn -->
        <div class="absolute left-0 w-full top-[calc(140vh-40px)] z-20 pointer-events-none pb-20">

            <div class="container mx-auto px-4 pointer-events-auto max-w-5xl">

                <?php if ($photo_gallery): ?>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mb-12">
                        <?php foreach ($photo_gallery as $image_url): ?>
                            <div class="relative aspect-square group overflow-hidden rounded-lg shadow-xl cursor-pointer">
                                <img src="<?php echo esc_url($image_url); ?>" alt="Galeria Top Pear"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-300">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <div class="flex justify-center w-full"> <a href="/odkrywaj-z-nami"
                        class="inline-flex items-center space-x-2 group border-2 text-white border-white rounded-full px-8 py-3 hover:bg-white hover:text-black transition-colors duration-300">
                        <span class="font-medium">
                            <?php echo esc_html($trips_button_text); ?>
                        </span>
                        <i data-lucide="arrow-right" stroke-width="2"
                            class="block size-5 group-hover:translate-x-1 transition-transform duration-300">
                        </i>
                    </a>

                </div>

            </div>
        </div>

    </section>



    <!-- <section id="photo" class="relative w-full overflow-hidden">

        <div class="relative w-full min-h-screen bg-cover bg-center"
            style="background-image: url('<?php echo esc_url($photo_bg_image); ?>');">
        </div>

        <div class="relative w-full min-h-[120vh] flex flex-col md:flex-row">

            <div class="w-full md:w-1/2 h-[60vh] md:h-auto bg-cover bg-center"
                style="<?php echo top_pear_get_bg_style('home_photo_bg_image_left'); ?>">
            </div>

            <div class="w-full md:w-1/2 h-[60vh] md:h-auto bg-cover bg-center"
                style="<?php echo top_pear_get_bg_style('home_photo_bg_image_right'); ?>">
            </div>

        </div>

        <div class="absolute left-0 w-full flex justify-center text-center pointer-events-none"
            style="top: calc(100vh - 50px);">

            <h2 class="text-4xl md:text-6xl text-white drop-shadow-lg max-w-5xl mx-auto">
                <?php echo wp_kses_post($photo_main_text); ?>
            </h2>

        </div>

    </section> -->



    <?php
    // FAQ variables
    $faq_main_text = get_field('faq_main_text');
    $faq_sub_text = get_field('faq_sub_text');
    $i = 0;
    ?>

    <section id="FAQ" class="py-20 md:py-32">
        <div class="container mx-auto max-w-5xl">

            <?php if (!empty($faq_main_text)): ?>
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-4">
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
                    $i = 0;
                    while (have_rows('faq_repeater')):
                        the_row();

                        $question = get_sub_field('faq_question');
                        $answer = get_sub_field('faq_answer');

                        $i++;
                        $unique_id = "faq-answer" . $i;
                        ?>

                        <div class="faq-item bg-white p-3 border-b border-gray-100 last:border-0">
                            <button
                                class="group faq-question w-full text-lg md:text-xl font-bold cursor-pointer flex items-center text-left py-2 hover:bg-gray-50 transition-colors duration-200 space-x-4"
                                aria-expanded="false" aria-controls="<?php echo esc_attr($unique_id); ?>">

                                <i data-lucide="chevron-down"
                                    class="plus-icon text-black w-6 h-6 flex-shrink-0 transform transition-transform duration-300 group-aria-expanded:rotate-180">
                                </i>

                                <h3 class="my-0">
                                    <?php echo esc_html($question); ?>
                                </h3>

                            </button>

                            <div id="<?php echo esc_attr($unique_id); ?>"
                                class="faq-answer pl-10 pt-2 pb-4 text-lg tracking-normal text-gray-600" style="display: none;">
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