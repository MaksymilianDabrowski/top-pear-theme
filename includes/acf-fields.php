<?php

if (function_exists('acf_add_local_field_group')):


    acf_add_options_page([
        'page_title' => 'Ustawienia Stopki (Globalne)',
        'menu_title' => 'Stopka',
        'menu_slug' => 'theme-footer-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ]);

    // front-page.php
    acf_add_local_field_group([
        'key' => 'group_home_page_sections',
        'title' => 'Strona Główna - Sekcje',
        'fields' => [
            // === Sekcja HERO ===
            [
                'key' => 'field_home_hero_group',
                'label' => 'Sekcja Hero',
                'type' => 'tab',
            ],
            [
                'key' => 'field_home_hero_bg_image',
                'label' => 'Zdjęcie Tła Hero',
                'name' => 'home_hero_bg_image',
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'medium',
            ],

            // === Sekcja ABOUT ===
            [
                'key' => 'field_home_about_group',
                'label' => 'Sekcja O Nas',
                'type' => 'tab',
            ],
            [
                'key' => 'field_home_about_bg_image',
                'label' => 'Zdjęcie Tła O Nas',
                'name' => 'home_about_bg_image',
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'medium',
            ],
            [
                'key' => 'field_home_about_main_text',
                'label' => 'Tekst Główny O Nas',
                'name' => 'home_about_main_text',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_home_about_button_text',
                'label' => 'Tekst Przycisku',
                'name' => 'home_about_button_text',
                'type' => 'text',
            ],
            [
                'key' => 'field_home_about_collage_images',
                'label' => 'Zdjęcia Kolażowe',
                'name' => 'home_about_collage_images',
                'type' => 'gallery',
                'return_format' => 'url',
            ],

            // === Sekcja TRIPS ===
            [
                'key' => 'field_home_trips_group',
                'label' => 'Sekcja Wycieczki',
                'type' => 'tab',
            ],
            [
                'key' => 'field_home_trips_main_text',
                'label' => 'Tekst Główny',
                'name' => 'home_trips_main_text',
                'type' => 'text',
            ],
            [
                'key' => 'field_home_trips_secondary_text',
                'label' => 'Tekst Poniżej',
                'name' => 'home_trips_secondary_text',
                'type' => 'text',
            ],
            [
                'key' => 'field_home_trips_simple_text_intro',
                'label' => 'Tekst sekcji - Wprowadzenie',
                'name' => 'home_trips_simple_text_intro',
                'type' => 'text',
            ],
            [
                'key' => 'field_home_trips_simple_text_next',
                'label' => 'Tekst sekcji - Kontynuacja',
                'name' => 'home_trips_simple_text_next',
                'type' => 'text',
            ],
            [
                'key' => 'field_home_trips_simple_text_bold',
                'label' => 'Tekst sekcji - Pogrubiony fragment',
                'name' => 'home_trips_simple_text_bold',
                'type' => 'text',
            ],
            [
                'key' => 'field_home_trips_details_repeater', // Nowy klucz
                'label' => 'Opisy Kart Wypraw',
                'name' => 'home_trips_card_details', // Nowa nazwa slug
                'type' => 'repeater',
                'instructions' => 'Wprowadź tytuły kart (max 3). Muszą odpowiadać kolejności zdjęć w galerii poniżej.',
                'min' => 1,
                'max' => 3, // Ograniczenie do 3, tak jak w galerii
                'layout' => 'table', // Krótki widok dla 3 pól
                'button_label' => 'Dodaj opis karty',
                'sub_fields' => [
                    [
                        'key' => 'field_home_trips_card_title',
                        'label' => 'Tytuł Karty',
                        'name' => 'card_title', // Sub-pole
                        'type' => 'text',
                        'required' => 1,
                    ],
                ],
            ],
            [
                'key' => 'field_home_trips_images',
                'label' => 'Zdjęcia Sekcji (max 3)',
                'name' => 'home_trips_images',
                'type' => 'gallery',
                'return_format' => 'url',
                'library' => 'all',
                'min' => 1,
                'max' => 3,
            ],
            [
                'key' => 'field_home_trips_button_text',
                'label' => 'Tekst Przycisku',
                'name' => 'home_trips_button_text',
                'type' => 'text',
            ],
            [
                'key' => 'field_home_trips_images',
                'label' => 'Zdjęcia Sekcji (max 3)',
                'name' => 'home_trips_images',
                'type' => 'gallery',
                'return_format' => 'url',
                'library' => 'all',
                'min' => 1,
                'max' => 3,
            ],
            // === Sekcja PHOTO ===
            [
                'key' => 'field_home_photo_group',
                'label' => 'Sekcja Photo',
                'type' => 'tab',
            ],
            [
                'key' => 'field_home_photo_bg_image',
                'label' => 'Zdjęcie Tła Photo',
                'name' => 'home_photo_bg_image',
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'medium',
            ],
            [
                'key' => 'field_home_photo_bg_image_left',
                'label' => 'Lewe Zdjęcie Sekcji Photo',
                'name' => 'home_photo_bg_image_left',
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'medium',
            ],
            [
                'key' => 'field_home_photo_bg_image_right',
                'label' => 'Prawe Zdjęcie Sekcji Photo',
                'name' => 'home_photo_bg_image_right',
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'medium',
            ],
            [
                'key' => 'field_home_photo_main_text',
                'label' => 'Tekst Główny Sekcji Photo',
                'name' => 'home_photo_main_text',
                'type' => 'text',
            ],
            [
                'key' => 'field_photo_sub_text_bold',
                'label' => 'Pogróbiony Tekst Poboczny Sekcji Photo',
                'name' => 'photo_sub_text_bold',
                'type' => 'text',
            ],
            [
                'key' => 'field_photo_sub_text_next',
                'label' => 'Dodatkowy Tekst Poboczny Sekcji Photo',
                'name' => 'photo_sub_text_next',
                'type' => 'text',
            ],
            [
                'key' => 'field_photo_btn_text',
                'label' => 'Tekst Przycisku Sekcji Photo',
                'name' => 'photo_btn_text',
                'type' => 'text',
            ],
            [
                'key' => 'field_home_photo_images',
                'label' => 'Zdjęcia Sekcji (max 6)',
                'name' => 'home_photo_images',
                'type' => 'gallery',
                'return_format' => 'url',
                'library' => 'all',
                'min' => 1,
                'max' => 6,
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ],
            ],
        ],
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => [
            'discussion',
            'comments',
            'slug',
            'author',
        ],
    ]);

    // FAQ
    acf_add_local_field_group([
        'key' => 'group_faq_section',
        'title' => 'Sekcja FAQ (Często Zadawane Pytania)',
        'fields' => [
            [
                'key' => 'field_faq_main_text',
                'label' => 'Tekst Główny Sekcji FAQ',
                'name' => 'faq_main_text',
                'type' => 'text',
            ],
            [
                'key' => 'field_faq_sub_text',
                'label' => 'Tekst Poboczny Sekcji FAQ',
                'name' => 'faq_sub_text',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_faq_repeater',
                'label' => 'Pytania i Odpowiedzi (FAQ)',
                'name' => 'faq_repeater',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Dodaj Pytanie/Odpowiedź',
                'sub_fields' => [
                    [
                        'key' => 'field_faq_question',
                        'label' => 'Pytanie',
                        'name' => 'faq_question',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_faq_answer',
                        'label' => 'Odpowiedź',
                        'name' => 'faq_answer',
                        'type' => 'textarea',
                    ],
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ],
            ],
        ],
        'menu_order' => 10,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
    ]);


    // footer
    acf_add_local_field_group([
        'key' => 'group_global_footer',
        'title' => 'Globalne Ustawienia Stopki',
        'fields' => [
            [
                'key' => 'field_footer_bg_image',
                'label' => 'Zdjęcie Tła Stopki',
                'name' => 'footer_bg_image',
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'medium',
            ],
            [
                'key' => 'field_footer_main_text',
                'label' => 'Tekst Główny Stopki',
                'name' => 'footer_main_text',
                'type' => 'text',
            ],
            [
                'key' => 'field_footer_slogan',
                'label' => 'Slogan Firmy',
                'name' => 'footer_slogan',
                'type' => 'text',
            ],
            [
                'key' => 'field_footer_sub_text',
                'label' => 'Tekst Poboczny/Copyright',
                'name' => 'footer_sub_text',
                'type' => 'text',
            ],
            [
                'key' => 'field_footer_contact_group',
                'label' => 'Dane Kontaktowe (Grid 4 kolumny)',
                'name' => 'footer_contact_group',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_footer_name',
                        'label' => 'Nazwa Firmy',
                        'name' => 'footer_name',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_footer_location',
                        'label' => 'Adres (Kolumna 1)',
                        'name' => 'footer_location',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_footer_phone',
                        'label' => 'Telefon (Kolumna 2)',
                        'name' => 'footer_phone',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_footer_email',
                        'label' => 'E-mail (Kolumna 3)',
                        'name' => 'footer_email',
                        'type' => 'email',
                    ],
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-footer-settings',
                ],
            ],
        ],
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
    ]);

endif;