<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

//wp_footer();
$PageTitle = wp_title( '|', false, 'right' );
$TopDir = "../";
include $TopDir . "footer.php";
?>