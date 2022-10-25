<nav>
    <!-- <ul class="hidden lg:flex space-x-4">
        <li><a href="/" class="router-link-active router-link-exact-active" aria-current="page"><span class="text-base font-semibold text-black hover:text-teal-700 transition">Home</span></a></li>
        <li><a href="/about" class=""><span class="text-base font-semibold text-black hover:text-teal-700 transition">What we do</span></a></li>
        <li><a href="/services" class=""><span class="text-base font-semibold text-black hover:text-teal-700 transition">The digital divide</span></a></li>
        <li><a href="/" class="router-link-active router-link-exact-active" aria-current="page"><span class="text-base font-semibold text-black hover:text-teal-700 transition">Get involved</span></a></li>
        <li><a href="/" class="router-link-active router-link-exact-active" aria-current="page"><span class="text-base font-semibold text-black hover:text-teal-700 transition">Our network</span></a></li>
        <li><a href="/" class="router-link-active router-link-exact-active" aria-current="page"><span class="text-base font-semibold text-black hover:text-teal-700 transition">Insights</span></a></li>
    </ul> -->

        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'hidden lg:flex space-x-4 text-base font-semibold text-black transition'
            )
        );
        ?>
    <!-- Hamrburger for mobile menu -->
    <div class="flex lg:hidden cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
        </svg></div>
</nav>