<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sbtechbd-Technologies
 */

?>


</div><!-- #row -->
</div><!-- #container -->

<footer id="colophon" class="site-footer text-center bg-dark text-white py-5">
    <div class="site-info container">
        <?php
        echo 'Copyright © ' . date('Y') . ' Sbtechbd';
        ?>
        <span class="sep"> | </span>
        <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf(esc_html__('Powered %1$s by %2$s.',), '', '<a href="http://www.sbtechbd.xyz/">Sbtechbd Technologies</a>');
        ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #pag<e -->

<?php wp_footer(); ?>

</body>

</html>