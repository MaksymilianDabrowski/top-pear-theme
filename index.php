<?php get_header(); ?>

<main id="content" class="site-content">
    <div class="container mx-auto px-4 py-12">

        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>

                <h1 class="text-4xl font-bold mb-6"><?php the_title(); ?></h1>

                <div class="prose max-w-none">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>