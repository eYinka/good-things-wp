<?php get_header(); ?>
<main class="container page py-10">
    <h1 class="text-4xl md:text-7xl text-teal-700 font-bold text-center"><?php the_title(); ?></h1>
    <article class="max-w-7xl mx-auto space-y-6 text-black leading-normal mt-10">
        <?php

            if (have_posts()) {

                while (have_posts()) {
                    the_post();

                    the_content();
                }
            }

        ?>
    </article>
</main>
<?php get_footer(); ?>