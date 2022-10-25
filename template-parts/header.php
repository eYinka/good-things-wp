<?php get_template_part('template-parts/topbar'); ?>
<header class="w-full py-4">
    <div class="container">
        <div class="flex justify-between items-center">
            <div class="w-auto">
                <img src="<?php echo (has_custom_logo()) ? get_custom_logo() :  get_template_directory_uri() .  '/assets/img/logo.png' ?>" class="h-14" alt="Logo">
            </div>
            <?php get_template_part('template-parts/navbar'); ?> 
        </div>
    </div>
</header>