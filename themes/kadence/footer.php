<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kadence
 */

namespace Kadence;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Hook for bottom of inner wrap.
 */
do_action('kadence_after_content');
?>
<footer class="bg-bg rounded-t-common w-full md:mt-20 mt-16">
    <div class="grid md:grid-cols-3 grid-cols-2 md:gap-40 gap-10 mx-auto md:max-w-8xl md:p-24 p-7">
        <div>
            <ul class="pt-3">
                <?php if (is_active_sidebar('footer1')) {
                    dynamic_sidebar('footer1');
                } ?>
            </ul>
        </div>
        <div>
            <h5 class="font-heading text-primary text-3xl font-semibold pb-7 md:mt-0 mt-7">Services</h5>
            <ul>
                <?php if (is_active_sidebar('footer2')) {
                    dynamic_sidebar('footer2');
                } ?>
            </ul>
        </div>
        <div>
            <h5 class="font-heading text-primary text-3xl font-semibold pb-7">Contact Us</h5>
            <ul>
                <?php if (is_active_sidebar('footer4')) {
                    dynamic_sidebar('footer4');
                } ?>
            </ul>
        </div>
    </div>
    <div class="bg-primary rounded-common mx-auto md:max-w-7xl md:pl-24 md:pe-20 px-7 md:px-0 md:py-6 py-3 ">
        <div class="text-center">
            <h2 class="md:text-base text-[12px] text-white">c 2024 DRINA Consulting pvt. Ltd. All rights reserved.</h2>
        </div>
    </div>
</footer>
</div><!-- #wrapper -->
<?php do_action('kadence_after_wrapper'); ?>

<?php wp_footer(); ?>
</body>

</html>