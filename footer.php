
<footer>
    <?php
    
    wp_nav_menu([
        'theme_location'   => 'header-menu',
        'container'        => 'nav',
        'after'            => '<span class="separator"> | </span>',

     ]);
    ?>

        <div class="location">
                <p>9626 Church Lane</p>
                <p>Phone: 091/574-0000</p>
        </div>

                <p class="copyright">All Rights Reserved &copy; <?php echo date('Y'); ?></p>


</footer>
<?php wp_footer(); ?>


</body>
</html>