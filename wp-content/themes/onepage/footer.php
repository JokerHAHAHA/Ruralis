<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Onepage
 */

?>

<?php igthemes_after_site_content(); ?>
    </div><!-- #content -->
        </div><!-- .row -->
            </div><!-- .grid -->
<?php igthemes_before_footer(); ?>

    <footer id="colophon" class="site-footer" role="contentinfo">
        <?php igthemes_footer(); ?>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
